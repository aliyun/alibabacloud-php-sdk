<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstancesResponseBody\subscriptionInstances;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstancesResponseBody\subscriptionInstances\subscriptionInstance\sourceEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstancesResponseBody\subscriptionInstances\subscriptionInstance\subscriptionDataType;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstancesResponseBody\subscriptionInstances\subscriptionInstance\subscriptionHost;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstancesResponseBody\subscriptionInstances\subscriptionInstance\subscriptionObject;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstancesResponseBody\subscriptionInstances\subscriptionInstance\tags;
use AlibabaCloud\Tea\Model;

class subscriptionInstance extends Model
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
    public $instanceCreateTime;

    /**
     * @var string
     */
    public $jobCreateTime;

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
     * @var tags
     */
    public $tags;
    protected $_name = [
        'beginTimestamp'           => 'BeginTimestamp',
        'consumptionCheckpoint'    => 'ConsumptionCheckpoint',
        'consumptionClient'        => 'ConsumptionClient',
        'endTimestamp'             => 'EndTimestamp',
        'errorMessage'             => 'ErrorMessage',
        'instanceCreateTime'       => 'InstanceCreateTime',
        'jobCreateTime'            => 'JobCreateTime',
        'payType'                  => 'PayType',
        'sourceEndpoint'           => 'SourceEndpoint',
        'status'                   => 'Status',
        'subscribeTopic'           => 'SubscribeTopic',
        'subscriptionDataType'     => 'SubscriptionDataType',
        'subscriptionHost'         => 'SubscriptionHost',
        'subscriptionInstanceID'   => 'SubscriptionInstanceID',
        'subscriptionInstanceName' => 'SubscriptionInstanceName',
        'subscriptionObject'       => 'SubscriptionObject',
        'tags'                     => 'Tags',
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
        if (null !== $this->instanceCreateTime) {
            $res['InstanceCreateTime'] = $this->instanceCreateTime;
        }
        if (null !== $this->jobCreateTime) {
            $res['JobCreateTime'] = $this->jobCreateTime;
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
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionInstance
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
        if (isset($map['InstanceCreateTime'])) {
            $model->instanceCreateTime = $map['InstanceCreateTime'];
        }
        if (isset($map['JobCreateTime'])) {
            $model->jobCreateTime = $map['JobCreateTime'];
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
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
