<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeStoragePackagesResponseBody\packages;

use AlibabaCloud\Tea\Model;

class package extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $packageId;
    protected $_name = [
        'status'       => 'Status',
        'fileSystemId' => 'FileSystemId',
        'startTime'    => 'StartTime',
        'expiredTime'  => 'ExpiredTime',
        'size'         => 'Size',
        'storageType'  => 'StorageType',
        'packageId'    => 'PackageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }

        return $model;
    }
}
