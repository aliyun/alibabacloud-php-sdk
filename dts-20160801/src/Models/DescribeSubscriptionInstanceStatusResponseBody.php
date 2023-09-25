<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20160801\Models;

use AlibabaCloud\SDK\Dts\V20160801\Models\DescribeSubscriptionInstanceStatusResponseBody\sourceEndpoint;
use AlibabaCloud\SDK\Dts\V20160801\Models\DescribeSubscriptionInstanceStatusResponseBody\subscriptionDataType;
use AlibabaCloud\SDK\Dts\V20160801\Models\DescribeSubscriptionInstanceStatusResponseBody\subscriptionObject;
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
    public $errorMessage;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var sourceEndpoint
     */
    public $sourceEndpoint;

    /**
     * @var string
     */
    public $status;

    /**
     * @var subscriptionDataType
     */
    public $subscriptionDataType;

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
    protected $_name = [
        'beginTimestamp'           => 'BeginTimestamp',
        'consumptionCheckpoint'    => 'ConsumptionCheckpoint',
        'consumptionClient'        => 'ConsumptionClient',
        'endTimestamp'             => 'EndTimestamp',
        'errorMessage'             => 'ErrorMessage',
        'payType'                  => 'PayType',
        'sourceEndpoint'           => 'SourceEndpoint',
        'status'                   => 'Status',
        'subscriptionDataType'     => 'SubscriptionDataType',
        'subscriptionInstanceID'   => 'SubscriptionInstanceID',
        'subscriptionInstanceName' => 'SubscriptionInstanceName',
        'subscriptionObject'       => 'SubscriptionObject',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subscriptionDataType) {
            $res['SubscriptionDataType'] = null !== $this->subscriptionDataType ? $this->subscriptionDataType->toMap() : null;
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['SourceEndpoint'])) {
            $model->sourceEndpoint = sourceEndpoint::fromMap($map['SourceEndpoint']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubscriptionDataType'])) {
            $model->subscriptionDataType = subscriptionDataType::fromMap($map['SubscriptionDataType']);
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

        return $model;
    }
}
