<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class ListSnapshotRequest extends Model
{
    /**
     * @example SnapshotId
     *
     * @var string
     */
    public $filterKey;

    /**
     * @example s-bp67acfmxazb4p****
     *
     * @var string
     */
    public $filterValue;

    /**
     * @example dbfs-GOrr********Yd0VLOyBpg
     *
     * @var string
     */
    public $fsId;

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
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example ["s-bp67acfmxazb4p****", "s-bp67acfmxazb5p****", … "s-bp67acfmxazb6p****"]
     *
     * @var string
     */
    public $snapshotIds;

    /**
     * @example testSnapshotName
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @example user
     *
     * @var string
     */
    public $snapshotType;

    /**
     * @example SnapshotSize
     *
     * @var string
     */
    public $sortKey;

    /**
     * @example desc
     *
     * @var string
     */
    public $sortType;

    /**
     * @example accomplished
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'filterKey'    => 'FilterKey',
        'filterValue'  => 'FilterValue',
        'fsId'         => 'FsId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'regionId'     => 'RegionId',
        'snapshotIds'  => 'SnapshotIds',
        'snapshotName' => 'SnapshotName',
        'snapshotType' => 'SnapshotType',
        'sortKey'      => 'SortKey',
        'sortType'     => 'SortType',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterKey) {
            $res['FilterKey'] = $this->filterKey;
        }
        if (null !== $this->filterValue) {
            $res['FilterValue'] = $this->filterValue;
        }
        if (null !== $this->fsId) {
            $res['FsId'] = $this->fsId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->snapshotIds) {
            $res['SnapshotIds'] = $this->snapshotIds;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->snapshotType) {
            $res['SnapshotType'] = $this->snapshotType;
        }
        if (null !== $this->sortKey) {
            $res['SortKey'] = $this->sortKey;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilterKey'])) {
            $model->filterKey = $map['FilterKey'];
        }
        if (isset($map['FilterValue'])) {
            $model->filterValue = $map['FilterValue'];
        }
        if (isset($map['FsId'])) {
            $model->fsId = $map['FsId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SnapshotIds'])) {
            $model->snapshotIds = $map['SnapshotIds'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['SnapshotType'])) {
            $model->snapshotType = $map['SnapshotType'];
        }
        if (isset($map['SortKey'])) {
            $model->sortKey = $map['SortKey'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
