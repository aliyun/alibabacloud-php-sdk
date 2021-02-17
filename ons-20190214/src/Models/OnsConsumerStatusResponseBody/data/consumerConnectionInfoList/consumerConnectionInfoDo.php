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
     * @var string
     */
    public $consumeModel;

    /**
     * @var runningDataList
     */
    public $runningDataList;

    /**
     * @var subscriptionSet
     */
    public $subscriptionSet;

    /**
     * @var jstack
     */
    public $jstack;

    /**
     * @var int
     */
    public $lastTimeStamp;

    /**
     * @var int
     */
    public $startTimeStamp;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $connection;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $consumeType;

    /**
     * @var int
     */
    public $threadCount;
    protected $_name = [
        'consumeModel'    => 'ConsumeModel',
        'runningDataList' => 'RunningDataList',
        'subscriptionSet' => 'SubscriptionSet',
        'jstack'          => 'Jstack',
        'lastTimeStamp'   => 'LastTimeStamp',
        'startTimeStamp'  => 'StartTimeStamp',
        'language'        => 'Language',
        'clientId'        => 'ClientId',
        'connection'      => 'Connection',
        'version'         => 'Version',
        'consumeType'     => 'ConsumeType',
        'threadCount'     => 'ThreadCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumeModel) {
            $res['ConsumeModel'] = $this->consumeModel;
        }
        if (null !== $this->runningDataList) {
            $res['RunningDataList'] = null !== $this->runningDataList ? $this->runningDataList->toMap() : null;
        }
        if (null !== $this->subscriptionSet) {
            $res['SubscriptionSet'] = null !== $this->subscriptionSet ? $this->subscriptionSet->toMap() : null;
        }
        if (null !== $this->jstack) {
            $res['Jstack'] = null !== $this->jstack ? $this->jstack->toMap() : null;
        }
        if (null !== $this->lastTimeStamp) {
            $res['LastTimeStamp'] = $this->lastTimeStamp;
        }
        if (null !== $this->startTimeStamp) {
            $res['StartTimeStamp'] = $this->startTimeStamp;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->connection) {
            $res['Connection'] = $this->connection;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->consumeType) {
            $res['ConsumeType'] = $this->consumeType;
        }
        if (null !== $this->threadCount) {
            $res['ThreadCount'] = $this->threadCount;
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
        if (isset($map['ConsumeModel'])) {
            $model->consumeModel = $map['ConsumeModel'];
        }
        if (isset($map['RunningDataList'])) {
            $model->runningDataList = runningDataList::fromMap($map['RunningDataList']);
        }
        if (isset($map['SubscriptionSet'])) {
            $model->subscriptionSet = subscriptionSet::fromMap($map['SubscriptionSet']);
        }
        if (isset($map['Jstack'])) {
            $model->jstack = jstack::fromMap($map['Jstack']);
        }
        if (isset($map['LastTimeStamp'])) {
            $model->lastTimeStamp = $map['LastTimeStamp'];
        }
        if (isset($map['StartTimeStamp'])) {
            $model->startTimeStamp = $map['StartTimeStamp'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['Connection'])) {
            $model->connection = $map['Connection'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ConsumeType'])) {
            $model->consumeType = $map['ConsumeType'];
        }
        if (isset($map['ThreadCount'])) {
            $model->threadCount = $map['ThreadCount'];
        }

        return $model;
    }
}
