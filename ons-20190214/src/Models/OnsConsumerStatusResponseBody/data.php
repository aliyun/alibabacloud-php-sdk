<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\connectionSet;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\detailInTopicList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $consumeTps;

    /**
     * @var string
     */
    public $consumeModel;

    /**
     * @var connectionSet
     */
    public $connectionSet;

    /**
     * @var int
     */
    public $totalDiff;

    /**
     * @var consumerConnectionInfoList
     */
    public $consumerConnectionInfoList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var detailInTopicList
     */
    public $detailInTopicList;

    /**
     * @var bool
     */
    public $subscriptionSame;

    /**
     * @var int
     */
    public $delayTime;

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
    protected $_name = [
        'consumeTps'                 => 'ConsumeTps',
        'consumeModel'               => 'ConsumeModel',
        'connectionSet'              => 'ConnectionSet',
        'totalDiff'                  => 'TotalDiff',
        'consumerConnectionInfoList' => 'ConsumerConnectionInfoList',
        'instanceId'                 => 'InstanceId',
        'detailInTopicList'          => 'DetailInTopicList',
        'subscriptionSame'           => 'SubscriptionSame',
        'delayTime'                  => 'DelayTime',
        'lastTimestamp'              => 'LastTimestamp',
        'online'                     => 'Online',
        'rebalanceOK'                => 'RebalanceOK',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumeTps) {
            $res['ConsumeTps'] = $this->consumeTps;
        }
        if (null !== $this->consumeModel) {
            $res['ConsumeModel'] = $this->consumeModel;
        }
        if (null !== $this->connectionSet) {
            $res['ConnectionSet'] = null !== $this->connectionSet ? $this->connectionSet->toMap() : null;
        }
        if (null !== $this->totalDiff) {
            $res['TotalDiff'] = $this->totalDiff;
        }
        if (null !== $this->consumerConnectionInfoList) {
            $res['ConsumerConnectionInfoList'] = null !== $this->consumerConnectionInfoList ? $this->consumerConnectionInfoList->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->detailInTopicList) {
            $res['DetailInTopicList'] = null !== $this->detailInTopicList ? $this->detailInTopicList->toMap() : null;
        }
        if (null !== $this->subscriptionSame) {
            $res['SubscriptionSame'] = $this->subscriptionSame;
        }
        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumeTps'])) {
            $model->consumeTps = $map['ConsumeTps'];
        }
        if (isset($map['ConsumeModel'])) {
            $model->consumeModel = $map['ConsumeModel'];
        }
        if (isset($map['ConnectionSet'])) {
            $model->connectionSet = connectionSet::fromMap($map['ConnectionSet']);
        }
        if (isset($map['TotalDiff'])) {
            $model->totalDiff = $map['TotalDiff'];
        }
        if (isset($map['ConsumerConnectionInfoList'])) {
            $model->consumerConnectionInfoList = consumerConnectionInfoList::fromMap($map['ConsumerConnectionInfoList']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DetailInTopicList'])) {
            $model->detailInTopicList = detailInTopicList::fromMap($map['DetailInTopicList']);
        }
        if (isset($map['SubscriptionSame'])) {
            $model->subscriptionSame = $map['SubscriptionSame'];
        }
        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
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

        return $model;
    }
}
