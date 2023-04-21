<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateAndBindNasFileSystemRequest extends Model
{
    /**
     * @example newDescription
     *
     * @var string
     */
    public $description;

    /**
     * @example dg-fh0vdzyh6rdc*****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @example 0
     *
     * @var int
     */
    public $encryptType;

    /**
     * @var string[]
     */
    public $endUserIds;

    /**
     * @example szy-asp-upm-test
     *
     * @var string
     */
    public $fileSystemName;

    /**
     * @example cn-beijing+dir-15657*****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
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
