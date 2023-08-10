<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreateConsumerGroupResponseBody extends Model
{
    /**
     * @description The ID of the consumer group.
     *
     * @example dtswc411cg617p****
     *
     * @var string
     */
    public $consumerGroupID;

    /**
     * @description The error code returned if the call failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the call failed.
     *
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The ID of the request.
     *
     * @example 6063641E-BAD1-4BA7-B70B-26FFFD18****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'consumerGroupID' => 'ConsumerGroupID',
        'errCode'         => 'ErrCode',
        'errMessage'      => 'ErrMessage',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerGroupID) {
            $res['ConsumerGroupID'] = $this->consumerGroupID;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
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
     * @return CreateConsumerGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerGroupID'])) {
            $model->consumerGroupID = $map['ConsumerGroupID'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
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
