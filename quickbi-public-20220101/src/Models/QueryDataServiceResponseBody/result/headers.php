<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceResponseBody\result;

use AlibabaCloud\Tea\Model;

class headers extends Model
{
    /**
     * @description The field name, which corresponds to the physical table field name.
     *
     * @example SUM
     *
     * @var string
     */
    public $aggregator;

    /**
     * @description The granularity of the dimension field. This field is returned only when the requested field is a date dimension or a geographical dimension. Valid values:
     *
     *   Date granularity: yearRegion (year), monthRegion (month), weekRegion (week), dayRegion (day), hourRegion (hour), minRegion (minute), secRegion (second)
     *   Geographic information granularity: COUNTRY (international level), PROVINCE (provincial level), CITY (municipal level), XIAN (district /county), and REGION (regional level)
     *
     * @example The alias of the field. The key of the map data row in the result parameter values.
     *
     * @var string
     */
    public $column;

    /**
     * @description The column header.
     *
     * @example string
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The field type, which is used to distinguish whether the field type is a dimension or a measure.
     *
     * @example yearRegion
     *
     * @var string
     */
    public $granularity;

    /**
     * @description The data type of the field. generally have number, string, date, datetime, time, and geographic.
     *
     * @example area
     *
     * @var string
     */
    public $label;

    /**
     * @description SELECT COMPANY_T_1_.\\"area\\" AS D_AREA_2_, COMPANY_T_1_.\\"city\\" AS D_CITY_3_, SUM(COMPANY_T_1_.\\"profit_amt\\") AS D_PROFIT_4_ FROM \\"quickbi_test\\".\\"company_sales_record_copy\\" AS COMPANY_T_1_ WHERE COMPANY_T_1_.\\"area\\" LIKE \\"% China East %\\" GROUP BY COMPANY_T_1_.\\"area\\", COMPANY_T_1_.\\"city\\" HAVING SUM(COMPANY_T_1_.\\"order_amt\\") > 1 LIMIT 0,10
     *
     * @example StandardDimension
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aggregator'  => 'Aggregator',
        'column'      => 'Column',
        'dataType'    => 'DataType',
        'granularity' => 'Granularity',
        'label'       => 'Label',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

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
