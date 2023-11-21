<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Tea\Model;

class DescribeHostEcsLevelInfoRequest extends Model
{
    /**
     * @description The database engine. Valid values:
     *
     *   **mysql**
     *   **mssql**
     *   **pgsql**
     *   **redis**
     *
     * @example mysql
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The image of the host. Valid values:
     *
     *   **WindowsWithMssqlEntAlwaysonLicense**: SQL Server Cluster Edition.
     *   **WindowsWithMssqlStdLicense**: SQL Server Standard Edition.
     *   **WindowsWithMssqlEntLicense**: SQL Server Enterprise Edition.
     *   **WindowsWithMssqlWebLicense**: SQL Server Web Edition.
     *   **AliLinux**: other images.
     *
     * @example AliLinux
     *
     * @var string
     */
    public $imageCategory;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID. For more information, see [Region IDs](~~198326~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The storage type. Valid values:
     *
     *   **local_ssd**: standard SSD.
     *   **cloud_essd**: PL1 enhanced SSD (ESSD).
     *   **cloud_essd2**: PL2 ESSD.
     *   **cloud_essd3**: PL3 ESSD.
     *
     * @example local_ssd
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The zone ID.
     *
     * @example ap-southeast-1a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'dbType'               => 'DbType',
        'imageCategory'        => 'ImageCategory',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'storageType'          => 'StorageType',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->imageCategory) {
            $res['ImageCategory'] = $this->imageCategory;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHostEcsLevelInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['ImageCategory'])) {
            $model->imageCategory = $map['ImageCategory'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
