<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $imageVersionName;

    /**
     * @var string
     */
    public $seriesCode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ecsStatus;

    /**
     * @var bool
     */
    public $operatable;

    /**
     * @var int
     */
    public $planUpgradeStatus;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var bool
     */
    public $upgradeable;

    /**
     * @var bool
     */
    public $legacy;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $internetEndpoint;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var bool
     */
    public $renewable;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $intranetEndpoint;

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
    public $planUpgradeable;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $licenseCode;
    protected $_name = [
        'vpcId'             => 'VpcId',
        'vswitchId'         => 'VswitchId',
        'internetIp'        => 'InternetIp',
        'networkType'       => 'NetworkType',
        'imageVersionName'  => 'ImageVersionName',
        'seriesCode'        => 'SeriesCode',
        'description'       => 'Description',
        'ecsStatus'         => 'EcsStatus',
        'operatable'        => 'Operatable',
        'planUpgradeStatus' => 'PlanUpgradeStatus',
        'expireTime'        => 'ExpireTime',
        'upgradeable'       => 'Upgradeable',
        'legacy'            => 'Legacy',
        'instanceId'        => 'InstanceId',
        'internetEndpoint'  => 'InternetEndpoint',
        'intranetIp'        => 'IntranetIp',
        'renewable'         => 'Renewable',
        'regionId'          => 'RegionId',
        'intranetEndpoint'  => 'IntranetEndpoint',
        'startTime'         => 'StartTime',
        'upgradeStatus'     => 'UpgradeStatus',
        'planUpgradeable'   => 'PlanUpgradeable',
        'instanceStatus'    => 'InstanceStatus',
        'licenseCode'       => 'LicenseCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->imageVersionName) {
            $res['ImageVersionName'] = $this->imageVersionName;
        }
        if (null !== $this->seriesCode) {
            $res['SeriesCode'] = $this->seriesCode;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ecsStatus) {
            $res['EcsStatus'] = $this->ecsStatus;
        }
        if (null !== $this->operatable) {
            $res['Operatable'] = $this->operatable;
        }
        if (null !== $this->planUpgradeStatus) {
            $res['PlanUpgradeStatus'] = $this->planUpgradeStatus;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->upgradeable) {
            $res['Upgradeable'] = $this->upgradeable;
        }
        if (null !== $this->legacy) {
            $res['Legacy'] = $this->legacy;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->internetEndpoint) {
            $res['InternetEndpoint'] = $this->internetEndpoint;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->renewable) {
            $res['Renewable'] = $this->renewable;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->intranetEndpoint) {
            $res['IntranetEndpoint'] = $this->intranetEndpoint;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->upgradeStatus) {
            $res['UpgradeStatus'] = $this->upgradeStatus;
        }
        if (null !== $this->planUpgradeable) {
            $res['PlanUpgradeable'] = $this->planUpgradeable;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->licenseCode) {
            $res['LicenseCode'] = $this->licenseCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['ImageVersionName'])) {
            $model->imageVersionName = $map['ImageVersionName'];
        }
        if (isset($map['SeriesCode'])) {
            $model->seriesCode = $map['SeriesCode'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EcsStatus'])) {
            $model->ecsStatus = $map['EcsStatus'];
        }
        if (isset($map['Operatable'])) {
            $model->operatable = $map['Operatable'];
        }
        if (isset($map['PlanUpgradeStatus'])) {
            $model->planUpgradeStatus = $map['PlanUpgradeStatus'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Upgradeable'])) {
            $model->upgradeable = $map['Upgradeable'];
        }
        if (isset($map['Legacy'])) {
            $model->legacy = $map['Legacy'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InternetEndpoint'])) {
            $model->internetEndpoint = $map['InternetEndpoint'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Renewable'])) {
            $model->renewable = $map['Renewable'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['IntranetEndpoint'])) {
            $model->intranetEndpoint = $map['IntranetEndpoint'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UpgradeStatus'])) {
            $model->upgradeStatus = $map['UpgradeStatus'];
        }
        if (isset($map['PlanUpgradeable'])) {
            $model->planUpgradeable = $map['PlanUpgradeable'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['LicenseCode'])) {
            $model->licenseCode = $map['LicenseCode'];
        }

        return $model;
    }
}
