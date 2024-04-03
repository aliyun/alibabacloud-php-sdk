<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Tea\Model;

class CreateDedicatedHostShrinkRequest extends Model
{
    /**
     * @description Specifies whether to enable the auto-renewal feature. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  If you do not specify this parameter, the default value **false** is used.
     * @example false
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCzSBZH8****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $clusterAlias;

    /**
     * @var string
     */
    public $clusterServicesShrink;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @description The dedicated cluster ID. You can log on to the ApsaraDB for MyBase console and go to the **Dedicated Clusters** page to view the dedicated cluster ID.
     *
     * >  The database engine of the host is the same as the database engine of the cluster.
     * @example dhg-6w7q18iwt5jo****
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description The instance type of the host. For information about the host instance types supported by different database engines, see [Instance types of hosts](~~206343~~).
     *
     * @example rds.g6.4xlarge
     *
     * @var string
     */
    public $hostClass;

    /**
     * @description The disk storage of the host. This parameter takes effect only for dedicated clusters that run Tair. Unit: GB. Valid values:
     *
     *   512
     *   1024
     *   1536
     *   2048
     *   2560
     *   3072
     *   3584
     *   4096
     *
     * @example 512
     *
     * @var string
     */
    public $hostStorage;

    /**
     * @description The disk type of the host. This parameter takes effect only for dedicated clusters that run Tair. Valid values:
     *
     *   **cloud_essd**: PL1 enhanced SSD (ESSD).
     *   **cloud_essd0**: PL0 ESSD.
     *
     * @example cloud_essd0
     *
     * @var string
     */
    public $hostStorageType;

    /**
     * @description The image of the host. Valid values:
     *
     *   **WindowsWithMssqlEntAlwaysonLicense**: SQL Server Cluster Edition.
     *   **WindowsWithMssqlStdLicense**: SQL Server Standard Edition.
     *   **WindowsWithMssqlEntLicense**: SQL Server Enterprise Edition.
     *   **WindowsWithMssqlWebLicense**: SQL Server Web Edition.
     *   **AliLinux**: other images.
     *
     * >  When you create a host that runs SQL Server, you must specify a host image.
     * @example AliLinux
     *
     * @var string
     */
    public $imageCategory;

    /**
     * @var string
     */
    public $myBaseEcsClassShrink;

    /**
     * @description The password of the host. You can specify a password only when you create a host in a **Proprietary MyBase** dedicated cluster.
     *
     *   The password must be 8 to 30 characters in length.
     *   The password must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     *   The password can contain the following special characters: () \ \` ~ ! @ # $ % ^ & \* - \_ + = | { } \[ ] : ; \" < > , . ? /
     *
     * @example Test123456
     *
     * @var string
     */
    public $osPassword;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The billing method of the host. Set the value to **prepaid**.
     *
     * @example prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The unit of the subscription duration. Valid values:
     *
     *   **Year**
     *   **Month**
     *
     * @example Month
     *
     * @var string
     */
    public $period;

    /**
     * @description The [region ID](~~198326~~) of the dedicated cluster.
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
     * @description The subscription duration of the host.
     *
     *   Valid values when **Period** is set to **Year**: **1** to **5**.****
     *   Valid values when **Period** is set to **Month**: **1** to **9**.
     *
     * @example 1
     *
     * @var string
     */
    public $usedTime;

    /**
     * @description The vSwitch ID. You can log on to the Virtual Private Cloud (VPC) console to view the vSwitch ID.
     *
     * @example vsw-bp133c8ifzxd3iv6q****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcID;

    /**
     * @description The zone ID. You can call the [DescribeRegions](~~214103~~) operation to query the most recent zone list.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenew'             => 'AutoRenew',
        'clientToken'           => 'ClientToken',
        'clusterAlias'          => 'ClusterAlias',
        'clusterServicesShrink' => 'ClusterServices',
        'clusterType'           => 'ClusterType',
        'dedicatedHostGroupId'  => 'DedicatedHostGroupId',
        'hostClass'             => 'HostClass',
        'hostStorage'           => 'HostStorage',
        'hostStorageType'       => 'HostStorageType',
        'imageCategory'         => 'ImageCategory',
        'myBaseEcsClassShrink'  => 'MyBaseEcsClass',
        'osPassword'            => 'OsPassword',
        'ownerId'               => 'OwnerId',
        'payType'               => 'PayType',
        'period'                => 'Period',
        'regionId'              => 'RegionId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'usedTime'              => 'UsedTime',
        'vSwitchId'             => 'VSwitchId',
        'vpcID'                 => 'VpcID',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clusterAlias) {
            $res['ClusterAlias'] = $this->clusterAlias;
        }
        if (null !== $this->clusterServicesShrink) {
            $res['ClusterServices'] = $this->clusterServicesShrink;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->hostClass) {
            $res['HostClass'] = $this->hostClass;
        }
        if (null !== $this->hostStorage) {
            $res['HostStorage'] = $this->hostStorage;
        }
        if (null !== $this->hostStorageType) {
            $res['HostStorageType'] = $this->hostStorageType;
        }
        if (null !== $this->imageCategory) {
            $res['ImageCategory'] = $this->imageCategory;
        }
        if (null !== $this->myBaseEcsClassShrink) {
            $res['MyBaseEcsClass'] = $this->myBaseEcsClassShrink;
        }
        if (null !== $this->osPassword) {
            $res['OsPassword'] = $this->osPassword;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
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
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcID) {
            $res['VpcID'] = $this->vpcID;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDedicatedHostShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClusterAlias'])) {
            $model->clusterAlias = $map['ClusterAlias'];
        }
        if (isset($map['ClusterServices'])) {
            $model->clusterServicesShrink = $map['ClusterServices'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['HostClass'])) {
            $model->hostClass = $map['HostClass'];
        }
        if (isset($map['HostStorage'])) {
            $model->hostStorage = $map['HostStorage'];
        }
        if (isset($map['HostStorageType'])) {
            $model->hostStorageType = $map['HostStorageType'];
        }
        if (isset($map['ImageCategory'])) {
            $model->imageCategory = $map['ImageCategory'];
        }
        if (isset($map['MyBaseEcsClass'])) {
            $model->myBaseEcsClassShrink = $map['MyBaseEcsClass'];
        }
        if (isset($map['OsPassword'])) {
            $model->osPassword = $map['OsPassword'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
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
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcID'])) {
            $model->vpcID = $map['VpcID'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
