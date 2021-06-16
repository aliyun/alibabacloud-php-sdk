<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetDevopsProjectSprintInfoResponseBody\object;
use AlibabaCloud\Tea\Model;

class GetDevopsProjectSprintInfoResponseBody extends Model
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
    public $successful;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var object
     */
    public $object;
    protected $_name = [
        'errorMsg'   => 'ErrorMsg',
        'requestId'  => 'RequestId',
        'successful' => 'Successful',
        'errorCode'  => 'ErrorCode',
        'object'     => 'Object',
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
        if (null !== $this->successful) {
            $res['Successful'] = $this->successful;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->object) {
            $res['Object'] = null !== $this->object ? $this->object->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDevopsProjectSprintInfoResponseBody
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
        if (isset($map['Successful'])) {
            $model->successful = $map['Successful'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['Object'])) {
            $model->object = object::fromMap($map['Object']);
        }

        return $model;
    }
}
