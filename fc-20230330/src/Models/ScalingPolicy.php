<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ScalingPolicy extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $maxInstances;

    /**
     * @var float
     */
    public $metricTarget;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var int
     */
    public $minInstances;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'endTime' => 'endTime',
        'maxInstances' => 'maxInstances',
        'metricTarget' => 'metricTarget',
        'metricType' => 'metricType',
        'minInstances' => 'minInstances',
        'name' => 'name',
        'startTime' => 'startTime',
        'timeZone' => 'timeZone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->maxInstances) {
            $res['maxInstances'] = $this->maxInstances;
        }

        if (null !== $this->metricTarget) {
            $res['metricTarget'] = $this->metricTarget;
        }

        if (null !== $this->metricType) {
            $res['metricType'] = $this->metricType;
        }

        if (null !== $this->minInstances) {
            $res['minInstances'] = $this->minInstances;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['maxInstances'])) {
            $model->maxInstances = $map['maxInstances'];
        }

        if (isset($map['metricTarget'])) {
            $model->metricTarget = $map['metricTarget'];
        }

        if (isset($map['metricType'])) {
            $model->metricType = $map['metricType'];
        }

        if (isset($map['minInstances'])) {
            $model->minInstances = $map['minInstances'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        return $model;
    }
}
