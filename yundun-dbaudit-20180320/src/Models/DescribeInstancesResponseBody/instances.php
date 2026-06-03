<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ecsStatus;

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
    public $instanceStatus;

    /**
     * @var string
     */
    public $internetEndpoint;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var bool
     */
    public $legacy;

    /**
     * @var string
     */
    public $licenseCode;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var bool
     */
    public $operatable;

    /**
     * @var int
     */
    public $planUpgradeStatus;

    /**
     * @var bool
     */
    public $planUpgradeable;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $renewable;

    /**
     * @var string
     */
    public $seriesCode;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $upgradeStatus;

    /**
     * @var bool
     */
    public $upgradeable;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'description' => 'Description',
        'ecsStatus' => 'EcsStatus',
        'expireTime' => 'ExpireTime',
        'imageVersionName' => 'ImageVersionName',
        'instanceId' => 'InstanceId',
        'instanceStatus' => 'InstanceStatus',
        'internetEndpoint' => 'InternetEndpoint',
        'internetIp' => 'InternetIp',
        'intranetEndpoint' => 'IntranetEndpoint',
        'intranetIp' => 'IntranetIp',
        'legacy' => 'Legacy',
        'licenseCode' => 'LicenseCode',
        'networkType' => 'NetworkType',
        'operatable' => 'Operatable',
        'planUpgradeStatus' => 'PlanUpgradeStatus',
        'planUpgradeable' => 'PlanUpgradeable',
        'regionId' => 'RegionId',
        'renewable' => 'Renewable',
        'seriesCode' => 'SeriesCode',
        'startTime' => 'StartTime',
        'upgradeStatus' => 'UpgradeStatus',
        'upgradeable' => 'Upgradeable',
        'vpcId' => 'VpcId',
        'vswitchId' => 'VswitchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ecsStatus) {
            $res['EcsStatus'] = $this->ecsStatus;
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

        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->internetEndpoint) {
            $res['InternetEndpoint'] = $this->internetEndpoint;
        }

        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }

        if (null !== $this->intranetEndpoint) {
            $res['IntranetEndpoint'] = $this->intranetEndpoint;
        }

        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }

        if (null !== $this->legacy) {
            $res['Legacy'] = $this->legacy;
        }

        if (null !== $this->licenseCode) {
            $res['LicenseCode'] = $this->licenseCode;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->operatable) {
            $res['Operatable'] = $this->operatable;
        }

        if (null !== $this->planUpgradeStatus) {
            $res['PlanUpgradeStatus'] = $this->planUpgradeStatus;
        }

        if (null !== $this->planUpgradeable) {
            $res['PlanUpgradeable'] = $this->planUpgradeable;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->renewable) {
            $res['Renewable'] = $this->renewable;
        }

        if (null !== $this->seriesCode) {
            $res['SeriesCode'] = $this->seriesCode;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->upgradeStatus) {
            $res['UpgradeStatus'] = $this->upgradeStatus;
        }

        if (null !== $this->upgradeable) {
            $res['Upgradeable'] = $this->upgradeable;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EcsStatus'])) {
            $model->ecsStatus = $map['EcsStatus'];
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

        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        if (isset($map['InternetEndpoint'])) {
            $model->internetEndpoint = $map['InternetEndpoint'];
        }

        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }

        if (isset($map['IntranetEndpoint'])) {
            $model->intranetEndpoint = $map['IntranetEndpoint'];
        }

        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }

        if (isset($map['Legacy'])) {
            $model->legacy = $map['Legacy'];
        }

        if (isset($map['LicenseCode'])) {
            $model->licenseCode = $map['LicenseCode'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['Operatable'])) {
            $model->operatable = $map['Operatable'];
        }

        if (isset($map['PlanUpgradeStatus'])) {
            $model->planUpgradeStatus = $map['PlanUpgradeStatus'];
        }

        if (isset($map['PlanUpgradeable'])) {
            $model->planUpgradeable = $map['PlanUpgradeable'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Renewable'])) {
            $model->renewable = $map['Renewable'];
        }

        if (isset($map['SeriesCode'])) {
            $model->seriesCode = $map['SeriesCode'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UpgradeStatus'])) {
            $model->upgradeStatus = $map['UpgradeStatus'];
        }

        if (isset($map['Upgradeable'])) {
            $model->upgradeable = $map['Upgradeable'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
