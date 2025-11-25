<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\jstack;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\runningDataList;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\subscriptionSet;

class consumerConnectionInfoDo extends Model
{
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
    public $consumeModel;

    /**
     * @var string
     */
    public $consumeType;

    /**
     * @var jstack
     */
    public $jstack;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $lastTimeStamp;

    /**
     * @var runningDataList
     */
    public $runningDataList;

    /**
     * @var int
     */
    public $startTimeStamp;

    /**
     * @var subscriptionSet
     */
    public $subscriptionSet;

    /**
     * @var int
     */
    public $threadCount;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'clientId' => 'ClientId',
        'connection' => 'Connection',
        'consumeModel' => 'ConsumeModel',
        'consumeType' => 'ConsumeType',
        'jstack' => 'Jstack',
        'language' => 'Language',
        'lastTimeStamp' => 'LastTimeStamp',
        'runningDataList' => 'RunningDataList',
        'startTimeStamp' => 'StartTimeStamp',
        'subscriptionSet' => 'SubscriptionSet',
        'threadCount' => 'ThreadCount',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->jstack) {
            $this->jstack->validate();
        }
        if (null !== $this->runningDataList) {
            $this->runningDataList->validate();
        }
        if (null !== $this->subscriptionSet) {
            $this->subscriptionSet->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Jstack'] = null !== $this->jstack ? $this->jstack->toArray($noStream) : $this->jstack;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->lastTimeStamp) {
            $res['LastTimeStamp'] = $this->lastTimeStamp;
        }

        if (null !== $this->runningDataList) {
            $res['RunningDataList'] = null !== $this->runningDataList ? $this->runningDataList->toArray($noStream) : $this->runningDataList;
        }

        if (null !== $this->startTimeStamp) {
            $res['StartTimeStamp'] = $this->startTimeStamp;
        }

        if (null !== $this->subscriptionSet) {
            $res['SubscriptionSet'] = null !== $this->subscriptionSet ? $this->subscriptionSet->toArray($noStream) : $this->subscriptionSet;
        }

        if (null !== $this->threadCount) {
            $res['ThreadCount'] = $this->threadCount;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
