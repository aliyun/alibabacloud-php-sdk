<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeStoragePackagesResponseBody\packages;

use AlibabaCloud\Tea\Model;

class package extends Model
{
    /**
     * @description The end time of the validity period for the storage plan.
     *
     * @example 2020-01-05T16:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The ID of the file system that is bound to the storage plan.
     *
     * @example 109c****66
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The ID of the storage plan.
     *
     * @example naspackage-@string(\\"*****\\", *)-@string(\\"*****\\", *)
     *
     * @var string
     */
    public $packageId;

    /**
     * @description The capacity of the storage plan.
     *
     * Unit: bytes.
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @description The start time of the validity period for the storage plan.
     *
     * @example 2019-12-05T01:40:56Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the storage plan.
     *
     * Valid values:
     *
     *   free: The storage plan is not bound to a file system. You can bind the storage plan to a file system of the same storage type.
     *   bound: The storage plan is bound to a file system.
     *
     * @example free
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the storage plan.
     *
     * Valid values:
     *
     *   Performance
     *   Capacity
     *
     * @example Capacity
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'expiredTime'  => 'ExpiredTime',
        'fileSystemId' => 'FileSystemId',
        'packageId'    => 'PackageId',
        'size'         => 'Size',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
        'storageType'  => 'StorageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return package
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
