<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RunInstancesShrinkRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @example telecom
     *
     * @var string
     */
    public $carrier;

    /**
     * @var string
     */
    public $dataDiskShrink;

    /**
     * @example cn-foshan-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example test-HostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @example m-5si16wo6simkt267p8b7hcmy3
     *
     * @var string
     */
    public $imageId;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @example TestName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example ens.sn1.small
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example BandwidthByDay：日峰值带宽 95BandwidthByMonth：月95峰值带宽
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @example 1
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @example wx2-jumpserver
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @example 350000
     *
     * @var string
     */
    public $netDistrictCode;

    /**
     * @example net-id
     *
     * @var string
     */
    public $netWorkId;

    /**
     * @example testPassword
     *
     * @var string
     */
    public $password;

    /**
     * @var bool
     */
    public $passwordInherit;

    /**
     * @example 1-9，12
     *
     * @var int
     */
    public $period;

    /**
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @example 10.0.0.120
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @example true
     *
     * @var bool
     */
    public $publicIpIdentification;

    /**
     * @example Region
     *
     * @var string
     */
    public $scheduleAreaLevel;

    /**
     * @example PriceHighPriority：优先高价 PriceLowPriority：优先低价
     *
     * @var string
     */
    public $schedulingPriceStrategy;

    /**
     * @example concentrate
     *
     * @var string
     */
    public $schedulingStrategy;

    /**
     * @example sg-test
     *
     * @var string
     */
    public $securityId;

    /**
     * @var string
     */
    public $systemDiskShrink;

    /**
     * @example True
     *
     * @var bool
     */
    public $uniqueSuffix;

    /**
     * @example ZWtest
     *
     * @var string
     */
    public $userData;

    /**
     * @example vsw-5sagnw7m613oulalkd10nv0ob
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'amount'                  => 'Amount',
        'autoRenew'               => 'AutoRenew',
        'carrier'                 => 'Carrier',
        'dataDiskShrink'          => 'DataDisk',
        'ensRegionId'             => 'EnsRegionId',
        'hostName'                => 'HostName',
        'imageId'                 => 'ImageId',
        'instanceChargeType'      => 'InstanceChargeType',
        'instanceName'            => 'InstanceName',
        'instanceType'            => 'InstanceType',
        'internetChargeType'      => 'InternetChargeType',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'keyPairName'             => 'KeyPairName',
        'netDistrictCode'         => 'NetDistrictCode',
        'netWorkId'               => 'NetWorkId',
        'password'                => 'Password',
        'passwordInherit'         => 'PasswordInherit',
        'period'                  => 'Period',
        'periodUnit'              => 'PeriodUnit',
        'privateIpAddress'        => 'PrivateIpAddress',
        'publicIpIdentification'  => 'PublicIpIdentification',
        'scheduleAreaLevel'       => 'ScheduleAreaLevel',
        'schedulingPriceStrategy' => 'SchedulingPriceStrategy',
        'schedulingStrategy'      => 'SchedulingStrategy',
        'securityId'              => 'SecurityId',
        'systemDiskShrink'        => 'SystemDisk',
        'uniqueSuffix'            => 'UniqueSuffix',
        'userData'                => 'UserData',
        'vSwitchId'               => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->carrier) {
            $res['Carrier'] = $this->carrier;
        }
        if (null !== $this->dataDiskShrink) {
            $res['DataDisk'] = $this->dataDiskShrink;
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
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
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
        if (null !== $this->systemDiskShrink) {
            $res['SystemDisk'] = $this->systemDiskShrink;
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

    /**
     * @param array $map
     *
     * @return RunInstancesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['Carrier'])) {
            $model->carrier = $map['Carrier'];
        }
        if (isset($map['DataDisk'])) {
            $model->dataDiskShrink = $map['DataDisk'];
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
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
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
        if (isset($map['SystemDisk'])) {
            $model->systemDiskShrink = $map['SystemDisk'];
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
