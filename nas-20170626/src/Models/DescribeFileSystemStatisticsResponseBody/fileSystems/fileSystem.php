<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponseBody\fileSystems;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponseBody\fileSystems\fileSystem\packages;
use AlibabaCloud\Tea\Model;

class fileSystem extends Model
{
    /**
     * @description The capacity of the file system.
     *
     * Unit: GiB.
     * @example 1
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The billing method.
     *
     * Valid values:
     *
     *   Subscription: The subscription billing method is used.
     *   PayAsYouGo: The pay-as-you-go billing method is used.
     *   Package: A storage plan is attached to the file system.
     *
     * @example PayAsYouGo
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The time when the NAS file system was created.
     *
     * @example 2017-05-27T15:43:06CST
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the file system.
     *
     * @example 31a8e48eda
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the file system expires.
     *
     * @example 2017-08-27T15:43:06CST
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The ID of the file system.
     *
     * @example 109c04****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The type of the file system.
     *
     * Valid values:
     *
     *   standard: General-purpose NAS file system
     *   extreme: Extreme NAS file system
     *   cpfs: CPFS file system
     *
     * @example standard
     *
     * @var string
     */
    public $fileSystemType;

    /**
     * @description The storage usage of the Infrequent Access (IA) storage medium.
     *
     * Unit: bytes.
     * @example 362832
     *
     * @var int
     */
    public $meteredIASize;

    /**
     * @description The storage usage of the file system.
     *
     * The value of this parameter is the maximum storage usage of the file system over the last hour. Unit: bytes.
     * @example 1611661312
     *
     * @var int
     */
    public $meteredSize;

    /**
     * @description The information about storage plans.
     *
     * @var packages
     */
    public $packages;

    /**
     * @description The protocol type of the file system.
     *
     * Valid values:
     *
     *   NFS: Network File System (NFS)
     *   SMB: Server Message Block (SMB)
     *   cpfs: the protocol type supported by the CPFS file system
     *
     * @example NFS
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the file system.
     *
     * This parameter is returned for Extreme NAS file systems and Cloud Parallel File Storage (CPFS) file systems. Valid values:
     *
     *   Pending: The file system is being created or modified.
     *   Running: The file system is available. Before you create a mount target for the file system, make sure that the file system is in the Running state.
     *   Stopped: The file system is unavailable.
     *   Extending: The file system is being scaled out.
     *   Stopping: The file system is being disabled.
     *   Deleting: The file system is being deleted.
     *
     * @example Pending
     *
     * @var string
     */
    public $status;

    /**
     * @description The storage type.
     *
     * Valid values:
     *
     *   Valid values for General-purpose NAS file systems: Capacity and Performance.
     *   Valid values for Extreme NAS file systems: standard and advance.
     *   Valid values for CPFS file systems: advance\_100 (100 MB/s/TiB baseline) and advance\_200 (200 MB/s/TiB baseline).
     *
     * @example Performance
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'capacity'       => 'Capacity',
        'chargeType'     => 'ChargeType',
        'createTime'     => 'CreateTime',
        'description'    => 'Description',
        'expiredTime'    => 'ExpiredTime',
        'fileSystemId'   => 'FileSystemId',
        'fileSystemType' => 'FileSystemType',
        'meteredIASize'  => 'MeteredIASize',
        'meteredSize'    => 'MeteredSize',
        'packages'       => 'Packages',
        'protocolType'   => 'ProtocolType',
        'regionId'       => 'RegionId',
        'status'         => 'Status',
        'storageType'    => 'StorageType',
        'zoneId'         => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->meteredIASize) {
            $res['MeteredIASize'] = $this->meteredIASize;
        }
        if (null !== $this->meteredSize) {
            $res['MeteredSize'] = $this->meteredSize;
        }
        if (null !== $this->packages) {
            $res['Packages'] = null !== $this->packages ? $this->packages->toMap() : null;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileSystem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['MeteredIASize'])) {
            $model->meteredIASize = $map['MeteredIASize'];
        }
        if (isset($map['MeteredSize'])) {
            $model->meteredSize = $map['MeteredSize'];
        }
        if (isset($map['Packages'])) {
            $model->packages = packages::fromMap($map['Packages']);
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
