<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\connectionSet;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\detailInTopicList;

class data extends Model
{
    /**
     * @var connectionSet
     */
    public $connectionSet;

    /**
     * @var string
     */
    public $consumeModel;

    /**
     * @var float
     */
    public $consumeTps;

    /**
     * @var consumerConnectionInfoList
     */
    public $consumerConnectionInfoList;

    /**
     * @var int
     */
    public $delayTime;

    /**
     * @var detailInTopicList
     */
    public $detailInTopicList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $lastTimestamp;

    /**
     * @var bool
     */
    public $online;

    /**
     * @var bool
     */
    public $rebalanceOK;

    /**
     * @var bool
     */
    public $subscriptionSame;

    /**
     * @var int
     */
    public $totalDiff;
    protected $_name = [
        'connectionSet' => 'ConnectionSet',
        'consumeModel' => 'ConsumeModel',
        'consumeTps' => 'ConsumeTps',
        'consumerConnectionInfoList' => 'ConsumerConnectionInfoList',
        'delayTime' => 'DelayTime',
        'detailInTopicList' => 'DetailInTopicList',
        'instanceId' => 'InstanceId',
        'lastTimestamp' => 'LastTimestamp',
        'online' => 'Online',
        'rebalanceOK' => 'RebalanceOK',
        'subscriptionSame' => 'SubscriptionSame',
        'totalDiff' => 'TotalDiff',
    ];

    public function validate()
    {
        if (null !== $this->connectionSet) {
            $this->connectionSet->validate();
        }
        if (null !== $this->consumerConnectionInfoList) {
            $this->consumerConnectionInfoList->validate();
        }
        if (null !== $this->detailInTopicList) {
            $this->detailInTopicList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionSet) {
            $res['ConnectionSet'] = null !== $this->connectionSet ? $this->connectionSet->toArray($noStream) : $this->connectionSet;
        }

        if (null !== $this->consumeModel) {
            $res['ConsumeModel'] = $this->consumeModel;
        }

        if (null !== $this->consumeTps) {
            $res['ConsumeTps'] = $this->consumeTps;
        }

        if (null !== $this->consumerConnectionInfoList) {
            $res['ConsumerConnectionInfoList'] = null !== $this->consumerConnectionInfoList ? $this->consumerConnectionInfoList->toArray($noStream) : $this->consumerConnectionInfoList;
        }

        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }

        if (null !== $this->detailInTopicList) {
            $res['DetailInTopicList'] = null !== $this->detailInTopicList ? $this->detailInTopicList->toArray($noStream) : $this->detailInTopicList;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lastTimestamp) {
            $res['LastTimestamp'] = $this->lastTimestamp;
        }

        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }

        if (null !== $this->rebalanceOK) {
            $res['RebalanceOK'] = $this->rebalanceOK;
        }

        if (null !== $this->subscriptionSame) {
            $res['SubscriptionSame'] = $this->subscriptionSame;
        }

        if (null !== $this->totalDiff) {
            $res['TotalDiff'] = $this->totalDiff;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionSet'])) {
            $model->connectionSet = connectionSet::fromMap($map['ConnectionSet']);
        }

        if (isset($map['ConsumeModel'])) {
            $model->consumeModel = $map['ConsumeModel'];
        }

        if (isset($map['ConsumeTps'])) {
            $model->consumeTps = $map['ConsumeTps'];
        }

        if (isset($map['ConsumerConnectionInfoList'])) {
            $model->consumerConnectionInfoList = consumerConnectionInfoList::fromMap($map['ConsumerConnectionInfoList']);
        }

        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
        }

        if (isset($map['DetailInTopicList'])) {
            $model->detailInTopicList = detailInTopicList::fromMap($map['DetailInTopicList']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LastTimestamp'])) {
            $model->lastTimestamp = $map['LastTimestamp'];
        }

        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }

        if (isset($map['RebalanceOK'])) {
            $model->rebalanceOK = $map['RebalanceOK'];
        }

        if (isset($map['SubscriptionSame'])) {
            $model->subscriptionSame = $map['SubscriptionSame'];
        }

        if (isset($map['TotalDiff'])) {
            $model->totalDiff = $map['TotalDiff'];
        }

        return $model;
    }
}
