<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class TaskExecError extends Model
{
    /**
     * @example AccessDenied
     *
     * @var string
     */
    public $code;

    /**
     * @example 部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com
     *
     * @var string
     */
    public $extraInfo;

    /**
     * @example 部署服务[_appcenter-xxx]失败，权限不足
     *
     * @var string
     */
    public $message;

    /**
     * @example 1-26d1287xxxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 权限不足错误
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'code'      => 'code',
        'extraInfo' => 'extraInfo',
        'message'   => 'message',
        'requestId' => 'requestId',
        'title'     => 'title',
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
        if (null !== $this->extraInfo) {
            $res['extraInfo'] = $this->extraInfo;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskExecError
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['extraInfo'])) {
            $model->extraInfo = $map['extraInfo'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
