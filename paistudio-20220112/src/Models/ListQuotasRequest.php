<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ListQuotasRequest extends Model
{
    /**
     * @example official=true,gpu=false
     *
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $layoutMode;

    /**
     * @example desc
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
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example quotajradxh43rgb
     *
     * @var string
     */
    public $parentQuotaId;

    /**
     * @example quota1ci8g793pgm,quotajradxh43rgb
     *
     * @var string
     */
    public $quotaIds;

    /**
     * @example quotajradxh43rgb
     *
     * @var string
     */
    public $quotaName;

    /**
     * @example ECS
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example status
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example Creating
     *
     * @var string
     */
    public $statuses;

    /**
     * @example 21345,38727
     *
     * @var string
     */
    public $workspaceIds;
    protected $_name = [
        'labels'        => 'Labels',
        'layoutMode'    => 'LayoutMode',
        'order'         => 'Order',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'parentQuotaId' => 'ParentQuotaId',
        'quotaIds'      => 'QuotaIds',
        'quotaName'     => 'QuotaName',
        'resourceType'  => 'ResourceType',
        'sortBy'        => 'SortBy',
        'statuses'      => 'Statuses',
        'workspaceIds'  => 'WorkspaceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->layoutMode) {
            $res['LayoutMode'] = $this->layoutMode;
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
        if (null !== $this->parentQuotaId) {
            $res['ParentQuotaId'] = $this->parentQuotaId;
        }
        if (null !== $this->quotaIds) {
            $res['QuotaIds'] = $this->quotaIds;
        }
        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }
        if (null !== $this->workspaceIds) {
            $res['WorkspaceIds'] = $this->workspaceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQuotasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['LayoutMode'])) {
            $model->layoutMode = $map['LayoutMode'];
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
        if (isset($map['ParentQuotaId'])) {
            $model->parentQuotaId = $map['ParentQuotaId'];
        }
        if (isset($map['QuotaIds'])) {
            $model->quotaIds = $map['QuotaIds'];
        }
        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['Statuses'])) {
            $model->statuses = $map['Statuses'];
        }
        if (isset($map['WorkspaceIds'])) {
            $model->workspaceIds = $map['WorkspaceIds'];
        }

        return $model;
    }
}
