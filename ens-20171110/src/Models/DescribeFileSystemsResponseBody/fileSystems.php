<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeFileSystemsResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeFileSystemsResponseBody\fileSystems\mountTargets;
use AlibabaCloud\Tea\Model;

class fileSystems extends Model
{
    /**
     * @description The capacity of the file system. Unit: MiB.
     *
     * @example 100000
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The time when the file system was created.
     *
     * @example 2022-08-31 12:00:00
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the region.
     *
     * @example cn-beijing-cmcc
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the file system.
     *
     * @example c50f8*****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The name of the file system.
     *
     * @example FileSystem1
     *
     * @var string
     */
    public $fileSystemName;

    /**
     * @description The storage usage of the file system. The value of this parameter is the maximum storage usage of the file system over the last hour. Unit: bytes.
     *
     * @example 102400
     *
     * @var int
     */
    public $meteredSize;

    /**
     * @description The information about mount targets.
     *
     * @var mountTargets[]
     */
    public $mountTargets;

    /**
     * @description The billing method. PostPaid is returned. PostPaid indicates the pay-as-you-go billing method.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The protocol type of the file system. Valid values:
     *
     *   NFS: Network File System (NFS)
     *   SMB: Server Message Block (SMB)
     *
     * @example NFS
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The status of the file system. Valid values:
     *
     *   pending: The file system is being created or modified.
     *   running: The file system is available. Before you create a mount target for the file system, make sure that the file system is in the running state.
     *   stopped: The file system is unavailable.
     *   extending: The file system is being scaled out.
     *   stopping: The file system is being disabled.
     *   deleting: The file system is being deleted.
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description The storage type. Valid values:
     *
     *   capacity: Capacity NAS file systems
     *   performance: Performance NAS file systems
     *
     * @example capacity
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'capacity'       => 'Capacity',
        'creationTime'   => 'CreationTime',
        'ensRegionId'    => 'EnsRegionId',
        'fileSystemId'   => 'FileSystemId',
        'fileSystemName' => 'FileSystemName',
        'meteredSize'    => 'MeteredSize',
        'mountTargets'   => 'MountTargets',
        'payType'        => 'PayType',
        'protocolType'   => 'ProtocolType',
        'status'         => 'Status',
        'storageType'    => 'StorageType',
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
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->fileSystemName) {
            $res['FileSystemName'] = $this->fileSystemName;
        }
        if (null !== $this->meteredSize) {
            $res['MeteredSize'] = $this->meteredSize;
        }
        if (null !== $this->mountTargets) {
            $res['MountTargets'] = [];
            if (null !== $this->mountTargets && \is_array($this->mountTargets)) {
                $n = 0;
                foreach ($this->mountTargets as $item) {
                    $res['MountTargets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
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
     * @return fileSystems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['FileSystemName'])) {
            $model->fileSystemName = $map['FileSystemName'];
        }
        if (isset($map['MeteredSize'])) {
            $model->meteredSize = $map['MeteredSize'];
        }
        if (isset($map['MountTargets'])) {
            if (!empty($map['MountTargets'])) {
                $model->mountTargets = [];
                $n                   = 0;
                foreach ($map['MountTargets'] as $item) {
                    $model->mountTargets[$n++] = null !== $item ? mountTargets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
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
