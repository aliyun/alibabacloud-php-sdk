<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricTopResponseBody\metricTotalModel\metricModelList;

use AlibabaCloud\Dara\Model;

class dataPoints extends Model
{
    /**
     * @var float
     */
    public $average;

    /**
     * @var string
     */
    public $id;

    /**
     * @var float
     */
    public $maximum;

    /**
     * @var float
     */
    public $minimum;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $properties;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'average' => 'Average',
        'id' => 'Id',
        'maximum' => 'Maximum',
        'minimum' => 'Minimum',
        'name' => 'Name',
        'properties' => 'Properties',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->average) {
            $res['Average'] = $this->average;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->maximum) {
            $res['Maximum'] = $this->maximum;
        }

        if (null !== $this->minimum) {
            $res['Minimum'] = $this->minimum;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['Average'])) {
            $model->average = $map['Average'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Maximum'])) {
            $model->maximum = $map['Maximum'];
        }

        if (isset($map['Minimum'])) {
            $model->minimum = $map['Minimum'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
