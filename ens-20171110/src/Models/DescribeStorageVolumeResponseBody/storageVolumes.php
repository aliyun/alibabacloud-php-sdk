<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeStorageVolumeResponseBody;

use AlibabaCloud\Dara\Model;

class storageVolumes extends Model
{
    /**
     * @var string
     */
    public $authProtocol;

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
     * @var int
     */
    public $isAuth;

    /**
     * @var int
     */
    public $isEnable;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageGatewayId;

    /**
     * @var string
     */
    public $storageId;

    /**
     * @var string
     */
    public $storageVolumeId;

    /**
     * @var string
     */
    public $storageVolumeName;

    /**
     * @var string
     */
    public $targetName;
    protected $_name = [
        'authProtocol' => 'AuthProtocol',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'ensRegionId' => 'EnsRegionId',
        'isAuth' => 'IsAuth',
        'isEnable' => 'IsEnable',
        'status' => 'Status',
        'storageGatewayId' => 'StorageGatewayId',
        'storageId' => 'StorageId',
        'storageVolumeId' => 'StorageVolumeId',
        'storageVolumeName' => 'StorageVolumeName',
        'targetName' => 'TargetName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authProtocol) {
            $res['AuthProtocol'] = $this->authProtocol;
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

        if (null !== $this->isAuth) {
            $res['IsAuth'] = $this->isAuth;
        }

        if (null !== $this->isEnable) {
            $res['IsEnable'] = $this->isEnable;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageGatewayId) {
            $res['StorageGatewayId'] = $this->storageGatewayId;
        }

        if (null !== $this->storageId) {
            $res['StorageId'] = $this->storageId;
        }

        if (null !== $this->storageVolumeId) {
            $res['StorageVolumeId'] = $this->storageVolumeId;
        }

        if (null !== $this->storageVolumeName) {
            $res['StorageVolumeName'] = $this->storageVolumeName;
        }

        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
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
        if (isset($map['AuthProtocol'])) {
            $model->authProtocol = $map['AuthProtocol'];
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

        if (isset($map['IsAuth'])) {
            $model->isAuth = $map['IsAuth'];
        }

        if (isset($map['IsEnable'])) {
            $model->isEnable = $map['IsEnable'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageGatewayId'])) {
            $model->storageGatewayId = $map['StorageGatewayId'];
        }

        if (isset($map['StorageId'])) {
            $model->storageId = $map['StorageId'];
        }

        if (isset($map['StorageVolumeId'])) {
            $model->storageVolumeId = $map['StorageVolumeId'];
        }

        if (isset($map['StorageVolumeName'])) {
            $model->storageVolumeName = $map['StorageVolumeName'];
        }

        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }

        return $model;
    }
}
