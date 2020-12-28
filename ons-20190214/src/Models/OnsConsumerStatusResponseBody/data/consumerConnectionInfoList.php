<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\jstack;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\runningDataList;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\subscriptionSet;
use AlibabaCloud\Tea\Model;

class consumerConnectionInfoList extends Model
{
    /**
     * @var string
     */
    public $consumeModel;

    /**
     * @var runningDataList[]
     */
    public $runningDataList;

    /**
     * @var subscriptionSet[]
     */
    public $subscriptionSet;

    /**
     * @var jstack[]
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
            $res['RunningDataList'] = [];
            if (null !== $this->runningDataList && \is_array($this->runningDataList)) {
                $n = 0;
                foreach ($this->runningDataList as $item) {
                    $res['RunningDataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subscriptionSet) {
            $res['SubscriptionSet'] = [];
            if (null !== $this->subscriptionSet && \is_array($this->subscriptionSet)) {
                $n = 0;
                foreach ($this->subscriptionSet as $item) {
                    $res['SubscriptionSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->jstack) {
            $res['Jstack'] = [];
            if (null !== $this->jstack && \is_array($this->jstack)) {
                $n = 0;
                foreach ($this->jstack as $item) {
                    $res['Jstack'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return consumerConnectionInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumeModel'])) {
            $model->consumeModel = $map['ConsumeModel'];
        }
        if (isset($map['RunningDataList'])) {
            if (!empty($map['RunningDataList'])) {
                $model->runningDataList = [];
                $n                      = 0;
                foreach ($map['RunningDataList'] as $item) {
                    $model->runningDataList[$n++] = null !== $item ? runningDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SubscriptionSet'])) {
            if (!empty($map['SubscriptionSet'])) {
                $model->subscriptionSet = [];
                $n                      = 0;
                foreach ($map['SubscriptionSet'] as $item) {
                    $model->subscriptionSet[$n++] = null !== $item ? subscriptionSet::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Jstack'])) {
            if (!empty($map['Jstack'])) {
                $model->jstack = [];
                $n             = 0;
                foreach ($map['Jstack'] as $item) {
                    $model->jstack[$n++] = null !== $item ? jstack::fromMap($item) : $item;
                }
            }
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
