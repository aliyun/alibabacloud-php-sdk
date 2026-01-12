<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class JobReplicaStatus extends Model
{
    /**
     * @var int
     */
    public $active;

    /**
     * @var int
     */
    public $dequeued;

    /**
     * @var AutoScalingSpec
     */
    public $estimatedAutoScalingSpec;

    /**
     * @var int
     */
    public $estimatedPodCount;

    /**
     * @var ResourceConfig
     */
    public $estimatedResourceConfig;

    /**
     * @var int
     */
    public $queuing;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'active' => 'Active',
        'dequeued' => 'Dequeued',
        'estimatedAutoScalingSpec' => 'EstimatedAutoScalingSpec',
        'estimatedPodCount' => 'EstimatedPodCount',
        'estimatedResourceConfig' => 'EstimatedResourceConfig',
        'queuing' => 'Queuing',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->estimatedAutoScalingSpec) {
            $this->estimatedAutoScalingSpec->validate();
        }
        if (null !== $this->estimatedResourceConfig) {
            $this->estimatedResourceConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        if (null !== $this->dequeued) {
            $res['Dequeued'] = $this->dequeued;
        }

        if (null !== $this->estimatedAutoScalingSpec) {
            $res['EstimatedAutoScalingSpec'] = null !== $this->estimatedAutoScalingSpec ? $this->estimatedAutoScalingSpec->toArray($noStream) : $this->estimatedAutoScalingSpec;
        }

        if (null !== $this->estimatedPodCount) {
            $res['EstimatedPodCount'] = $this->estimatedPodCount;
        }

        if (null !== $this->estimatedResourceConfig) {
            $res['EstimatedResourceConfig'] = null !== $this->estimatedResourceConfig ? $this->estimatedResourceConfig->toArray($noStream) : $this->estimatedResourceConfig;
        }

        if (null !== $this->queuing) {
            $res['Queuing'] = $this->queuing;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }

        if (isset($map['Dequeued'])) {
            $model->dequeued = $map['Dequeued'];
        }

        if (isset($map['EstimatedAutoScalingSpec'])) {
            $model->estimatedAutoScalingSpec = AutoScalingSpec::fromMap($map['EstimatedAutoScalingSpec']);
        }

        if (isset($map['EstimatedPodCount'])) {
            $model->estimatedPodCount = $map['EstimatedPodCount'];
        }

        if (isset($map['EstimatedResourceConfig'])) {
            $model->estimatedResourceConfig = ResourceConfig::fromMap($map['EstimatedResourceConfig']);
        }

        if (isset($map['Queuing'])) {
            $model->queuing = $map['Queuing'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
