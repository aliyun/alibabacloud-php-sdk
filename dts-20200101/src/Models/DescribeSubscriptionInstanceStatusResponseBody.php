<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstanceStatusResponseBody\sourceEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstanceStatusResponseBody\subscriptionDataType;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstanceStatusResponseBody\subscriptionHost;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstanceStatusResponseBody\subscriptionObject;
use AlibabaCloud\Tea\Model;

class DescribeSubscriptionInstanceStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $beginTimestamp;

    /**
     * @var string
     */
    public $consumptionCheckpoint;

    /**
     * @var string
     */
    public $consumptionClient;

    /**
     * @var string
     */
    public $endTimestamp;

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
    public $errorMessage;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sourceEndpoint
     */
    public $sourceEndpoint;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subscribeTopic;

    /**
     * @var subscriptionDataType
     */
    public $subscriptionDataType;

    /**
     * @var subscriptionHost
     */
    public $subscriptionHost;

    /**
     * @var string
     */
    public $subscriptionInstanceID;

    /**
     * @var string
     */
    public $subscriptionInstanceName;

    /**
     * @var subscriptionObject
     */
    public $subscriptionObject;

    /**
     * @var string
     */
    public $success;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'beginTimestamp'           => 'BeginTimestamp',
        'consumptionCheckpoint'    => 'ConsumptionCheckpoint',
        'consumptionClient'        => 'ConsumptionClient',
        'endTimestamp'             => 'EndTimestamp',
        'errCode'                  => 'ErrCode',
        'errMessage'               => 'ErrMessage',
        'errorMessage'             => 'ErrorMessage',
        'payType'                  => 'PayType',
        'requestId'                => 'RequestId',
        'sourceEndpoint'           => 'SourceEndpoint',
        'status'                   => 'Status',
        'subscribeTopic'           => 'SubscribeTopic',
        'subscriptionDataType'     => 'SubscriptionDataType',
        'subscriptionHost'         => 'SubscriptionHost',
        'subscriptionInstanceID'   => 'SubscriptionInstanceID',
        'subscriptionInstanceName' => 'SubscriptionInstanceName',
        'subscriptionObject'       => 'SubscriptionObject',
        'success'                  => 'Success',
        'taskId'                   => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTimestamp) {
            $res['BeginTimestamp'] = $this->beginTimestamp;
        }
        if (null !== $this->consumptionCheckpoint) {
            $res['ConsumptionCheckpoint'] = $this->consumptionCheckpoint;
        }
        if (null !== $this->consumptionClient) {
            $res['ConsumptionClient'] = $this->consumptionClient;
        }
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subscribeTopic) {
            $res['SubscribeTopic'] = $this->subscribeTopic;
        }
        if (null !== $this->subscriptionDataType) {
            $res['SubscriptionDataType'] = null !== $this->subscriptionDataType ? $this->subscriptionDataType->toMap() : null;
        }
        if (null !== $this->subscriptionHost) {
            $res['SubscriptionHost'] = null !== $this->subscriptionHost ? $this->subscriptionHost->toMap() : null;
        }
        if (null !== $this->subscriptionInstanceID) {
            $res['SubscriptionInstanceID'] = $this->subscriptionInstanceID;
        }
        if (null !== $this->subscriptionInstanceName) {
            $res['SubscriptionInstanceName'] = $this->subscriptionInstanceName;
        }
        if (null !== $this->subscriptionObject) {
            $res['SubscriptionObject'] = null !== $this->subscriptionObject ? $this->subscriptionObject->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSubscriptionInstanceStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTimestamp'])) {
            $model->beginTimestamp = $map['BeginTimestamp'];
        }
        if (isset($map['ConsumptionCheckpoint'])) {
            $model->consumptionCheckpoint = $map['ConsumptionCheckpoint'];
        }
        if (isset($map['ConsumptionClient'])) {
            $model->consumptionClient = $map['ConsumptionClient'];
        }
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceEndpoint'])) {
            $model->sourceEndpoint = sourceEndpoint::fromMap($map['SourceEndpoint']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubscribeTopic'])) {
            $model->subscribeTopic = $map['SubscribeTopic'];
        }
        if (isset($map['SubscriptionDataType'])) {
            $model->subscriptionDataType = subscriptionDataType::fromMap($map['SubscriptionDataType']);
        }
        if (isset($map['SubscriptionHost'])) {
            $model->subscriptionHost = subscriptionHost::fromMap($map['SubscriptionHost']);
        }
        if (isset($map['SubscriptionInstanceID'])) {
            $model->subscriptionInstanceID = $map['SubscriptionInstanceID'];
        }
        if (isset($map['SubscriptionInstanceName'])) {
            $model->subscriptionInstanceName = $map['SubscriptionInstanceName'];
        }
        if (isset($map['SubscriptionObject'])) {
            $model->subscriptionObject = subscriptionObject::fromMap($map['SubscriptionObject']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
