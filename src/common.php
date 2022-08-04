<?php

/**
 * 公共代码块
 *
 * @Author: 谢城华 xiechenghua01@163.com
 * @Time: 2022/8/3 16:25
 */

/**
 * 统一数据返回
 *
 * @param int $code 状态码
 * @param array $data  数据
 * @param int $status 状态码
 * @param string $msg 消息
 * @param int $httpStatus http状态码
 * @return \think\response\Json|string
 */
function show(int $code = 0, array $data = [], int $status = 0, string $msg = '', int $httpStatus = 0)
{
    //如果消息提示为空，并且业务状态码定义了，那么就显示默认定义的消息提示
    if (empty($msg) && !empty(config("transformation." . $code)))
    {
        $msg = config("transformation." . $code . ".msg");
    }

    // http状态码
    $httpStatus = empty($httpStatus) && !empty(config("transformation." . $code . ".httpStatus"))
        ? config("transformation." . $code . ".httpStatus")
        : 200;

    $result = [
        'code' => $code,
        'status' => $status,
        'message' => $msg,
        'data' => $data
    ];

    return json($result, $httpStatus);
}

/**
 * 抛出http异常
 *
 * @param string $message 异常信息
 * @param int $statusCode 异常状态码
 */
function httpError(string $message, int $statusCode)
{
    abort($statusCode, $message);
}

/**
 * http请求格式错误时抛出
 *
 * @param string $message 异常信息
 */
function httpErrorBadRequest(string $message = '错误请求')
{
    httpError($message, 400);
}

/**
 * 未授权访问资源，一般用于请求方没有提供有效令牌时抛出异常
 *
 * @param string $message 异常信息
 */
function httpErrorUnauthorized(string $message = '未授权访问')
{
    httpError($message, 401);
}

/**
 * 非法访问资源，一般用于请求方访问没有权限的资源
 *
 * @param string $message 异常信息
 */
function httpErrorForbidden(string $message = '无权访问该资源')
{
    httpError($message, 403);
}

/**
 * 资源不存在
 *
 * @param string $message 异常信息
 */
function httpErrorNotFound(string $message = '资源不存在')
{
    httpError($message, 404);
}

/**
 * 请求方法不允许
 *
 * @param string $message 异常信息
 */
function httpErrorMethodNotAllowed(string $message = '非法操作')
{
    httpError($message, 405);
}

/**
 * 请求实体无法处理，一般用于表单验证失败
 *
 * @param string $message 异常信息
 */
function httpErrorUnprocessableEntity(string $message = '表单验证失败')
{
    httpError($message, 422);
}

/**
 * 服务器内部错误
 *
 * @param string $message 异常信息
 */
function httpErrorInternal(string $message = '服务器错误')
{
    httpError($message, 500);
}

/**
 * 资源暂时未准备好，要求请求方暂时不访问资源，如果可以，返回消息中可以包含可以正常访问资源的时间
 *
 * @param string $message 异常信息
 */
function httpErrorNotReady(string $message = '资源未准备好')
{
    httpError($message, 503);
}

