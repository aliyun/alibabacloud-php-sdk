<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreateSubscriptionInstanceResponseBody extends Model
{
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
     * @example 4E9564C5-F99D-4176-A6BA-2D7F2DC8****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the change tracking instance.
     *
     * @example dtsfen11q2g23x****
     *
     * @var string
     */
    public $subscriptionInstanceId;

    /**
     * @description Indicates whether the call was successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'errCode'                => 'ErrCode',
        'errMessage'             => 'ErrMessage',
        'requestId'              => 'RequestId',
        'subscriptionInstanceId' => 'SubscriptionInstanceId',
        'success'                => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subscriptionInstanceId) {
            $res['SubscriptionInstanceId'] = $this->subscriptionInstanceId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSubscriptionInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubscriptionInstanceId'])) {
            $model->subscriptionInstanceId = $map['SubscriptionInstanceId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
