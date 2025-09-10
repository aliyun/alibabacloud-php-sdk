<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateAggTaskGroupRequest\tags;

class UpdateAggTaskGroupRequest extends Model
{
    /**
     * @var string
     */
    public $aggTaskGroupConfig;

    /**
     * @var string
     */
    public $aggTaskGroupConfigType;

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
    public $scheduleMode;

    /**
     * @var string
     */
    public $scheduleTimeExpr;

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
    protected $_name = [
        'aggTaskGroupConfig' => 'aggTaskGroupConfig',
        'aggTaskGroupConfigType' => 'aggTaskGroupConfigType',
        'aggTaskGroupName' => 'aggTaskGroupName',
        'cronExpr' => 'cronExpr',
        'delay' => 'delay',
        'description' => 'description',
        'fromTime' => 'fromTime',
        'maxRetries' => 'maxRetries',
        'maxRunTimeInSeconds' => 'maxRunTimeInSeconds',
        'precheckString' => 'precheckString',
        'scheduleMode' => 'scheduleMode',
        'scheduleTimeExpr' => 'scheduleTimeExpr',
        'status' => 'status',
        'tags' => 'tags',
        'targetPrometheusId' => 'targetPrometheusId',
        'toTime' => 'toTime',
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

        if (null !== $this->aggTaskGroupConfigType) {
            $res['aggTaskGroupConfigType'] = $this->aggTaskGroupConfigType;
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

        if (null !== $this->scheduleMode) {
            $res['scheduleMode'] = $this->scheduleMode;
        }

        if (null !== $this->scheduleTimeExpr) {
            $res['scheduleTimeExpr'] = $this->scheduleTimeExpr;
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

        if (isset($map['aggTaskGroupConfigType'])) {
            $model->aggTaskGroupConfigType = $map['aggTaskGroupConfigType'];
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

        if (isset($map['scheduleMode'])) {
            $model->scheduleMode = $map['scheduleMode'];
        }

        if (isset($map['scheduleTimeExpr'])) {
            $model->scheduleTimeExpr = $map['scheduleTimeExpr'];
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

        return $model;
    }
}
