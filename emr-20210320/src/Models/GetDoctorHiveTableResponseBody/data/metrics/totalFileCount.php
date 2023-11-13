<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveTableResponseBody\data\metrics;

use AlibabaCloud\Tea\Model;

class totalFileCount extends Model
{
    /**
     * @description The description of the metric.
     *
     * @example Number of total files
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the metric.
     *
     * @example totalFileCount
     *
     * @var string
     */
    public $name;

    /**
     * @description The unit of the metric.
     *
     * @example ”“
     *
     * @var string
     */
    public $unit;

    /**
     * @description The value of the metric.
     *
     * @example 123
     *
     * @var int
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
     * @return totalFileCount
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
