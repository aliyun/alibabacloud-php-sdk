<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIEarthMeteorology\V20210928\Models;

use AlibabaCloud\SDK\AIEarthMeteorology\V20210928\Models\GridQueryResponseBody\module;
use AlibabaCloud\Tea\Model;

class GridQueryResponseBody extends Model
{
    /**
     * @example 成功为0，失败为非0
     *
     * @var int
     */
    public $code;

    /**
     * @example 请求失败时返回错误信息
     *
     * @var string
     */
    public $message;

    /**
     * @var module
     */
    public $module;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @example 请求成功为true，失败为false
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'code',
        'message'   => 'message',
        'module'    => 'module',
        'requestId' => 'requestId',
        'success'   => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->module) {
            $res['module'] = null !== $this->module ? $this->module->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GridQueryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['module'])) {
            $model->module = module::fromMap($map['module']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
