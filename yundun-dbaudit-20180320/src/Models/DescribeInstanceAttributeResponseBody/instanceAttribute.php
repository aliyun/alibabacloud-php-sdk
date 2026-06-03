<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeInstanceAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class instanceAttribute extends Model
{
    /**
     * @var int
     */
    public $accessType;

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
     * @var string[]
     */
    public $privateWhiteList;

    /**
     * @var int
     */
    public $publicAccessControl;

    /**
     * @var string[]
     */
    public $publicWhiteList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $renewable;

    /**
     * @var string[]
     */
    public $securityGroupIds;

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
        'accessType' => 'AccessType',
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
        'licenseCode' => 'LicenseCode',
        'networkType' => 'NetworkType',
        'operatable' => 'Operatable',
        'planUpgradeStatus' => 'PlanUpgradeStatus',
        'planUpgradeable' => 'PlanUpgradeable',
        'privateWhiteList' => 'PrivateWhiteList',
        'publicAccessControl' => 'PublicAccessControl',
        'publicWhiteList' => 'PublicWhiteList',
        'regionId' => 'RegionId',
        'renewable' => 'Renewable',
        'securityGroupIds' => 'SecurityGroupIds',
        'seriesCode' => 'SeriesCode',
        'startTime' => 'StartTime',
        'upgradeStatus' => 'UpgradeStatus',
        'upgradeable' => 'Upgradeable',
        'vpcId' => 'VpcId',
        'vswitchId' => 'VswitchId',
    ];

    public function validate()
    {
        if (\is_array($this->privateWhiteList)) {
            Model::validateArray($this->privateWhiteList);
        }
        if (\is_array($this->publicWhiteList)) {
            Model::validateArray($this->publicWhiteList);
        }
        if (\is_array($this->securityGroupIds)) {
            Model::validateArray($this->securityGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }

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

        if (null !== $this->privateWhiteList) {
            if (\is_array($this->privateWhiteList)) {
                $res['PrivateWhiteList'] = [];
                $n1 = 0;
                foreach ($this->privateWhiteList as $item1) {
                    $res['PrivateWhiteList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->publicAccessControl) {
            $res['PublicAccessControl'] = $this->publicAccessControl;
        }

        if (null !== $this->publicWhiteList) {
            if (\is_array($this->publicWhiteList)) {
                $res['PublicWhiteList'] = [];
                $n1 = 0;
                foreach ($this->publicWhiteList as $item1) {
                    $res['PublicWhiteList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->renewable) {
            $res['Renewable'] = $this->renewable;
        }

        if (null !== $this->securityGroupIds) {
            if (\is_array($this->securityGroupIds)) {
                $res['SecurityGroupIds'] = [];
                $n1 = 0;
                foreach ($this->securityGroupIds as $item1) {
                    $res['SecurityGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }

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

        if (isset($map['PrivateWhiteList'])) {
            if (!empty($map['PrivateWhiteList'])) {
                $model->privateWhiteList = [];
                $n1 = 0;
                foreach ($map['PrivateWhiteList'] as $item1) {
                    $model->privateWhiteList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PublicAccessControl'])) {
            $model->publicAccessControl = $map['PublicAccessControl'];
        }

        if (isset($map['PublicWhiteList'])) {
            if (!empty($map['PublicWhiteList'])) {
                $model->publicWhiteList = [];
                $n1 = 0;
                foreach ($map['PublicWhiteList'] as $item1) {
                    $model->publicWhiteList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Renewable'])) {
            $model->renewable = $map['Renewable'];
        }

        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = [];
                $n1 = 0;
                foreach ($map['SecurityGroupIds'] as $item1) {
                    $model->securityGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
