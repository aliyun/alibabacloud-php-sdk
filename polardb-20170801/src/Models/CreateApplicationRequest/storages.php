<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\CreateApplicationRequest;

use AlibabaCloud\Dara\Model;

class storages extends Model
{
    /**
     * @var string
     */
    public $containerMountPath;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var string
     */
    public $storageCapacity;

    /**
     * @var string
     */
    public $storageEndpoint;

    /**
     * @var string
     */
    public $storageInstanceId;

    /**
     * @var string
     */
    public $storagePerformanceLevel;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'containerMountPath' => 'ContainerMountPath',
        'endpointId' => 'EndpointId',
        'mountPath' => 'MountPath',
        'storageCapacity' => 'StorageCapacity',
        'storageEndpoint' => 'StorageEndpoint',
        'storageInstanceId' => 'StorageInstanceId',
        'storagePerformanceLevel' => 'StoragePerformanceLevel',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerMountPath) {
            $res['ContainerMountPath'] = $this->containerMountPath;
        }

        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }

        if (null !== $this->storageCapacity) {
            $res['StorageCapacity'] = $this->storageCapacity;
        }

        if (null !== $this->storageEndpoint) {
            $res['StorageEndpoint'] = $this->storageEndpoint;
        }

        if (null !== $this->storageInstanceId) {
            $res['StorageInstanceId'] = $this->storageInstanceId;
        }

        if (null !== $this->storagePerformanceLevel) {
            $res['StoragePerformanceLevel'] = $this->storagePerformanceLevel;
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
        if (isset($map['ContainerMountPath'])) {
            $model->containerMountPath = $map['ContainerMountPath'];
        }

        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        if (isset($map['StorageCapacity'])) {
            $model->storageCapacity = $map['StorageCapacity'];
        }

        if (isset($map['StorageEndpoint'])) {
            $model->storageEndpoint = $map['StorageEndpoint'];
        }

        if (isset($map['StorageInstanceId'])) {
            $model->storageInstanceId = $map['StorageInstanceId'];
        }

        if (isset($map['StoragePerformanceLevel'])) {
            $model->storagePerformanceLevel = $map['StoragePerformanceLevel'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
