<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object;
use AlibabaCloud\Tea\Model;

class GetTaskDetailBaseResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var object
     */
    public $object;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var bool
     */
    public $successful;
    protected $_name = [
        'requestId'  => 'RequestId',
        'errorMsg'   => 'ErrorMsg',
        'object'     => 'Object',
        'errorCode'  => 'ErrorCode',
        'successful' => 'Successful',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->object) {
            $res['Object'] = null !== $this->object ? $this->object->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->successful) {
            $res['Successful'] = $this->successful;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTaskDetailBaseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['Object'])) {
            $model->object = object::fromMap($map['Object']);
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['Successful'])) {
            $model->successful = $map['Successful'];
        }

        return $model;
    }
}
