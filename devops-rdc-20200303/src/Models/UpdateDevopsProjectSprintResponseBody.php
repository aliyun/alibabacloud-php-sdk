<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class UpdateDevopsProjectSprintResponseBody extends Model
{
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
    public $object;

    /**
     * @var bool
     */
    public $successful;

    /**
     * @var string
     */
    public $errorCode;
    protected $_name = [
        'errorMsg'   => 'ErrorMsg',
        'requestId'  => 'RequestId',
        'object'     => 'Object',
        'successful' => 'Successful',
        'errorCode'  => 'ErrorCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }
        if (null !== $this->successful) {
            $res['Successful'] = $this->successful;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDevopsProjectSprintResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }
        if (isset($map['Successful'])) {
            $model->successful = $map['Successful'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        return $model;
    }
}
