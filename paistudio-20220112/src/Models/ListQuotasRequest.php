<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class ListQuotasRequest extends Model
{
    /**
     * @var string
     */
    public $hasResource;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $layoutMode;

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
    public $parentQuotaId;

    /**
     * @var string
     */
    public $quotaIds;

    /**
     * @var string
     */
    public $quotaName;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $statuses;

    /**
     * @var bool
     */
    public $verbose;

    /**
     * @var string
     */
    public $workspaceIds;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'hasResource' => 'HasResource',
        'labels' => 'Labels',
        'layoutMode' => 'LayoutMode',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'parentQuotaId' => 'ParentQuotaId',
        'quotaIds' => 'QuotaIds',
        'quotaName' => 'QuotaName',
        'resourceType' => 'ResourceType',
        'sortBy' => 'SortBy',
        'statuses' => 'Statuses',
        'verbose' => 'Verbose',
        'workspaceIds' => 'WorkspaceIds',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasResource) {
            $res['HasResource'] = $this->hasResource;
        }

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

        if (null !== $this->verbose) {
            $res['Verbose'] = $this->verbose;
        }

        if (null !== $this->workspaceIds) {
            $res['WorkspaceIds'] = $this->workspaceIds;
        }

        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
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
        if (isset($map['HasResource'])) {
            $model->hasResource = $map['HasResource'];
        }

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

        if (isset($map['Verbose'])) {
            $model->verbose = $map['Verbose'];
        }

        if (isset($map['WorkspaceIds'])) {
            $model->workspaceIds = $map['WorkspaceIds'];
        }

        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
