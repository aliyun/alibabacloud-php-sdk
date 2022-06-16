<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class CreatePersistentVolumeClaimRequest extends Model
{
    /**
     * @var string
     */
    public $accessModes;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $capacity;

    /**
     * @var int
     */
    public $envId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'accessModes'  => 'AccessModes',
        'appId'        => 'AppId',
        'capacity'     => 'Capacity',
        'envId'        => 'EnvId',
        'name'         => 'Name',
        'storageClass' => 'StorageClass',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePersistentVolumeClaimRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessModes'])) {
            $model->accessModes = $map['AccessModes'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        return $model;
    }
}
