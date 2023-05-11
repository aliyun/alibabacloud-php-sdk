<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksBloodRelationshipResponseBody\result;

use AlibabaCloud\Tea\Model;

class queryParams extends Model
{
    /**
     * @description Indices whether the metric. Valid values:
     *
     * true false
     * @example area_column
     *
     * @var string
     */
    public $areaId;

    /**
     * @description The ID of the owning location.
     *
     * @example The name of the owning location.
     *
     * @var string
     */
    public $areaName;

    /**
     * @description The globally unique PathId.
     *
     * @example order_number
     *
     * @var string
     */
    public $caption;

    /**
     * @description The display name of the field.
     *
     * @example number
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The type of the field. Valid values:
     *
     *   string: string type
     *   date: a date type that contains only the year, month, and day parts
     *   datetime: a common date type
     *   time: a date type that contains only hours, minutes, and seconds.
     *   number: numeric
     *   boolean: Boolean type
     *   geographical: geographical location
     *   url: string type
     *   imageUrl: the type of the image link.
     *   multivalue: a multi-value column
     *
     * @example true
     *
     * @var bool
     */
    public $isMeasure;

    /**
     * @description The unique ID of the field.
     *
     * @example schema7d1944eb-443e-48c6-8123-bf45a99e7e74.dc78a4ed-880d-452e-b017-90cfc10c83e5_company_sales_record.[Ndc78a4_order_level].[Ndc78a4_order_level].[Ndc78a4_order_level]
     *
     * @var string
     */
    public $pathId;

    /**
     * @description A list of query parameter reference columns.
     *
     * @example Ndc78a4_order_number
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'areaId'    => 'AreaId',
        'areaName'  => 'AreaName',
        'caption'   => 'Caption',
        'dataType'  => 'DataType',
        'isMeasure' => 'IsMeasure',
        'pathId'    => 'PathId',
        'uid'       => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }
        if (null !== $this->areaName) {
            $res['AreaName'] = $this->areaName;
        }
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->isMeasure) {
            $res['IsMeasure'] = $this->isMeasure;
        }
        if (null !== $this->pathId) {
            $res['PathId'] = $this->pathId;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }
        if (isset($map['AreaName'])) {
            $model->areaName = $map['AreaName'];
        }
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['IsMeasure'])) {
            $model->isMeasure = $map['IsMeasure'];
        }
        if (isset($map['PathId'])) {
            $model->pathId = $map['PathId'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
