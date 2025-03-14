<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceResponseBody\result;

use AlibabaCloud\Tea\Model;

class headers extends Model
{
    /**
     * @description Aggregation operator. Only present for measure fields, such as SUM, AVG, and MAX.
     *
     * @example SUM
     *
     * @var string
     */
    public $aggregator;

    /**
     * @description Field name, corresponding to the physical table field name.
     *
     * @example The alias of the field. The key of the map data row in the result parameter values.
     *
     * @var string
     */
    public $column;

    /**
     * @description The data type of the field. Common types include number, string, date, datetime, time, and geographic.
     *
     * @example string
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The granularity of the dimension field.
     * This field is returned only when the requested field is a date or geographic dimension, with the following possible values:
     *
     * - Date granularity: yearRegion (year), monthRegion (month), weekRegion (week), dayRegion (day), hourRegion (hour), minRegion (minute), secRegion (second)
     *
     * - Geographic granularity: COUNTRY (country level), PROVINCE (province level), CITY (city level), XIAN (district/county level), REGION (region)
     *
     * @example yearRegion
     *
     * @var string
     */
    public $granularity;

    /**
     * @description 字段别名，结果参数values中map数据行的key。
     *
     * @example area
     *
     * @var string
     */
    public $label;

    /**
     * @description Field type, used to distinguish between dimension and measure fields.
     *
     * @example StandardDimension
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aggregator' => 'Aggregator',
        'column' => 'Column',
        'dataType' => 'DataType',
        'granularity' => 'Granularity',
        'label' => 'Label',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregator) {
            $res['Aggregator'] = $this->aggregator;
        }
        if (null !== $this->column) {
            $res['Column'] = $this->column;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return headers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregator'])) {
            $model->aggregator = $map['Aggregator'];
        }
        if (isset($map['Column'])) {
            $model->column = $map['Column'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
