<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MonitorSlsAlertRule extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $queryCondition;

    /**
     * @var int
     */
    public $triggerInterval;

    /**
     * @var string
     */
    public $triggerIntervalUnit;

    /**
     * @var string
     */
    public $triggerOperator;

    /**
     * @var int
     */
    public $triggerThreshold;

    /**
     * @var int
     */
    public $triggerThresholdUpper;
    protected $_name = [
        'id' => 'id',
        'name' => 'name',
        'queryCondition' => 'queryCondition',
        'triggerInterval' => 'triggerInterval',
        'triggerIntervalUnit' => 'triggerIntervalUnit',
        'triggerOperator' => 'triggerOperator',
        'triggerThreshold' => 'triggerThreshold',
        'triggerThresholdUpper' => 'triggerThresholdUpper',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->queryCondition) {
            $res['queryCondition'] = $this->queryCondition;
        }

        if (null !== $this->triggerInterval) {
            $res['triggerInterval'] = $this->triggerInterval;
        }

        if (null !== $this->triggerIntervalUnit) {
            $res['triggerIntervalUnit'] = $this->triggerIntervalUnit;
        }

        if (null !== $this->triggerOperator) {
            $res['triggerOperator'] = $this->triggerOperator;
        }

        if (null !== $this->triggerThreshold) {
            $res['triggerThreshold'] = $this->triggerThreshold;
        }

        if (null !== $this->triggerThresholdUpper) {
            $res['triggerThresholdUpper'] = $this->triggerThresholdUpper;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['queryCondition'])) {
            $model->queryCondition = $map['queryCondition'];
        }

        if (isset($map['triggerInterval'])) {
            $model->triggerInterval = $map['triggerInterval'];
        }

        if (isset($map['triggerIntervalUnit'])) {
            $model->triggerIntervalUnit = $map['triggerIntervalUnit'];
        }

        if (isset($map['triggerOperator'])) {
            $model->triggerOperator = $map['triggerOperator'];
        }

        if (isset($map['triggerThreshold'])) {
            $model->triggerThreshold = $map['triggerThreshold'];
        }

        if (isset($map['triggerThresholdUpper'])) {
            $model->triggerThresholdUpper = $map['triggerThresholdUpper'];
        }

        return $model;
    }
}
