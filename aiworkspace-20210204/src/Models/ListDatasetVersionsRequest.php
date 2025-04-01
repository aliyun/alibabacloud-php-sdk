<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class ListDatasetVersionsRequest extends Model
{
    /**
     * @var string
     */
    public $labelKeys;

    /**
     * @var string
     */
    public $labelValues;

    /**
     * @var string
     */
    public $order;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $properties;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceTypes;
    protected $_name = [
        'labelKeys' => 'LabelKeys',
        'labelValues' => 'LabelValues',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'properties' => 'Properties',
        'sortBy' => 'SortBy',
        'sourceId' => 'SourceId',
        'sourceTypes' => 'SourceTypes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelKeys) {
            $res['LabelKeys'] = $this->labelKeys;
        }

        if (null !== $this->labelValues) {
            $res['LabelValues'] = $this->labelValues;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelKeys'])) {
            $model->labelKeys = $map['LabelKeys'];
        }

        if (isset($map['LabelValues'])) {
            $model->labelValues = $map['LabelValues'];
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
