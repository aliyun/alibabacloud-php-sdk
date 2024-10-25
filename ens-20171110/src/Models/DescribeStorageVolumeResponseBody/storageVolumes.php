<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeStorageVolumeResponseBody;

use AlibabaCloud\Tea\Model;

class storageVolumes extends Model
{
    /**
     * @description The authentication protocol. The value is set to **CHAP**.
     *
     * @example CHAP
     *
     * @var string
     */
    public $authProtocol;

    /**
     * @description The time when the volume was created. The time is displayed in UTC.
     *
     * @example 2024-03-14T09:35:32Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the volume.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the node.
     *
     * @example cn-shenzhen-3
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description Indicates whether authentication is enabled. Valid values:
     *
     *   **1**: Authentication is enabled.
     *   **0** (default): Authentication is disabled.
     *
     * @example 0
     *
     * @var int
     */
    public $isAuth;

    /**
     * @description Indicates whether the volume is enabled. Valid values:
     *
     *   **1** (default): The volume is enabled.
     *   **0**: The volume is disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $isEnable;

    /**
     * @description The status of the volume. Valid values:
     *
     *   creating
     *   available
     *   deleting
     *   deleted
     *
     * @example available
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the storage gateway.
     *
     * @example sgw-***
     *
     * @var string
     */
    public $storageGatewayId;

    /**
     * @description The ID of the storage medium.
     *
     * @example d-***
     *
     * @var string
     */
    public $storageId;

    /**
     * @description The ID of the volume.
     *
     * @example sv-***
     *
     * @var string
     */
    public $storageVolumeId;

    /**
     * @description The name of the volume.
     *
     * @example testVolumeName
     *
     * @var string
     */
    public $storageVolumeName;

    /**
     * @description The destination of the volume.
     *
     * @example iqn.*.*.*:*
     *
     * @var string
     */
    public $targetName;
    protected $_name = [
        'authProtocol'      => 'AuthProtocol',
        'creationTime'      => 'CreationTime',
        'description'       => 'Description',
        'ensRegionId'       => 'EnsRegionId',
        'isAuth'            => 'IsAuth',
        'isEnable'          => 'IsEnable',
        'status'            => 'Status',
        'storageGatewayId'  => 'StorageGatewayId',
        'storageId'         => 'StorageId',
        'storageVolumeId'   => 'StorageVolumeId',
        'storageVolumeName' => 'StorageVolumeName',
        'targetName'        => 'TargetName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return storageVolumes
     */
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
