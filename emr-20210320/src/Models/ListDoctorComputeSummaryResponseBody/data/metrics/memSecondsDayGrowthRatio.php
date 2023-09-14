<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorComputeSummaryResponseBody\data\metrics;

use AlibabaCloud\Tea\Model;

class memSecondsDayGrowthRatio extends Model
{
    /**
     * @example Growth ratio of memory usage in seconds per day
     *
     * @var string
     */
    public $description;

    /**
     * @example memSecondsDayGrowthRatio
     *
     * @var string
     */
    public $name;

    /**
     * @example “”
     *
     * @var string
     */
    public $unit;

    /**
     * @example 0.36
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
     * @return memSecondsDayGrowthRatio
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
