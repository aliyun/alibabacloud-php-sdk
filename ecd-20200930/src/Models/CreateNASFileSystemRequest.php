<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateNASFileSystemRequest extends Model
{
    /**
     * @description Description of the NAS file system.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Whether the file system is encrypted. Uses KMS service-managed keys to encrypt the file system\\"s on-disk data. No decryption is required when reading and writing encrypted data. Possible values and their meanings:
     *
     * - 0: Not encrypted.
     * - 1: Encrypted using NAS-managed keys.
     *
     * Default value: 0
     *
     * @example 0
     *
     * @var string
     */
    public $encryptType;

    /**
     * @description Name of the NAS file system.
     * The file name must follow these rules:
     * - Length: 2 to 128 English or Chinese characters.
     * - Must start with an uppercase or lowercase letter or a Chinese character, cannot start with http:// or https://.
     * - Can include numbers, underscores (_), or hyphens (-).
     *
     * @example testNAS
     *
     * @var string
     */
    public $name;

    /**
     * @description Workspace ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description Region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Storage specification type of the NAS file system. Allowed values:
     *
     * - Capacity: Capacity type.
     * - Performance: Performance type.
     *
     * Default value: Capacity
     *
     * @example Capacity
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'description' => 'Description',
        'encryptType' => 'EncryptType',
        'name' => 'Name',
        'officeSiteId' => 'OfficeSiteId',
        'regionId' => 'RegionId',
        'storageType' => 'StorageType',
    ];

    public function validate() {}

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
