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
     * @description The information about online consumers in the consumer group.
     *
     * @var connectionSet
     */
    public $connectionSet;

    /**
     * @description The consumption mode. Valid values:
     *
     *   **CLUSTERING**: the clustering consumption mode
     *   **BROADCASTING**: the broadcasting consumption mode
     *
     * For more information about consumption modes, see [Clustering consumption and broadcasting consumption](~~43163~~).
     * @example CLUSTERING
     *
     * @var string
     */
    public $consumeModel;

    /**
     * @description The TPS for message consumption.
     *
     * @example 0
     *
     * @var float
     */
    public $consumeTps;

    /**
     * @description The details of online consumers in the consumer group, including the information about the thread stack traces and the consumption response time (RT). If you want to obtain the details of online consumers in the consumer group, make sure that the **Detail** parameter in the request is set to **true**. If the Detail parameter is not set to true, the value of this parameter is empty.
     *
     * @var consumerConnectionInfoList
     */
    public $consumerConnectionInfoList;

    /**
     * @description The maximum latency of message consumption in all topics to which the consumer group subscribes. Unit: milliseconds.
     *
     * @example 100857
     *
     * @var int
     */
    public $delayTime;

    /**
     * @description The information about message consumption by topic. If you want to obtain the information about the consumption status of each topic, make sure that the **Detail** parameter in the request is set to **true**. If the Detail parameter is not set to true, the value of this parameter is empty.
     *
     * @var detailInTopicList
     */
    public $detailInTopicList;

    /**
     * @description The ID of the instance
     *
     * @example MQ_INST_111111111111_DOxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The most recent point in time when a message was consumed.
     *
     * The value of this parameter is a UNIX timestamp in milliseconds.
     * @example 1566883844954
     *
     * @var int
     */
    public $lastTimestamp;

    /**
     * @description Indicates whether the consumer group is online.
     *
     * @example true
     *
     * @var bool
     */
    public $online;

    /**
     * @description Indicates whether load balancing is performed as expected. Valid values:
     *
     *   **true**: Load balancing is performed as expected.
     *   **false**: Load balancing is not performed as expected.
     *
     * @example true
     *
     * @var bool
     */
    public $rebalanceOK;

    /**
     * @description Indicates whether all consumers in the consumer group subscribe to the same topics and tags.
     *
     * @example true
     *
     * @var bool
     */
    public $subscriptionSame;

    /**
     * @description The total number of accumulated messages.
     *
     * @example 197
     *
     * @var int
     */
    public $totalDiff;
    protected $_name = [
        'connectionSet'              => 'ConnectionSet',
        'consumeModel'               => 'ConsumeModel',
        'consumeTps'                 => 'ConsumeTps',
        'consumerConnectionInfoList' => 'ConsumerConnectionInfoList',
        'delayTime'                  => 'DelayTime',
        'detailInTopicList'          => 'DetailInTopicList',
        'instanceId'                 => 'InstanceId',
        'lastTimestamp'              => 'LastTimestamp',
        'online'                     => 'Online',
        'rebalanceOK'                => 'RebalanceOK',
        'subscriptionSame'           => 'SubscriptionSame',
        'totalDiff'                  => 'TotalDiff',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionSet) {
            $res['ConnectionSet'] = null !== $this->connectionSet ? $this->connectionSet->toMap() : null;
        }
        if (null !== $this->consumeModel) {
            $res['ConsumeModel'] = $this->consumeModel;
        }
        if (null !== $this->consumeTps) {
            $res['ConsumeTps'] = $this->consumeTps;
        }
        if (null !== $this->consumerConnectionInfoList) {
            $res['ConsumerConnectionInfoList'] = null !== $this->consumerConnectionInfoList ? $this->consumerConnectionInfoList->toMap() : null;
        }
        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }
        if (null !== $this->detailInTopicList) {
            $res['DetailInTopicList'] = null !== $this->detailInTopicList ? $this->detailInTopicList->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
