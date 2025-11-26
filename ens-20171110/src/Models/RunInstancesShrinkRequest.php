<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunInstancesShrinkRequest\tag;

class RunInstancesShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $autoReleaseTime;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $autoUseCoupon;

    /**
     * @var string
     */
    public $billingCycle;

    /**
     * @var string
     */
    public $carrier;

    /**
     * @var string
     */
    public $dataDiskShrink;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceChargeStrategy;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @var string
     */
    public $ipType;

    /**
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $launchTemplateId;

    /**
     * @var string
     */
    public $launchTemplateName;

    /**
     * @var int
     */
    public $launchTemplateVersion;

    /**
     * @var string
     */
    public $netDistrictCode;

    /**
     * @var string
     */
    public $netWorkId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var bool
     */
    public $passwordInherit;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var bool
     */
    public $publicIpIdentification;

    /**
     * @var string
     */
    public $scheduleAreaLevel;

    /**
     * @var string
     */
    public $schedulingPriceStrategy;

    /**
     * @var string
     */
    public $schedulingStrategy;

    /**
     * @var string
     */
    public $securityId;

    /**
     * @var int
     */
    public $spotDuration;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $systemDiskShrink;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var bool
     */
    public $uniqueSuffix;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'amount' => 'Amount',
        'autoReleaseTime' => 'AutoReleaseTime',
        'autoRenew' => 'AutoRenew',
        'autoUseCoupon' => 'AutoUseCoupon',
        'billingCycle' => 'BillingCycle',
        'carrier' => 'Carrier',
        'dataDiskShrink' => 'DataDisk',
        'deletionProtection' => 'DeletionProtection',
        'ensRegionId' => 'EnsRegionId',
        'hostName' => 'HostName',
        'imageId' => 'ImageId',
        'instanceChargeStrategy' => 'InstanceChargeStrategy',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceName' => 'InstanceName',
        'instanceType' => 'InstanceType',
        'internetChargeType' => 'InternetChargeType',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'ipType' => 'IpType',
        'ipv6AddressCount' => 'Ipv6AddressCount',
        'keyPairName' => 'KeyPairName',
        'launchTemplateId' => 'LaunchTemplateId',
        'launchTemplateName' => 'LaunchTemplateName',
        'launchTemplateVersion' => 'LaunchTemplateVersion',
        'netDistrictCode' => 'NetDistrictCode',
        'netWorkId' => 'NetWorkId',
        'password' => 'Password',
        'passwordInherit' => 'PasswordInherit',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'privateIpAddress' => 'PrivateIpAddress',
        'publicIpIdentification' => 'PublicIpIdentification',
        'scheduleAreaLevel' => 'ScheduleAreaLevel',
        'schedulingPriceStrategy' => 'SchedulingPriceStrategy',
        'schedulingStrategy' => 'SchedulingStrategy',
        'securityId' => 'SecurityId',
        'spotDuration' => 'SpotDuration',
        'spotStrategy' => 'SpotStrategy',
        'systemDiskShrink' => 'SystemDisk',
        'tag' => 'Tag',
        'uniqueSuffix' => 'UniqueSuffix',
        'userData' => 'UserData',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->autoReleaseTime) {
            $res['AutoReleaseTime'] = $this->autoReleaseTime;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }

        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }

        if (null !== $this->carrier) {
            $res['Carrier'] = $this->carrier;
        }

        if (null !== $this->dataDiskShrink) {
            $res['DataDisk'] = $this->dataDiskShrink;
        }

        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceChargeStrategy) {
            $res['InstanceChargeStrategy'] = $this->instanceChargeStrategy;
        }

        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }

        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }

        if (null !== $this->ipv6AddressCount) {
            $res['Ipv6AddressCount'] = $this->ipv6AddressCount;
        }

        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }

        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }

        if (null !== $this->launchTemplateName) {
            $res['LaunchTemplateName'] = $this->launchTemplateName;
        }

        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }

        if (null !== $this->netDistrictCode) {
            $res['NetDistrictCode'] = $this->netDistrictCode;
        }

        if (null !== $this->netWorkId) {
            $res['NetWorkId'] = $this->netWorkId;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }

        if (null !== $this->publicIpIdentification) {
            $res['PublicIpIdentification'] = $this->publicIpIdentification;
        }

        if (null !== $this->scheduleAreaLevel) {
            $res['ScheduleAreaLevel'] = $this->scheduleAreaLevel;
        }

        if (null !== $this->schedulingPriceStrategy) {
            $res['SchedulingPriceStrategy'] = $this->schedulingPriceStrategy;
        }

        if (null !== $this->schedulingStrategy) {
            $res['SchedulingStrategy'] = $this->schedulingStrategy;
        }

        if (null !== $this->securityId) {
            $res['SecurityId'] = $this->securityId;
        }

        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }

        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }

        if (null !== $this->systemDiskShrink) {
            $res['SystemDisk'] = $this->systemDiskShrink;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->uniqueSuffix) {
            $res['UniqueSuffix'] = $this->uniqueSuffix;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['AutoReleaseTime'])) {
            $model->autoReleaseTime = $map['AutoReleaseTime'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }

        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }

        if (isset($map['Carrier'])) {
            $model->carrier = $map['Carrier'];
        }

        if (isset($map['DataDisk'])) {
            $model->dataDiskShrink = $map['DataDisk'];
        }

        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceChargeStrategy'])) {
            $model->instanceChargeStrategy = $map['InstanceChargeStrategy'];
        }

        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }

        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }

        if (isset($map['Ipv6AddressCount'])) {
            $model->ipv6AddressCount = $map['Ipv6AddressCount'];
        }

        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }

        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }

        if (isset($map['LaunchTemplateName'])) {
            $model->launchTemplateName = $map['LaunchTemplateName'];
        }

        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }

        if (isset($map['NetDistrictCode'])) {
            $model->netDistrictCode = $map['NetDistrictCode'];
        }

        if (isset($map['NetWorkId'])) {
            $model->netWorkId = $map['NetWorkId'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        if (isset($map['PublicIpIdentification'])) {
            $model->publicIpIdentification = $map['PublicIpIdentification'];
        }

        if (isset($map['ScheduleAreaLevel'])) {
            $model->scheduleAreaLevel = $map['ScheduleAreaLevel'];
        }

        if (isset($map['SchedulingPriceStrategy'])) {
            $model->schedulingPriceStrategy = $map['SchedulingPriceStrategy'];
        }

        if (isset($map['SchedulingStrategy'])) {
            $model->schedulingStrategy = $map['SchedulingStrategy'];
        }

        if (isset($map['SecurityId'])) {
            $model->securityId = $map['SecurityId'];
        }

        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }

        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        if (isset($map['SystemDisk'])) {
            $model->systemDiskShrink = $map['SystemDisk'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UniqueSuffix'])) {
            $model->uniqueSuffix = $map['UniqueSuffix'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
