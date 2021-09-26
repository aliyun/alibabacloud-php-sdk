<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeSyncInfoResponseBody;

use AlibabaCloud\Tea\Model;

class instanceInfo extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @var string
     */
    public $imageVersionName;

    /**
     * @var string
     */
    public $planCode;

    /**
     * @var string
     */
    public $ecsUuid;

    /**
     * @var int
     */
    public $accessType;

    /**
     * @var string
     */
    public $ecsStatus;

    /**
     * @var int
     */
    public $planUpgradeStatus;

    /**
     * @var string
     */
    public $zoneNo;

    /**
     * @var int
     */
    public $aliuid;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $ecsEip;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $ecsInternetIp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $renewable;

    /**
     * @var string
     */
    public $ecsIntranetIp;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var int
     */
    public $upgradeStatus;

    /**
     * @var string
     */
    public $planUpgradeable;

    /**
     * @var string
     */
    public $customName;

    /**
     * @var string
     */
    public $ecsNetworkType;

    /**
     * @var int
     */
    public $publicAccessControl;

    /**
     * @var string
     */
    public $vendorCode;

    /**
     * @var string
     */
    public $planName;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'status'              => 'Status',
        'vswitchId'           => 'VswitchId',
        'regionNo'            => 'RegionNo',
        'ecsInstanceId'       => 'EcsInstanceId',
        'imageVersionName'    => 'ImageVersionName',
        'planCode'            => 'PlanCode',
        'ecsUuid'             => 'EcsUuid',
        'accessType'          => 'AccessType',
        'ecsStatus'           => 'EcsStatus',
        'planUpgradeStatus'   => 'PlanUpgradeStatus',
        'zoneNo'              => 'ZoneNo',
        'aliuid'              => 'Aliuid',
        'productName'         => 'ProductName',
        'ecsEip'              => 'EcsEip',
        'expireTime'          => 'ExpireTime',
        'ecsInternetIp'       => 'EcsInternetIp',
        'instanceId'          => 'InstanceId',
        'renewable'           => 'Renewable',
        'ecsIntranetIp'       => 'EcsIntranetIp',
        'startTime'           => 'StartTime',
        'regionName'          => 'RegionName',
        'upgradeStatus'       => 'UpgradeStatus',
        'planUpgradeable'     => 'PlanUpgradeable',
        'customName'          => 'CustomName',
        'ecsNetworkType'      => 'EcsNetworkType',
        'publicAccessControl' => 'PublicAccessControl',
        'vendorCode'          => 'VendorCode',
        'planName'            => 'PlanName',
        'productCode'         => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }
        if (null !== $this->imageVersionName) {
            $res['ImageVersionName'] = $this->imageVersionName;
        }
        if (null !== $this->planCode) {
            $res['PlanCode'] = $this->planCode;
        }
        if (null !== $this->ecsUuid) {
            $res['EcsUuid'] = $this->ecsUuid;
        }
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->ecsStatus) {
            $res['EcsStatus'] = $this->ecsStatus;
        }
        if (null !== $this->planUpgradeStatus) {
            $res['PlanUpgradeStatus'] = $this->planUpgradeStatus;
        }
        if (null !== $this->zoneNo) {
            $res['ZoneNo'] = $this->zoneNo;
        }
        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->ecsEip) {
            $res['EcsEip'] = $this->ecsEip;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->ecsInternetIp) {
            $res['EcsInternetIp'] = $this->ecsInternetIp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->renewable) {
            $res['Renewable'] = $this->renewable;
        }
        if (null !== $this->ecsIntranetIp) {
            $res['EcsIntranetIp'] = $this->ecsIntranetIp;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->upgradeStatus) {
            $res['UpgradeStatus'] = $this->upgradeStatus;
        }
        if (null !== $this->planUpgradeable) {
            $res['PlanUpgradeable'] = $this->planUpgradeable;
        }
        if (null !== $this->customName) {
            $res['CustomName'] = $this->customName;
        }
        if (null !== $this->ecsNetworkType) {
            $res['EcsNetworkType'] = $this->ecsNetworkType;
        }
        if (null !== $this->publicAccessControl) {
            $res['PublicAccessControl'] = $this->publicAccessControl;
        }
        if (null !== $this->vendorCode) {
            $res['VendorCode'] = $this->vendorCode;
        }
        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }
        if (isset($map['ImageVersionName'])) {
            $model->imageVersionName = $map['ImageVersionName'];
        }
        if (isset($map['PlanCode'])) {
            $model->planCode = $map['PlanCode'];
        }
        if (isset($map['EcsUuid'])) {
            $model->ecsUuid = $map['EcsUuid'];
        }
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['EcsStatus'])) {
            $model->ecsStatus = $map['EcsStatus'];
        }
        if (isset($map['PlanUpgradeStatus'])) {
            $model->planUpgradeStatus = $map['PlanUpgradeStatus'];
        }
        if (isset($map['ZoneNo'])) {
            $model->zoneNo = $map['ZoneNo'];
        }
        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['EcsEip'])) {
            $model->ecsEip = $map['EcsEip'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['EcsInternetIp'])) {
            $model->ecsInternetIp = $map['EcsInternetIp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Renewable'])) {
            $model->renewable = $map['Renewable'];
        }
        if (isset($map['EcsIntranetIp'])) {
            $model->ecsIntranetIp = $map['EcsIntranetIp'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['UpgradeStatus'])) {
            $model->upgradeStatus = $map['UpgradeStatus'];
        }
        if (isset($map['PlanUpgradeable'])) {
            $model->planUpgradeable = $map['PlanUpgradeable'];
        }
        if (isset($map['CustomName'])) {
            $model->customName = $map['CustomName'];
        }
        if (isset($map['EcsNetworkType'])) {
            $model->ecsNetworkType = $map['EcsNetworkType'];
        }
        if (isset($map['PublicAccessControl'])) {
            $model->publicAccessControl = $map['PublicAccessControl'];
        }
        if (isset($map['VendorCode'])) {
            $model->vendorCode = $map['VendorCode'];
        }
        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
