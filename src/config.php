<?php

/**
 * 配置业务状态码
 *
 * @Author: 谢城华 xiechenghua01@163.com
 * @Time: 2022/8/3 16:22
 */

return [
    '10000' => [
        'msg' => '不存在的请求地址',
        'httpStatus' => 500
    ],

    // 成功请求
    '20000' => [
        'msg' => '成功',
        'httpStatus' => 200
    ],

    // 异常请求
    '400' => [
        'msg' => '错误请求',
        'httpStatus' => 400
    ],
    '401' => [
        'msg' => '未授权访问',
        'httpStatus' => 401
    ],
    '403' => [
        'msg' => '无权访问该资源',
        'httpStatus' => 403
    ],
    '404' => [
        'msg' => '资源不存在',
        'httpStatus' => 404
    ],
    '405' => [
        'msg' => '非法操作',
        'httpStatus' => 405
    ],
    '422' => [
        'msg' => '表单验证失败',
        'httpStatus' => 422
    ],
    '429' => [
        'msg' => '操作过于频繁，请稍后再试',
        'httpStatus' => 429
    ],
    '500' => [
        'msg' => '服务器错误',
        'httpStatus' => 500
    ],
    '503' => [
        'msg' => '资源未准备好',
        'httpStatus' => 503
    ],
];

