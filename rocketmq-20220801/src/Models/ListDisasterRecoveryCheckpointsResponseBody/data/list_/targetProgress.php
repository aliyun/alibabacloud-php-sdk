<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListDisasterRecoveryCheckpointsResponseBody\data\list_;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListDisasterRecoveryCheckpointsResponseBody\data\list_\targetProgress\progressData;

class targetProgress extends Model
{
    /**
     * @var string
     */
    public $consumerGroupId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $lastFetchTime;

    /**
     * @var progressData
     */
    public $progressData;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'consumerGroupId' => 'consumerGroupId',
        'instanceId' => 'instanceId',
        'instanceType' => 'instanceType',
        'lastFetchTime' => 'lastFetchTime',
        'progressData' => 'progressData',
        'regionId' => 'regionId',
        'topicName' => 'topicName',
    ];

    public function validate()
    {
        if (null !== $this->progressData) {
            $this->progressData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerGroupId) {
            $res['consumerGroupId'] = $this->consumerGroupId;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }

        if (null !== $this->lastFetchTime) {
            $res['lastFetchTime'] = $this->lastFetchTime;
        }

        if (null !== $this->progressData) {
            $res['progressData'] = null !== $this->progressData ? $this->progressData->toArray($noStream) : $this->progressData;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->topicName) {
            $res['topicName'] = $this->topicName;
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
        if (isset($map['consumerGroupId'])) {
            $model->consumerGroupId = $map['consumerGroupId'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }

        if (isset($map['lastFetchTime'])) {
            $model->lastFetchTime = $map['lastFetchTime'];
        }

        if (isset($map['progressData'])) {
            $model->progressData = progressData::fromMap($map['progressData']);
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['topicName'])) {
            $model->topicName = $map['topicName'];
        }

        return $model;
    }
}
