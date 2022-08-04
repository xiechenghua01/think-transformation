<?php

/**
 * 数据转换器
 *
 * @Author: 谢城华 xiechenghua01@163.com
 * @Time: 2022/8/4 10:38
 */

class Transformation
{
    public function show(int $code = 0, array $data = [], string $msg = '', int $httpStatus = 0): \think\response\Json
    {
        //如果消息提示为空，并且业务状态码定义了，那么就显示默认定义的消息提示
        if (empty($msg) && !empty(config("transformation.{$code}")))
        {
            $msg = config("transformation.{$code}.msg");
        }

        // http状态码
        $httpStatus = empty($httpStatus) && !empty(config("transformation.{$code}.httpStatus"))
            ? config("transformation.{$code}.httpStatus")
            : 200;

        $result = [
            'code' => $code,
            'message' => $msg,
            'data' => $data
        ];

        return json($result, $httpStatus);
    }
}