<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeFileSystemsResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeFileSystemsResponseBody\fileSystems\mountTargets;
use AlibabaCloud\Tea\Model;

class fileSystems extends Model
{
    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $fileSystemName;

    /**
     * @var int
     */
    public $meteredSize;

    /**
     * @var mountTargets[]
     */
    public $mountTargets;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $status;

    /**
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
