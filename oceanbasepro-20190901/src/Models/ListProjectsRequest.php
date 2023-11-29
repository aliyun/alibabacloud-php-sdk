<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ListProjectsRequest extends Model
{
    /**
     * @var string[]
     */
    public $labelIds;

    /**
     * @example descend
     *
     * @var string
     */
    public $order;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example np_4w****
     *
     * @var string
     */
    public $searchKey;

    /**
     * @var string[]
     */
    public $sinkEndpointTypes;

    /**
     * @example gmtCreate
     *
     * @var string
     */
    public $sortField;

    /**
     * @var string[]
     */
    public $sourceEndpointTypes;

    /**
     * @var string[]
     */
    public $status;

    /**
     * @example MIGRATION
     *
     * @var string
     */
    public $type;

    /**
     * @example false
     *
     * @var bool
     */
    public $visibleSubProject;
    protected $_name = [
        'labelIds'            => 'LabelIds',
        'order'               => 'Order',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'searchKey'           => 'SearchKey',
        'sinkEndpointTypes'   => 'SinkEndpointTypes',
        'sortField'           => 'SortField',
        'sourceEndpointTypes' => 'SourceEndpointTypes',
        'status'              => 'Status',
        'type'                => 'Type',
        'visibleSubProject'   => 'VisibleSubProject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelIds) {
            $res['LabelIds'] = $this->labelIds;
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
        if (null !== $this->sinkEndpointTypes) {
            $res['SinkEndpointTypes'] = $this->sinkEndpointTypes;
        }
        if (null !== $this->sortField) {
            $res['SortField'] = $this->sortField;
        }
        if (null !== $this->sourceEndpointTypes) {
            $res['SourceEndpointTypes'] = $this->sourceEndpointTypes;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->visibleSubProject) {
            $res['VisibleSubProject'] = $this->visibleSubProject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelIds'])) {
            if (!empty($map['LabelIds'])) {
                $model->labelIds = $map['LabelIds'];
            }
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
            if (!empty($map['SinkEndpointTypes'])) {
                $model->sinkEndpointTypes = $map['SinkEndpointTypes'];
            }
        }
        if (isset($map['SortField'])) {
            $model->sortField = $map['SortField'];
        }
        if (isset($map['SourceEndpointTypes'])) {
            if (!empty($map['SourceEndpointTypes'])) {
                $model->sourceEndpointTypes = $map['SourceEndpointTypes'];
            }
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = $map['Status'];
            }
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
