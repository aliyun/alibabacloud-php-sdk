<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class CreatePersistentVolumeRequest extends Model
{
    /**
     * @var string
     */
    public $accessModes;

    /**
     * @var string
     */
    public $capacity;

    /**
     * @var string
     */
    public $clusterInstanceId;

    /**
     * @var string
     */
    public $mountDir;

    /**
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @var string
     */
    public $NFSVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $reclaimPolicy;

    /**
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'accessModes'       => 'AccessModes',
        'capacity'          => 'Capacity',
        'clusterInstanceId' => 'ClusterInstanceId',
        'mountDir'          => 'MountDir',
        'mountTargetDomain' => 'MountTargetDomain',
        'NFSVersion'        => 'NFSVersion',
        'name'              => 'Name',
        'reclaimPolicy'     => 'ReclaimPolicy',
        'storageClass'      => 'StorageClass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessModes) {
            $res['AccessModes'] = $this->accessModes;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->clusterInstanceId) {
            $res['ClusterInstanceId'] = $this->clusterInstanceId;
        }
        if (null !== $this->mountDir) {
            $res['MountDir'] = $this->mountDir;
        }
        if (null !== $this->mountTargetDomain) {
            $res['MountTargetDomain'] = $this->mountTargetDomain;
        }
        if (null !== $this->NFSVersion) {
            $res['NFSVersion'] = $this->NFSVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->reclaimPolicy) {
            $res['ReclaimPolicy'] = $this->reclaimPolicy;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePersistentVolumeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessModes'])) {
            $model->accessModes = $map['AccessModes'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['ClusterInstanceId'])) {
            $model->clusterInstanceId = $map['ClusterInstanceId'];
        }
        if (isset($map['MountDir'])) {
            $model->mountDir = $map['MountDir'];
        }
        if (isset($map['MountTargetDomain'])) {
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }
        if (isset($map['NFSVersion'])) {
            $model->NFSVersion = $map['NFSVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ReclaimPolicy'])) {
            $model->reclaimPolicy = $map['ReclaimPolicy'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        return $model;
    }
}
