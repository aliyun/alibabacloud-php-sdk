<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetAggTaskGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAggTaskGroupResponseBody\aggTaskGroup\tags;

class aggTaskGroup extends Model
{
    /**
     * @var string
     */
    public $aggTaskGroupConfig;

    /**
     * @var string
     */
    public $aggTaskGroupConfigHash;

    /**
     * @var string
     */
    public $aggTaskGroupId;

    /**
     * @var string
     */
    public $aggTaskGroupName;

    /**
     * @var string
     */
    public $cronExpr;

    /**
     * @var int
     */
    public $delay;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $fromTime;

    /**
     * @var int
     */
    public $maxRetries;

    /**
     * @var int
     */
    public $maxRunTimeInSeconds;

    /**
     * @var string
     */
    public $precheckString;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scheduleMode;

    /**
     * @var string
     */
    public $scheduleTimeExpr;

    /**
     * @var string
     */
    public $sourcePrometheusId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $targetPrometheusId;

    /**
     * @var int
     */
    public $toTime;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'aggTaskGroupConfig' => 'aggTaskGroupConfig',
        'aggTaskGroupConfigHash' => 'aggTaskGroupConfigHash',
        'aggTaskGroupId' => 'aggTaskGroupId',
        'aggTaskGroupName' => 'aggTaskGroupName',
        'cronExpr' => 'cronExpr',
        'delay' => 'delay',
        'description' => 'description',
        'fromTime' => 'fromTime',
        'maxRetries' => 'maxRetries',
        'maxRunTimeInSeconds' => 'maxRunTimeInSeconds',
        'precheckString' => 'precheckString',
        'regionId' => 'regionId',
        'scheduleMode' => 'scheduleMode',
        'scheduleTimeExpr' => 'scheduleTimeExpr',
        'sourcePrometheusId' => 'sourcePrometheusId',
        'status' => 'status',
        'tags' => 'tags',
        'targetPrometheusId' => 'targetPrometheusId',
        'toTime' => 'toTime',
        'updateTime' => 'updateTime',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggTaskGroupConfig) {
            $res['aggTaskGroupConfig'] = $this->aggTaskGroupConfig;
        }

        if (null !== $this->aggTaskGroupConfigHash) {
            $res['aggTaskGroupConfigHash'] = $this->aggTaskGroupConfigHash;
        }

        if (null !== $this->aggTaskGroupId) {
            $res['aggTaskGroupId'] = $this->aggTaskGroupId;
        }

        if (null !== $this->aggTaskGroupName) {
            $res['aggTaskGroupName'] = $this->aggTaskGroupName;
        }

        if (null !== $this->cronExpr) {
            $res['cronExpr'] = $this->cronExpr;
        }

        if (null !== $this->delay) {
            $res['delay'] = $this->delay;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->fromTime) {
            $res['fromTime'] = $this->fromTime;
        }

        if (null !== $this->maxRetries) {
            $res['maxRetries'] = $this->maxRetries;
        }

        if (null !== $this->maxRunTimeInSeconds) {
            $res['maxRunTimeInSeconds'] = $this->maxRunTimeInSeconds;
        }

        if (null !== $this->precheckString) {
            $res['precheckString'] = $this->precheckString;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->scheduleMode) {
            $res['scheduleMode'] = $this->scheduleMode;
        }

        if (null !== $this->scheduleTimeExpr) {
            $res['scheduleTimeExpr'] = $this->scheduleTimeExpr;
        }

        if (null !== $this->sourcePrometheusId) {
            $res['sourcePrometheusId'] = $this->sourcePrometheusId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetPrometheusId) {
            $res['targetPrometheusId'] = $this->targetPrometheusId;
        }

        if (null !== $this->toTime) {
            $res['toTime'] = $this->toTime;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['aggTaskGroupConfig'])) {
            $model->aggTaskGroupConfig = $map['aggTaskGroupConfig'];
        }

        if (isset($map['aggTaskGroupConfigHash'])) {
            $model->aggTaskGroupConfigHash = $map['aggTaskGroupConfigHash'];
        }

        if (isset($map['aggTaskGroupId'])) {
            $model->aggTaskGroupId = $map['aggTaskGroupId'];
        }

        if (isset($map['aggTaskGroupName'])) {
            $model->aggTaskGroupName = $map['aggTaskGroupName'];
        }

        if (isset($map['cronExpr'])) {
            $model->cronExpr = $map['cronExpr'];
        }

        if (isset($map['delay'])) {
            $model->delay = $map['delay'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['fromTime'])) {
            $model->fromTime = $map['fromTime'];
        }

        if (isset($map['maxRetries'])) {
            $model->maxRetries = $map['maxRetries'];
        }

        if (isset($map['maxRunTimeInSeconds'])) {
            $model->maxRunTimeInSeconds = $map['maxRunTimeInSeconds'];
        }

        if (isset($map['precheckString'])) {
            $model->precheckString = $map['precheckString'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['scheduleMode'])) {
            $model->scheduleMode = $map['scheduleMode'];
        }

        if (isset($map['scheduleTimeExpr'])) {
            $model->scheduleTimeExpr = $map['scheduleTimeExpr'];
        }

        if (isset($map['sourcePrometheusId'])) {
            $model->sourcePrometheusId = $map['sourcePrometheusId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['targetPrometheusId'])) {
            $model->targetPrometheusId = $map['targetPrometheusId'];
        }

        if (isset($map['toTime'])) {
            $model->toTime = $map['toTime'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
