<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostGroupsRequest extends Model
{
    /**
     * @description The dedicated cluster ID. You can log on to the ApsaraDB for MyBase console and go to the Dedicated Clusters page to view the dedicated cluster ID.
     *
     *   If you leave this parameter empty, the information about all hosts within the region is returned.
     *   If you specify a dedicated cluster ID, the information about all hosts in the dedicated cluster within the region is returned.
     *
     * @example dhg-872yt76ann7e****
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description The database engine used to filter hosts. Valid values:
     *
     *   MySQL
     *   SQL Server
     *   PosgreSQL
     *
     *   Redis
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The image of the host. Valid values:
     *
     *   **WindowsWithMssqlEntAlwaysonLicense**: SQL
     *
     * Server Cluster Edition.
     *
     *   **WindowsWithMssqlStdLicense**: SQL
     *
     * Server Standard Edition.
     *
     *   **WindowsWithMssqlEntLicense**: SQL
     *
     * Server Enterprise Edition.
     *
     *   **WindowsWithMssqlWebLicense**: SQL
     *
     * Server Web Edition.
     *
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
    protected $_name = [
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'engine'               => 'Engine',
        'imageCategory'        => 'ImageCategory',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedHostGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
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

        return $model;
    }
}
