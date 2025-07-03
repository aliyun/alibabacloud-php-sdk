<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class ListProjectsRequest extends Model
{
    /**
     * @var string[]
     */
    public $labelIds;

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
     * @var string[]
     */
    public $sinkEndpointTypes;

    /**
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
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $visibleSubProject;
    protected $_name = [
        'labelIds' => 'LabelIds',
        'needRelatedInfo' => 'NeedRelatedInfo',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'searchKey' => 'SearchKey',
        'sinkEndpointTypes' => 'SinkEndpointTypes',
        'sortField' => 'SortField',
        'sourceEndpointTypes' => 'SourceEndpointTypes',
        'status' => 'Status',
        'type' => 'Type',
        'visibleSubProject' => 'VisibleSubProject',
    ];

    public function validate()
    {
        if (\is_array($this->labelIds)) {
            Model::validateArray($this->labelIds);
        }
        if (\is_array($this->sinkEndpointTypes)) {
            Model::validateArray($this->sinkEndpointTypes);
        }
        if (\is_array($this->sourceEndpointTypes)) {
            Model::validateArray($this->sourceEndpointTypes);
        }
        if (\is_array($this->status)) {
            Model::validateArray($this->status);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelIds) {
            if (\is_array($this->labelIds)) {
                $res['LabelIds'] = [];
                $n1 = 0;
                foreach ($this->labelIds as $item1) {
                    $res['LabelIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->sinkEndpointTypes) {
            if (\is_array($this->sinkEndpointTypes)) {
                $res['SinkEndpointTypes'] = [];
                $n1 = 0;
                foreach ($this->sinkEndpointTypes as $item1) {
                    $res['SinkEndpointTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sortField) {
            $res['SortField'] = $this->sortField;
        }

        if (null !== $this->sourceEndpointTypes) {
            if (\is_array($this->sourceEndpointTypes)) {
                $res['SourceEndpointTypes'] = [];
                $n1 = 0;
                foreach ($this->sourceEndpointTypes as $item1) {
                    $res['SourceEndpointTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            if (\is_array($this->status)) {
                $res['Status'] = [];
                $n1 = 0;
                foreach ($this->status as $item1) {
                    $res['Status'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['LabelIds'])) {
                $model->labelIds = [];
                $n1 = 0;
                foreach ($map['LabelIds'] as $item1) {
                    $model->labelIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['SinkEndpointTypes'])) {
                $model->sinkEndpointTypes = [];
                $n1 = 0;
                foreach ($map['SinkEndpointTypes'] as $item1) {
                    $model->sinkEndpointTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SortField'])) {
            $model->sortField = $map['SortField'];
        }

        if (isset($map['SourceEndpointTypes'])) {
            if (!empty($map['SourceEndpointTypes'])) {
                $model->sourceEndpointTypes = [];
                $n1 = 0;
                foreach ($map['SourceEndpointTypes'] as $item1) {
                    $model->sourceEndpointTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = [];
                $n1 = 0;
                foreach ($map['Status'] as $item1) {
                    $model->status[$n1] = $item1;
                    ++$n1;
                }
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
