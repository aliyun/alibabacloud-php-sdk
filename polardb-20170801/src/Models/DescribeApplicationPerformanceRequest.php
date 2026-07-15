<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeApplicationPerformanceRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $consumer;

    /**
     * @var string
     */
    public $consumerGroup;

    /**
     * @var string
     */
    public $downsample;

    /**
     * @var int
     */
    public $endStep;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var string
     */
    public $key;

    /**
     * @var int
     */
    public $maxPoints;

    /**
     * @var string
     */
    public $modelService;

    /**
     * @var int
     */
    public $startStep;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'consumer' => 'Consumer',
        'consumerGroup' => 'ConsumerGroup',
        'downsample' => 'Downsample',
        'endStep' => 'EndStep',
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'key' => 'Key',
        'maxPoints' => 'MaxPoints',
        'modelService' => 'ModelService',
        'startStep' => 'StartStep',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->consumer) {
            $res['Consumer'] = $this->consumer;
        }

        if (null !== $this->consumerGroup) {
            $res['ConsumerGroup'] = $this->consumerGroup;
        }

        if (null !== $this->downsample) {
            $res['Downsample'] = $this->downsample;
        }

        if (null !== $this->endStep) {
            $res['EndStep'] = $this->endStep;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->maxPoints) {
            $res['MaxPoints'] = $this->maxPoints;
        }

        if (null !== $this->modelService) {
            $res['ModelService'] = $this->modelService;
        }

        if (null !== $this->startStep) {
            $res['StartStep'] = $this->startStep;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Consumer'])) {
            $model->consumer = $map['Consumer'];
        }

        if (isset($map['ConsumerGroup'])) {
            $model->consumerGroup = $map['ConsumerGroup'];
        }

        if (isset($map['Downsample'])) {
            $model->downsample = $map['Downsample'];
        }

        if (isset($map['EndStep'])) {
            $model->endStep = $map['EndStep'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['MaxPoints'])) {
            $model->maxPoints = $map['MaxPoints'];
        }

        if (isset($map['ModelService'])) {
            $model->modelService = $map['ModelService'];
        }

        if (isset($map['StartStep'])) {
            $model->startStep = $map['StartStep'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
