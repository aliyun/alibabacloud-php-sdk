<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class ListLabelTablesRequest extends Model
{
    /**
     * @var string[]
     */
    public $labelTableIds;

    /**
     * @example label_table1
     *
     * @var string
     */
    public $name;

    /**
     * @example Asc
     *
     * @var string
     */
    public $order;

    /**
     * @example 1231432432****
     *
     * @var string
     */
    public $owner;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example project1
     *
     * @var string
     */
    public $projectId;

    /**
     * @example GmtModifiedTime
     *
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'labelTableIds' => 'LabelTableIds',
        'name'          => 'Name',
        'order'         => 'Order',
        'owner'         => 'Owner',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'projectId'     => 'ProjectId',
        'sortBy'        => 'SortBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelTableIds) {
            $res['LabelTableIds'] = $this->labelTableIds;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLabelTablesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelTableIds'])) {
            if (!empty($map['LabelTableIds'])) {
                $model->labelTableIds = $map['LabelTableIds'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        return $model;
    }
}
