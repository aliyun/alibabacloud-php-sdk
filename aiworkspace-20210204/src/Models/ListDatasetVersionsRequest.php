<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class ListDatasetVersionsRequest extends Model
{
    /**
     * @example OSS
     *
     * @var string
     */
    public $dataSourcesTypes;

    /**
     * @example key1,key2
     *
     * @var string
     */
    public $labelKeys;

    /**
     * @example value1,value2
     *
     * @var string
     */
    public $lableValues;

    /**
     * @example ASC
     *
     * @var string
     */
    public $order;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example DIRECTORY
     *
     * @var string
     */
    public $properties;

    /**
     * @example GmtCreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example d-a0xbe5n03bhqof46ce
     *
     * @var string
     */
    public $sourceId;

    /**
     * @example USER
     *
     * @var string
     */
    public $sourceTypes;
    protected $_name = [
        'dataSourcesTypes' => 'DataSourcesTypes',
        'labelKeys'        => 'LabelKeys',
        'lableValues'      => 'LableValues',
        'order'            => 'Order',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'properties'       => 'Properties',
        'sortBy'           => 'SortBy',
        'sourceId'         => 'SourceId',
        'sourceTypes'      => 'SourceTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourcesTypes) {
            $res['DataSourcesTypes'] = $this->dataSourcesTypes;
        }
        if (null !== $this->labelKeys) {
            $res['LabelKeys'] = $this->labelKeys;
        }
        if (null !== $this->lableValues) {
            $res['LableValues'] = $this->lableValues;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceTypes) {
            $res['SourceTypes'] = $this->sourceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDatasetVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourcesTypes'])) {
            $model->dataSourcesTypes = $map['DataSourcesTypes'];
        }
        if (isset($map['LabelKeys'])) {
            $model->labelKeys = $map['LabelKeys'];
        }
        if (isset($map['LableValues'])) {
            $model->lableValues = $map['LableValues'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceTypes'])) {
            $model->sourceTypes = $map['SourceTypes'];
        }

        return $model;
    }
}
