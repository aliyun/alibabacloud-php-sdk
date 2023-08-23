<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\jstack;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\runningDataList;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\subscriptionSet;
use AlibabaCloud\Tea\Model;

class consumerConnectionInfoDo extends Model
{
    /**
     * @description The ID of the consumer instance.
     *
     * @example 30.5.**.**@25560#-1999745829#-1737591554#458773089270275
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The connection information.
     *
     * @example **
     *
     * @var string
     */
    public $connection;

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
     * @description The mode in which the consumer consumes messages. Valid values:
     *
     *   **PUSH**: The ApsaraMQ for RocketMQ broker pushes messages to the consumer.
     *   **PULL**: The consumer pulls messages from the ApsaraMQ for RocketMQ broker.
     *
     * @example PUSH
     *
     * @var string
     */
    public $consumeType;

    /**
     * @description The information about thread stack traces. If you want to obtain the information about thread stack traces, make sure that the **NeedJstack** parameter in the request is set to **true**. If the NeedJstack parameter is not set to true, the value of this parameter is empty.
     *
     * @var jstack
     */
    public $jstack;

    /**
     * @description The programming language that the consumer supports.
     *
     * @example JAVA
     *
     * @var string
     */
    public $language;

    /**
     * @description The most recent point in time when a message was consumed.
     *
     * The value of this parameter is a UNIX timestamp in milliseconds.
     * @example 1570701368114
     *
     * @var int
     */
    public $lastTimeStamp;

    /**
     * @description The real-time statistics.
     *
     * @var runningDataList
     */
    public $runningDataList;

    /**
     * @description The earliest point in time when a message was consumed.
     *
     * The value of this parameter is a UNIX timestamp in milliseconds.
     * @example 1570701361528
     *
     * @var int
     */
    public $startTimeStamp;

    /**
     * @description The information about subscriptions.
     *
     * @var subscriptionSet
     */
    public $subscriptionSet;

    /**
     * @description The number of consumer threads.
     *
     * @example 20
     *
     * @var int
     */
    public $threadCount;

    /**
     * @description The version of the consumer client.
     *
     * @example V4_3_6
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'clientId'        => 'ClientId',
        'connection'      => 'Connection',
        'consumeModel'    => 'ConsumeModel',
        'consumeType'     => 'ConsumeType',
        'jstack'          => 'Jstack',
        'language'        => 'Language',
        'lastTimeStamp'   => 'LastTimeStamp',
        'runningDataList' => 'RunningDataList',
        'startTimeStamp'  => 'StartTimeStamp',
        'subscriptionSet' => 'SubscriptionSet',
        'threadCount'     => 'ThreadCount',
        'version'         => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->connection) {
            $res['Connection'] = $this->connection;
        }
        if (null !== $this->consumeModel) {
            $res['ConsumeModel'] = $this->consumeModel;
        }
        if (null !== $this->consumeType) {
            $res['ConsumeType'] = $this->consumeType;
        }
        if (null !== $this->jstack) {
            $res['Jstack'] = null !== $this->jstack ? $this->jstack->toMap() : null;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->lastTimeStamp) {
            $res['LastTimeStamp'] = $this->lastTimeStamp;
        }
        if (null !== $this->runningDataList) {
            $res['RunningDataList'] = null !== $this->runningDataList ? $this->runningDataList->toMap() : null;
        }
        if (null !== $this->startTimeStamp) {
            $res['StartTimeStamp'] = $this->startTimeStamp;
        }
        if (null !== $this->subscriptionSet) {
            $res['SubscriptionSet'] = null !== $this->subscriptionSet ? $this->subscriptionSet->toMap() : null;
        }
        if (null !== $this->threadCount) {
            $res['ThreadCount'] = $this->threadCount;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consumerConnectionInfoDo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['Connection'])) {
            $model->connection = $map['Connection'];
        }
        if (isset($map['ConsumeModel'])) {
            $model->consumeModel = $map['ConsumeModel'];
        }
        if (isset($map['ConsumeType'])) {
            $model->consumeType = $map['ConsumeType'];
        }
        if (isset($map['Jstack'])) {
            $model->jstack = jstack::fromMap($map['Jstack']);
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['LastTimeStamp'])) {
            $model->lastTimeStamp = $map['LastTimeStamp'];
        }
        if (isset($map['RunningDataList'])) {
            $model->runningDataList = runningDataList::fromMap($map['RunningDataList']);
        }
        if (isset($map['StartTimeStamp'])) {
            $model->startTimeStamp = $map['StartTimeStamp'];
        }
        if (isset($map['SubscriptionSet'])) {
            $model->subscriptionSet = subscriptionSet::fromMap($map['SubscriptionSet']);
        }
        if (isset($map['ThreadCount'])) {
            $model->threadCount = $map['ThreadCount'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
