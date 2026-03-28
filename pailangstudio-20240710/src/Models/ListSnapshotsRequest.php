<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;

class ListSnapshotsRequest extends Model
{
    /**
     * @var string
     */
    public $creationType;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

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
    public $snapshotId;

    /**
     * @var string
     */
    public $snapshotResourceId;

    /**
     * @var string
     */
    public $snapshotResourceType;

    /**
     * @var string
     */
    public $snapshotStatus;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'creationType' => 'CreationType',
        'creator' => 'Creator',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'snapshotId' => 'SnapshotId',
        'snapshotResourceId' => 'SnapshotResourceId',
        'snapshotResourceType' => 'SnapshotResourceType',
        'snapshotStatus' => 'SnapshotStatus',
        'sortBy' => 'SortBy',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationType) {
            $res['CreationType'] = $this->creationType;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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

        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        if (null !== $this->snapshotResourceId) {
            $res['SnapshotResourceId'] = $this->snapshotResourceId;
        }

        if (null !== $this->snapshotResourceType) {
            $res['SnapshotResourceType'] = $this->snapshotResourceType;
        }

        if (null !== $this->snapshotStatus) {
            $res['SnapshotStatus'] = $this->snapshotStatus;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['CreationType'])) {
            $model->creationType = $map['CreationType'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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

        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        if (isset($map['SnapshotResourceId'])) {
            $model->snapshotResourceId = $map['SnapshotResourceId'];
        }

        if (isset($map['SnapshotResourceType'])) {
            $model->snapshotResourceType = $map['SnapshotResourceType'];
        }

        if (isset($map['SnapshotStatus'])) {
            $model->snapshotStatus = $map['SnapshotStatus'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
