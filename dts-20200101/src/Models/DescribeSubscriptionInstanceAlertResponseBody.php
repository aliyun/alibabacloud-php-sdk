<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSubscriptionInstanceAlertResponseBody extends Model
{
    /**
     * @var string
     */
    public $delayAlertPhone;

    /**
     * @var string
     */
    public $delayAlertStatus;

    /**
     * @var string
     */
    public $delayOverSeconds;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $errorAlertPhone;

    /**
     * @var string
     */
    public $errorAlertStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $subscriptionInstanceID;

    /**
     * @var string
     */
    public $subscriptionInstanceName;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'delayAlertPhone'          => 'DelayAlertPhone',
        'delayAlertStatus'         => 'DelayAlertStatus',
        'delayOverSeconds'         => 'DelayOverSeconds',
        'errCode'                  => 'ErrCode',
        'errMessage'               => 'ErrMessage',
        'errorAlertPhone'          => 'ErrorAlertPhone',
        'errorAlertStatus'         => 'ErrorAlertStatus',
        'requestId'                => 'RequestId',
        'subscriptionInstanceID'   => 'SubscriptionInstanceID',
        'subscriptionInstanceName' => 'SubscriptionInstanceName',
        'success'                  => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delayAlertPhone) {
            $res['DelayAlertPhone'] = $this->delayAlertPhone;
        }
        if (null !== $this->delayAlertStatus) {
            $res['DelayAlertStatus'] = $this->delayAlertStatus;
        }
        if (null !== $this->delayOverSeconds) {
            $res['DelayOverSeconds'] = $this->delayOverSeconds;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->errorAlertPhone) {
            $res['ErrorAlertPhone'] = $this->errorAlertPhone;
        }
        if (null !== $this->errorAlertStatus) {
            $res['ErrorAlertStatus'] = $this->errorAlertStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subscriptionInstanceID) {
            $res['SubscriptionInstanceID'] = $this->subscriptionInstanceID;
        }
        if (null !== $this->subscriptionInstanceName) {
            $res['SubscriptionInstanceName'] = $this->subscriptionInstanceName;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSubscriptionInstanceAlertResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DelayAlertPhone'])) {
            $model->delayAlertPhone = $map['DelayAlertPhone'];
        }
        if (isset($map['DelayAlertStatus'])) {
            $model->delayAlertStatus = $map['DelayAlertStatus'];
        }
        if (isset($map['DelayOverSeconds'])) {
            $model->delayOverSeconds = $map['DelayOverSeconds'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['ErrorAlertPhone'])) {
            $model->errorAlertPhone = $map['ErrorAlertPhone'];
        }
        if (isset($map['ErrorAlertStatus'])) {
            $model->errorAlertStatus = $map['ErrorAlertStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubscriptionInstanceID'])) {
            $model->subscriptionInstanceID = $map['SubscriptionInstanceID'];
        }
        if (isset($map['SubscriptionInstanceName'])) {
            $model->subscriptionInstanceName = $map['SubscriptionInstanceName'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
