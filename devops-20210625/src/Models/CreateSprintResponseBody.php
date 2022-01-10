<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateSprintResponseBody\sprint;
use AlibabaCloud\Tea\Model;

class CreateSprintResponseBody extends Model
{
    /**
     * @description 错误码
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description 错误信息
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description 请求id，每次请求都是唯一值，便于后续排查问题
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 迭代信息
     *
     * @var sprint
     */
    public $sprint;

    /**
     * @description true或者false
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode' => 'errorCode',
        'errorMsg'  => 'errorMsg',
        'requestId' => 'requestId',
        'sprint'    => 'sprint',
        'success'   => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->sprint) {
            $res['sprint'] = null !== $this->sprint ? $this->sprint->toMap() : null;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSprintResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['sprint'])) {
            $model->sprint = sprint::fromMap($map['sprint']);
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
