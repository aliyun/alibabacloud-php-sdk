<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponseBody\data\metrics;

use AlibabaCloud\Tea\Model;

class regionCountDayGrowthRatio extends Model
{
    /**
     * @description Metric description.
     *
     * @example Day growth ratio of region count
     *
     * @var string
     */
    public $description;

    /**
     * @description Metric name.
     *
     * @example regionCountDayGrowthRatio
     *
     * @var string
     */
    public $name;

    /**
     * @description Metric unit.
     *
     * @example ""
     *
     * @var string
     */
    public $unit;

    /**
     * @description Metric value.
     *
     * @example 0.8
     *
     * @var float
     */
    public $value;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'unit'        => 'Unit',
        'value'       => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionCountDayGrowthRatio
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
