<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeFileSystemsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeFileSystemsResponseBody\fileSystems\mountTargets;

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
    public $description;

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
        'capacity' => 'Capacity',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'ensRegionId' => 'EnsRegionId',
        'fileSystemId' => 'FileSystemId',
        'fileSystemName' => 'FileSystemName',
        'meteredSize' => 'MeteredSize',
        'mountTargets' => 'MountTargets',
        'payType' => 'PayType',
        'protocolType' => 'ProtocolType',
        'status' => 'Status',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
        if (\is_array($this->mountTargets)) {
            Model::validateArray($this->mountTargets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
            if (\is_array($this->mountTargets)) {
                $res['MountTargets'] = [];
                $n1 = 0;
                foreach ($this->mountTargets as $item1) {
                    $res['MountTargets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
                $n1 = 0;
                foreach ($map['MountTargets'] as $item1) {
                    $model->mountTargets[$n1] = mountTargets::fromMap($item1);
                    ++$n1;
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
