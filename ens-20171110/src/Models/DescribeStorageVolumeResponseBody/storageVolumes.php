<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeStorageVolumeResponseBody;

use AlibabaCloud\Tea\Model;

class storageVolumes extends Model
{
    /**
     * @example CHAP
     *
     * @var string
     */
    public $authProtocol;

    /**
     * @example 2024-03-14T09:35:32Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @example cn-shenzhen-3
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example 0
     *
     * @var int
     */
    public $isAuth;

    /**
     * @example 1
     *
     * @var int
     */
    public $isEnable;

    /**
     * @example available
     *
     * @var string
     */
    public $status;

    /**
     * @example sgw-***
     *
     * @var string
     */
    public $storageGatewayId;

    /**
     * @example d-***
     *
     * @var string
     */
    public $storageId;

    /**
     * @example sv-***
     *
     * @var string
     */
    public $storageVolumeId;

    /**
     * @example testVolumeName
     *
     * @var string
     */
    public $storageVolumeName;

    /**
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
