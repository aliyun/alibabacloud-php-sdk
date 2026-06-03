<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeSyncInfoResponseBody;

use AlibabaCloud\Dara\Model;

class instanceInfo extends Model
{
    /**
     * @var int
     */
    public $accessType;

    /**
     * @var int
     */
    public $aliuid;

    /**
     * @var string
     */
    public $customName;

    /**
     * @var string
     */
    public $ecsEip;

    /**
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @var string
     */
    public $ecsInternetIp;

    /**
     * @var string
     */
    public $ecsIntranetIp;

    /**
     * @var string
     */
    public $ecsNetworkType;

    /**
     * @var string
     */
    public $ecsStatus;

    /**
     * @var string
     */
    public $ecsUuid;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $imageVersionName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $planCode;

    /**
     * @var string
     */
    public $planName;

    /**
     * @var int
     */
    public $planUpgradeStatus;

    /**
     * @var string
     */
    public $planUpgradeable;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var int
     */
    public $publicAccessControl;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var bool
     */
    public $renewable;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $upgradeStatus;

    /**
     * @var string
     */
    public $vendorCode;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $zoneNo;
    protected $_name = [
        'accessType' => 'AccessType',
        'aliuid' => 'Aliuid',
        'customName' => 'CustomName',
        'ecsEip' => 'EcsEip',
        'ecsInstanceId' => 'EcsInstanceId',
        'ecsInternetIp' => 'EcsInternetIp',
        'ecsIntranetIp' => 'EcsIntranetIp',
        'ecsNetworkType' => 'EcsNetworkType',
        'ecsStatus' => 'EcsStatus',
        'ecsUuid' => 'EcsUuid',
        'expireTime' => 'ExpireTime',
        'imageVersionName' => 'ImageVersionName',
        'instanceId' => 'InstanceId',
        'planCode' => 'PlanCode',
        'planName' => 'PlanName',
        'planUpgradeStatus' => 'PlanUpgradeStatus',
        'planUpgradeable' => 'PlanUpgradeable',
        'productCode' => 'ProductCode',
        'productName' => 'ProductName',
        'publicAccessControl' => 'PublicAccessControl',
        'regionName' => 'RegionName',
        'regionNo' => 'RegionNo',
        'renewable' => 'Renewable',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'upgradeStatus' => 'UpgradeStatus',
        'vendorCode' => 'VendorCode',
        'vswitchId' => 'VswitchId',
        'zoneNo' => 'ZoneNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }

        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }

        if (null !== $this->customName) {
            $res['CustomName'] = $this->customName;
        }

        if (null !== $this->ecsEip) {
            $res['EcsEip'] = $this->ecsEip;
        }

        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }

        if (null !== $this->ecsInternetIp) {
            $res['EcsInternetIp'] = $this->ecsInternetIp;
        }

        if (null !== $this->ecsIntranetIp) {
            $res['EcsIntranetIp'] = $this->ecsIntranetIp;
        }

        if (null !== $this->ecsNetworkType) {
            $res['EcsNetworkType'] = $this->ecsNetworkType;
        }

        if (null !== $this->ecsStatus) {
            $res['EcsStatus'] = $this->ecsStatus;
        }

        if (null !== $this->ecsUuid) {
            $res['EcsUuid'] = $this->ecsUuid;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->imageVersionName) {
            $res['ImageVersionName'] = $this->imageVersionName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->planCode) {
            $res['PlanCode'] = $this->planCode;
        }

        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }

        if (null !== $this->planUpgradeStatus) {
            $res['PlanUpgradeStatus'] = $this->planUpgradeStatus;
        }

        if (null !== $this->planUpgradeable) {
            $res['PlanUpgradeable'] = $this->planUpgradeable;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        if (null !== $this->publicAccessControl) {
            $res['PublicAccessControl'] = $this->publicAccessControl;
        }

        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->renewable) {
            $res['Renewable'] = $this->renewable;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->upgradeStatus) {
            $res['UpgradeStatus'] = $this->upgradeStatus;
        }

        if (null !== $this->vendorCode) {
            $res['VendorCode'] = $this->vendorCode;
        }

        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        if (null !== $this->zoneNo) {
            $res['ZoneNo'] = $this->zoneNo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }

        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }

        if (isset($map['CustomName'])) {
            $model->customName = $map['CustomName'];
        }

        if (isset($map['EcsEip'])) {
            $model->ecsEip = $map['EcsEip'];
        }

        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }

        if (isset($map['EcsInternetIp'])) {
            $model->ecsInternetIp = $map['EcsInternetIp'];
        }

        if (isset($map['EcsIntranetIp'])) {
            $model->ecsIntranetIp = $map['EcsIntranetIp'];
        }

        if (isset($map['EcsNetworkType'])) {
            $model->ecsNetworkType = $map['EcsNetworkType'];
        }

        if (isset($map['EcsStatus'])) {
            $model->ecsStatus = $map['EcsStatus'];
        }

        if (isset($map['EcsUuid'])) {
            $model->ecsUuid = $map['EcsUuid'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['ImageVersionName'])) {
            $model->imageVersionName = $map['ImageVersionName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PlanCode'])) {
            $model->planCode = $map['PlanCode'];
        }

        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }

        if (isset($map['PlanUpgradeStatus'])) {
            $model->planUpgradeStatus = $map['PlanUpgradeStatus'];
        }

        if (isset($map['PlanUpgradeable'])) {
            $model->planUpgradeable = $map['PlanUpgradeable'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        if (isset($map['PublicAccessControl'])) {
            $model->publicAccessControl = $map['PublicAccessControl'];
        }

        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['Renewable'])) {
            $model->renewable = $map['Renewable'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpgradeStatus'])) {
            $model->upgradeStatus = $map['UpgradeStatus'];
        }

        if (isset($map['VendorCode'])) {
            $model->vendorCode = $map['VendorCode'];
        }

        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        if (isset($map['ZoneNo'])) {
            $model->zoneNo = $map['ZoneNo'];
        }

        return $model;
    }
}
