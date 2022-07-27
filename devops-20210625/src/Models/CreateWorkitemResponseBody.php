<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemResponseBody\workitem;
use AlibabaCloud\Tea\Model;

class CreateWorkitemResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var workitem
     */
    public $workitem;
    protected $_name = [
        'errorCode' => 'errorCode',
        'errorMsg'  => 'errorMsg',
        'requestId' => 'requestId',
        'success'   => 'success',
        'workitem'  => 'workitem',
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
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->workitem) {
            $res['workitem'] = null !== $this->workitem ? $this->workitem->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWorkitemResponseBody
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
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['workitem'])) {
            $model->workitem = workitem::fromMap($map['workitem']);
        }

        return $model;
    }
}
