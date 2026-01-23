<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListAggTaskGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class aggTaskGroups extends Model
{
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
     * @var string
     */
    public $interval;

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
    protected $_name = [
        'aggTaskGroupConfigHash' => 'aggTaskGroupConfigHash',
        'aggTaskGroupId' => 'aggTaskGroupId',
        'aggTaskGroupName' => 'aggTaskGroupName',
        'cronExpr' => 'cronExpr',
        'delay' => 'delay',
        'description' => 'description',
        'fromTime' => 'fromTime',
        'interval' => 'interval',
        'maxRetries' => 'maxRetries',
        'maxRunTimeInSeconds' => 'maxRunTimeInSeconds',
        'regionId' => 'regionId',
        'scheduleMode' => 'scheduleMode',
        'scheduleTimeExpr' => 'scheduleTimeExpr',
        'sourcePrometheusId' => 'sourcePrometheusId',
        'status' => 'status',
        'targetPrometheusId' => 'targetPrometheusId',
        'toTime' => 'toTime',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->interval) {
            $res['interval'] = $this->interval;
        }

        if (null !== $this->maxRetries) {
            $res['maxRetries'] = $this->maxRetries;
        }

        if (null !== $this->maxRunTimeInSeconds) {
            $res['maxRunTimeInSeconds'] = $this->maxRunTimeInSeconds;
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

        if (null !== $this->targetPrometheusId) {
            $res['targetPrometheusId'] = $this->targetPrometheusId;
        }

        if (null !== $this->toTime) {
            $res['toTime'] = $this->toTime;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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

        if (isset($map['interval'])) {
            $model->interval = $map['interval'];
        }

        if (isset($map['maxRetries'])) {
            $model->maxRetries = $map['maxRetries'];
        }

        if (isset($map['maxRunTimeInSeconds'])) {
            $model->maxRunTimeInSeconds = $map['maxRunTimeInSeconds'];
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

        if (isset($map['targetPrometheusId'])) {
            $model->targetPrometheusId = $map['targetPrometheusId'];
        }

        if (isset($map['toTime'])) {
            $model->toTime = $map['toTime'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
