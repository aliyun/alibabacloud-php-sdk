<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class ListProjectsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $labelIdsShrink;

    /**
     * @var bool
     */
    public $needRelatedInfo;

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
    public $searchKey;

    /**
     * @var string
     */
    public $sinkEndpointTypesShrink;

    /**
     * @var string
     */
    public $sortField;

    /**
     * @var string
     */
    public $sourceEndpointTypesShrink;

    /**
     * @var string
     */
    public $statusShrink;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $visibleSubProject;
    protected $_name = [
        'labelIdsShrink' => 'LabelIds',
        'needRelatedInfo' => 'NeedRelatedInfo',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'searchKey' => 'SearchKey',
        'sinkEndpointTypesShrink' => 'SinkEndpointTypes',
        'sortField' => 'SortField',
        'sourceEndpointTypesShrink' => 'SourceEndpointTypes',
        'statusShrink' => 'Status',
        'type' => 'Type',
        'visibleSubProject' => 'VisibleSubProject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelIdsShrink) {
            $res['LabelIds'] = $this->labelIdsShrink;
        }

        if (null !== $this->needRelatedInfo) {
            $res['NeedRelatedInfo'] = $this->needRelatedInfo;
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

        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }

        if (null !== $this->sinkEndpointTypesShrink) {
            $res['SinkEndpointTypes'] = $this->sinkEndpointTypesShrink;
        }

        if (null !== $this->sortField) {
            $res['SortField'] = $this->sortField;
        }

        if (null !== $this->sourceEndpointTypesShrink) {
            $res['SourceEndpointTypes'] = $this->sourceEndpointTypesShrink;
        }

        if (null !== $this->statusShrink) {
            $res['Status'] = $this->statusShrink;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->visibleSubProject) {
            $res['VisibleSubProject'] = $this->visibleSubProject;
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
        if (isset($map['LabelIds'])) {
            $model->labelIdsShrink = $map['LabelIds'];
        }

        if (isset($map['NeedRelatedInfo'])) {
            $model->needRelatedInfo = $map['NeedRelatedInfo'];
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

        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }

        if (isset($map['SinkEndpointTypes'])) {
            $model->sinkEndpointTypesShrink = $map['SinkEndpointTypes'];
        }

        if (isset($map['SortField'])) {
            $model->sortField = $map['SortField'];
        }

        if (isset($map['SourceEndpointTypes'])) {
            $model->sourceEndpointTypesShrink = $map['SourceEndpointTypes'];
        }

        if (isset($map['Status'])) {
            $model->statusShrink = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VisibleSubProject'])) {
            $model->visibleSubProject = $map['VisibleSubProject'];
        }

        return $model;
    }
}
