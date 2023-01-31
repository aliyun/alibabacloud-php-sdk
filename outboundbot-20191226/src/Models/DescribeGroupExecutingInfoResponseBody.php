<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeGroupExecutingInfoResponseBody\executingInfo;
use AlibabaCloud\Tea\Model;

class DescribeGroupExecutingInfoResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example {}
     *
     * @var executingInfo
     */
    public $executingInfo;

    /**
     * @example b24d321a-2a74-4dd1-a0ba-4ab09cef6652
     *
     * @var string
     */
    public $groupId;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example c46001bc-3ead-4bfd-9a69-4b5b66a4a3f4
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @example 254EB995-DEDF-48A4-9101-9CA5B72FFBCC
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'executingInfo'  => 'ExecutingInfo',
        'groupId'        => 'GroupId',
        'httpStatusCode' => 'HttpStatusCode',
        'instanceId'     => 'InstanceId',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->executingInfo) {
            $res['ExecutingInfo'] = null !== $this->executingInfo ? $this->executingInfo->toMap() : null;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupExecutingInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ExecutingInfo'])) {
            $model->executingInfo = executingInfo::fromMap($map['ExecutingInfo']);
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
