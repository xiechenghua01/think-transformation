<?php

/**
 * 公共代码块
 *
 * @Author: 谢城华 xiechenghua01@163.com
 * @Time: 2022/8/3 16:25
 */

/**
 * 抛出http异常
 *
 * @param string $message 异常信息
 * @param int $statusCode 异常状态码
 */
if (!function_exists('httpError'))
{
    function httpError(string $message, int $statusCode): void
    {
        abort($statusCode, $message);
    }
}

/**
 * http请求格式错误时抛出
 *
 * @param string $message 异常信息
 */
if (!function_exists('httpErrorBadRequest'))
{
    function httpErrorBadRequest(string $message = '错误请求'): void
    {
        httpError($message, 400);
    }
}

/**
 * 未授权访问资源，一般用于请求方没有提供有效令牌时抛出异常
 *
 * @param string $message 异常信息
 */
if (!function_exists('httpErrorUnauthorized'))
{
    function httpErrorUnauthorized(string $message = '未授权访问'): void
    {
        httpError($message, 401);
    }
}

/**
 * 非法访问资源，一般用于请求方访问没有权限的资源
 *
 * @param string $message 异常信息
 */
if (!function_exists('httpErrorForbidden'))
{
    function httpErrorForbidden(string $message = '无权访问该资源'): void
    {
        httpError($message, 403);
    }
}

/**
 * 资源不存在
 *
 * @param string $message 异常信息
 */
if (!function_exists('httpErrorNotFound'))
{
    function httpErrorNotFound(string $message = '资源不存在'): void
    {
        httpError($message, 404);
    }
}

/**
 * 请求方法不允许
 *
 * @param string $message 异常信息
 */
if (!function_exists('httpErrorMethodNotAllowed'))
{
    function httpErrorMethodNotAllowed(string $message = '非法操作'): void
    {
        httpError($message, 405);
    }
}

/**
 * 请求实体无法处理，一般用于表单验证失败
 *
 * @param string $message 异常信息
 */
if (!function_exists('httpErrorUnprocessableEntity'))
{
    function httpErrorUnprocessableEntity(string $message = '表单验证失败'): void
    {
        httpError($message, 422);
    }
}

/**
 * 服务器内部错误
 *
 * @param string $message 异常信息
 */
if (!function_exists('httpErrorInternal'))
{
    function httpErrorInternal(string $message = '服务器错误'): void
    {
        httpError($message, 500);
    }
}

/**
 * 资源暂时未准备好，要求请求方暂时不访问资源，如果可以，返回消息中可以包含可以正常访问资源的时间
 *
 * @param string $message 异常信息
 */
if (!function_exists('httpErrorNotReady'))
{
    function httpErrorNotReady(string $message = '资源未准备好'): void
    {
        httpError($message, 503);
    }
}

