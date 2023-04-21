<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateNASFileSystemRequest extends Model
{
    /**
     * @description The description of the NAS file system.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to encrypt the data in the NAS file system. You can use keys that are managed by Key Management Service (KMS) to encrypt the data that is stored in a NAS file system. When you read and write the encrypted data, the data is automatically decrypted. Valid values:
     *
     *   0: does not encrypt the data in the NAS file system.
     *   1: encrypts the data in the NAS file system by using NAS-managed keys.
     *
     * Default value: 0.
     * @example 0
     *
     * @var string
     */
    public $encryptType;

    /**
     * @example testNAS
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The storage type of the NAS file system. Valid values:
     *
     *   Capacity
     *   Performance
     *
     * Default value: Capacity.
     * @example Capacity
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'description'  => 'Description',
        'encryptType'  => 'EncryptType',
        'name'         => 'Name',
        'officeSiteId' => 'OfficeSiteId',
        'regionId'     => 'RegionId',
        'storageType'  => 'StorageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNASFileSystemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
