<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MonitorArmsAlertRule extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $metricKey;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $triggerAggregate;

    /**
     * @var int
     */
    public $triggerInterval;

    /**
     * @var string
     */
    public $triggerOperator;

    /**
     * @var int
     */
    public $triggerThreshold;
    protected $_name = [
        'id' => 'id',
        'metricKey' => 'metricKey',
        'metricType' => 'metricType',
        'name' => 'name',
        'triggerAggregate' => 'triggerAggregate',
        'triggerInterval' => 'triggerInterval',
        'triggerOperator' => 'triggerOperator',
        'triggerThreshold' => 'triggerThreshold',
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

        if (null !== $this->metricKey) {
            $res['metricKey'] = $this->metricKey;
        }

        if (null !== $this->metricType) {
            $res['metricType'] = $this->metricType;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->triggerAggregate) {
            $res['triggerAggregate'] = $this->triggerAggregate;
        }

        if (null !== $this->triggerInterval) {
            $res['triggerInterval'] = $this->triggerInterval;
        }

        if (null !== $this->triggerOperator) {
            $res['triggerOperator'] = $this->triggerOperator;
        }

        if (null !== $this->triggerThreshold) {
            $res['triggerThreshold'] = $this->triggerThreshold;
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

        if (isset($map['metricKey'])) {
            $model->metricKey = $map['metricKey'];
        }

        if (isset($map['metricType'])) {
            $model->metricType = $map['metricType'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['triggerAggregate'])) {
            $model->triggerAggregate = $map['triggerAggregate'];
        }

        if (isset($map['triggerInterval'])) {
            $model->triggerInterval = $map['triggerInterval'];
        }

        if (isset($map['triggerOperator'])) {
            $model->triggerOperator = $map['triggerOperator'];
        }

        if (isset($map['triggerThreshold'])) {
            $model->triggerThreshold = $map['triggerThreshold'];
        }

        return $model;
    }
}
