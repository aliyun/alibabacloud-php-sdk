<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateAndBindNasFileSystemRequest extends Model
{
    /**
     * @description The description of the NAS file system.
     *
     * @example newDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the desktop group.
     *
     * This parameter is required.
     * @example dg-fh0vdzyh6rdc*****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description Specifies whether to encrypt data in the NAS file system. You can use keys that are hosted by Key Management Service (KMS) to encrypt data in a file system. When you read and write the encrypted data, the data is automatically decrypted. Valid values:
     *
     *   0: does not encrypt data in the NAS file system.
     *   1: encrypts data in the NAS file system by using a NAS-managed key. ` If you set  `FileSystemType`  to  `standard`  or  `extreme`, you can use a NAS-managed key to encrypt data in a NAS file system.`
     *   2: encrypts data in the NAS file system by using a KMS-managed key. `If` you set FileSystemType`  to  `extreme`, you can use a KMS-managed key to encrypt data in a NAS file system.`
     *
     * Default value: 0.
     * @example 0
     *
     * @var int
     */
    public $encryptType;

    /**
     * @description The list of users.
     *
     * @var string[]
     */
    public $endUserIds;

    /**
     * @description The name of the NAS file system.
     *
     * This parameter is required.
     * @example szy-asp-upm-test
     *
     * @var string
     */
    public $fileSystemName;

    /**
     * @description The ID of the workspace.
     *
     * This parameter is required.
     * @example cn-beijing+dir-15657*****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
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
     * This parameter is required.
     * @example Capacity
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'description'    => 'Description',
        'desktopGroupId' => 'DesktopGroupId',
        'encryptType'    => 'EncryptType',
        'endUserIds'     => 'EndUserIds',
        'fileSystemName' => 'FileSystemName',
        'officeSiteId'   => 'OfficeSiteId',
        'regionId'       => 'RegionId',
        'storageType'    => 'StorageType',
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
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->endUserIds) {
            $res['EndUserIds'] = $this->endUserIds;
        }
        if (null !== $this->fileSystemName) {
            $res['FileSystemName'] = $this->fileSystemName;
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
     * @return CreateAndBindNasFileSystemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = $map['EndUserIds'];
            }
        }
        if (isset($map['FileSystemName'])) {
            $model->fileSystemName = $map['FileSystemName'];
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
