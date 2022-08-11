<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class TargetTrackingPolicies extends Model {
    protected $_name = [
        'endTime' => 'endTime',
        'maxCapacity' => 'maxCapacity',
        'metricTarget' => 'metricTarget',
        'metricType' => 'metricType',
        'minCapacity' => 'minCapacity',
        'name' => 'name',
        'startTime' => 'startTime',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->maxCapacity) {
            $res['maxCapacity'] = $this->maxCapacity;
        }
        if (null !== $this->metricTarget) {
            $res['metricTarget'] = $this->metricTarget;
        }
        if (null !== $this->metricType) {
            $res['metricType'] = $this->metricType;
        }
        if (null !== $this->minCapacity) {
            $res['minCapacity'] = $this->minCapacity;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return TargetTrackingPolicies
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['endTime'])){
            $model->endTime = $map['endTime'];
        }
        if(isset($map['maxCapacity'])){
            $model->maxCapacity = $map['maxCapacity'];
        }
        if(isset($map['metricTarget'])){
            $model->metricTarget = $map['metricTarget'];
        }
        if(isset($map['metricType'])){
            $model->metricType = $map['metricType'];
        }
        if(isset($map['minCapacity'])){
            $model->minCapacity = $map['minCapacity'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['startTime'])){
            $model->startTime = $map['startTime'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $maxCapacity;

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
    public $minCapacity;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $startTime;

}
