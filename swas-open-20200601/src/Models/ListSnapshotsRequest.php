<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class ListSnapshotsRequest extends Model
{
    /**
     * @var string
     */
    public $acsProduct;

    /**
     * @description The disk ID.
     *
     * @example d-bp14wq0149cpp2xy****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The ID of the simple application server.
     *
     * @example 2ad1ae67295445f598017499dc****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The page number.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Maximum value: 100.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the simple application server that corresponds to the snapshots.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The snapshot IDs. The value can be a JSON array that consists of up to 100 snapshot IDs. Separate multiple snapshot IDs with commas (,).
     *
     * @example ["s-bp16oazlsold4dks****", "s-bp16oazlsold4abc****"]
     *
     * @var string
     */
    public $snapshotIds;

    /**
     * @description The type of the source disk. Valid values:
     *
     *   system: system disk.
     *   data: data disk.
     *
     * @example System
     *
     * @var string
     */
    public $sourceDiskType;
    protected $_name = [
        'acsProduct'     => 'AcsProduct',
        'diskId'         => 'DiskId',
        'instanceId'     => 'InstanceId',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'regionId'       => 'RegionId',
        'snapshotIds'    => 'SnapshotIds',
        'sourceDiskType' => 'SourceDiskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acsProduct) {
            $res['AcsProduct'] = $this->acsProduct;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->snapshotIds) {
            $res['SnapshotIds'] = $this->snapshotIds;
        }
        if (null !== $this->sourceDiskType) {
            $res['SourceDiskType'] = $this->sourceDiskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSnapshotsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcsProduct'])) {
            $model->acsProduct = $map['AcsProduct'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SnapshotIds'])) {
            $model->snapshotIds = $map['SnapshotIds'];
        }
        if (isset($map['SourceDiskType'])) {
            $model->sourceDiskType = $map['SourceDiskType'];
        }

        return $model;
    }
}
