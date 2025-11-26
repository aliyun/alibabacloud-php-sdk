<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeSnapshotsRequest extends Model
{
    /**
     * @var string
     */
    public $diskId;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $ensRegionIds;

    /**
     * @var string
     */
    public $instanceId;

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
    public $snapshotName;
    protected $_name = [
        'diskId' => 'DiskId',
        'ensRegionId' => 'EnsRegionId',
        'ensRegionIds' => 'EnsRegionIds',
        'instanceId' => 'InstanceId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'snapshotId' => 'SnapshotId',
        'snapshotName' => 'SnapshotName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->ensRegionIds) {
            $res['EnsRegionIds'] = $this->ensRegionIds;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
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
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['EnsRegionIds'])) {
            $model->ensRegionIds = $map['EnsRegionIds'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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

        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }

        return $model;
    }
}
