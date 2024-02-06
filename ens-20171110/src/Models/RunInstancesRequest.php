<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\RunInstancesRequest\dataDisk;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunInstancesRequest\systemDisk;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunInstancesRequest\tag;
use AlibabaCloud\Tea\Model;

class RunInstancesRequest extends Model
{
    /**
     * @description The number of instances that you want to create. Valid values: 1 to 100.
     *
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @description Specifies whether to enable auto-renewal. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * >  This parameter is not available when InstanceChargeType is set to PostPaid.
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description Specifies whether to use vouchers. Default values: true. Valid values:
     *
     * - false
     * @example true
     *
     * @var string
     */
    public $autoUseCoupon;

    /**
     * @description The billing cycle of computing resources of the instance. Only pay-as-you-go instances are supported. Valid values:
     *
     *   Hour
     *   Day
     *   Month
     *
     * @example Day
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @description The Internet service provider (ISP).
     *
     * >  This parameter is not available if ScheduleAreaLevel is set to Region and is required if ScheduleAreaLevel is set to other values.
     * @example telecom
     *
     * @var string
     */
    public $carrier;

    /**
     * @description The specification of the data disk.
     *
     * @var dataDisk[]
     */
    public $dataDisk;

    /**
     * @description The ID of the node.
     *
     * >  This parameter is required if ScheduleAreaLevel is set to Region and is not available if ScheduleAreaLevel is set to other values.
     * @example cn-foshan-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The name of the host.
     *
     * @example test-HostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the image. For ARM PCB-based server instances, leave this parameter empty. For other instances, this parameter is required.
     *
     * @example m-5si16wo6simkt267p8b7hcmy3
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The billing policy of the instance. Valid values:
     *
     *   **instance**: Bills are generated based on instances.
     *   If you do not specify this parameter, bills are generated based on users.
     *
     * @example instance
     *
     * @var string
     */
    public $instanceChargeStrategy;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **PrePaid**: subscription.
     *   **PostPaid**: pay-as-you-go.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The name of the instance. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with `http://` or `https://`. It can contain letters, digits, colons (:), underscores (\_), periods (.), and hyphens (-).
     *
     * The default value of this parameter is the value of the InstanceId parameter.
     * @example TestName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The instance type.
     *
     * @example ens.sn1.small
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The bandwidth billing method. Valid values:
     *
     *   **BandwidthByDay**: pay by daily peak bandwidth
     *   **95BandwidthByMonth**: pay by monthly 95th percentile bandwidth
     *
     * >  This parameter is required if you purchase an ENS instance for the first time. The value that you specified is used as the default value for subsequent purchases.
     * @example BandwidthByDay
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum public bandwidth. If the value of this parameter is greater than 0, a public IP address is assigned to the instance.
     *
     * @example 1
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description The type of IP address. Valid values:
     *
     *   **ipv4**: IPv4. This is the default value.
     *   **ipv6**: IPv6.
     *   **ipv4Andipv6**: IPv4 and IPv6.
     *
     * @example ipv4
     *
     * @var string
     */
    public $ipType;

    /**
     * @description The name of the key pair.
     *
     * >  You need to specify at least one of **Password**, **KeyPairName**, and **PasswordInherit**.
     * @example wx2-jumpserver
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The code of the region.
     *
     * >  This parameter is not available if ScheduleAreaLevel is set to Region and is required if ScheduleAreaLevel is set to other values.
     * @example 350000
     *
     * @var string
     */
    public $netDistrictCode;

    /**
     * @description The ID of the network.
     *
     * >  This parameter is available only if ScheduleAreaLevel is set to Region and cannot be configured if ScheduleAreaLevel is set to other values. Otherwise, an error occurs.
     * @example net-id
     *
     * @var string
     */
    public $netWorkId;

    /**
     * @description The password that is used to connect to the instance.
     *
     * >  You need to specify at least one of **Password**, **KeyPairName**, and **PasswordInherit**.
     * @example testPassword
     *
     * @var string
     */
    public $password;

    /**
     * @description Specifies whether to use the preset password of the image. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  You need to specify at least one of **Password**, **KeyPairName**, and **PasswordInherit**.
     * @example false
     *
     * @var bool
     */
    public $passwordInherit;

    /**
     * @description The unit of the subscription period.
     *
     *   If **PeriodUnit** is set to **Day**, **Period** can only be set to **3**.
     *   If **PeriodUnit** is **Month**, **Period** can be set to **1 to 9** or **12**.
     *
     * @example 1-9,12
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription duration. Valid values:
     *
     *   **Month** (default)
     *   **Day**
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The private IP address.
     *
     * >  This parameter is available only if ScheduleAreaLevel is set to Region and cannot be configured if ScheduleAreaLevel is set to other values. Otherwise, an error occurs. If you specify a private IP address, the number of instances must be 1. The private IP address takes effect only when the private IP address and the vSwitch ID are not empty.
     * @example 10.0.0.120
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description Specifies whether to enable public IP address identification. Valid values: true and false. Default value: false.
     *
     * @example true
     *
     * @var bool
     */
    public $publicIpIdentification;

    /**
     * @description The scheduling level. This parameter specifies area-level scheduling or node-level scheduling. Valid values:
     *
     *   **Big**: greater area
     *   **Middle**: province
     *   **Small**: city
     *   **Region**: node
     *
     * @example Region
     *
     * @var string
     */
    public $scheduleAreaLevel;

    /**
     * @description The scheduling price policy. Valid values:
     *
     *   **PriceHighPriority**: The high price prevails.
     *   **PriceLowPriority**: The low price prevails.
     *
     * @example PriceHighPriority
     *
     * @var string
     */
    public $schedulingPriceStrategy;

    /**
     * @description The scheduling policy of the taint. Valid values:
     *
     *   **Concentrate**
     *   **Disperse**
     *
     * >  If ScheduleAreaLevel is set to Region, set this parameter to **Concentrate**. If ScheduleAreaLevel is set to other values, set this parameter to Concentrate or Disperse based on your business requirements.
     * @example concentrate
     *
     * @var string
     */
    public $schedulingStrategy;

    /**
     * @description The ID of security group.
     *
     * @example sg-test
     *
     * @var string
     */
    public $securityId;

    /**
     * @description The specification of the system disk.
     *
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @description Specifies whether to append sequential suffixes to the hostname specified by the **HostName** parameter and to the instance name specified by the **InstanceName** parameter. The sequential suffixes range from 001 to 999.
     *
     * @example True
     *
     * @var bool
     */
    public $uniqueSuffix;

    /**
     * @description The custom data. The maximum data size is 16 KB. You can specify **UserData**. **UserData** must be Base64-encoded.
     *
     * @example ZWtest
     *
     * @var string
     */
    public $userData;

    /**
     * @description The ID of the vSwitch.
     *
     * >  This parameter is available only if ScheduleAreaLevel is set to Region and cannot be configured if ScheduleAreaLevel is set to other values. Otherwise, an error occurs.
     * @example vsw-5sagnw7m613oulalkd10nv0ob
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'amount'                  => 'Amount',
        'autoRenew'               => 'AutoRenew',
        'autoUseCoupon'           => 'AutoUseCoupon',
        'billingCycle'            => 'BillingCycle',
        'carrier'                 => 'Carrier',
        'dataDisk'                => 'DataDisk',
        'ensRegionId'             => 'EnsRegionId',
        'hostName'                => 'HostName',
        'imageId'                 => 'ImageId',
        'instanceChargeStrategy'  => 'InstanceChargeStrategy',
        'instanceChargeType'      => 'InstanceChargeType',
        'instanceName'            => 'InstanceName',
        'instanceType'            => 'InstanceType',
        'internetChargeType'      => 'InternetChargeType',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'ipType'                  => 'IpType',
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
        'systemDisk'              => 'SystemDisk',
        'tag'                     => 'Tag',
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
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->carrier) {
            $res['Carrier'] = $this->carrier;
        }
        if (null !== $this->dataDisk) {
            $res['DataDisk'] = [];
            if (null !== $this->dataDisk && \is_array($this->dataDisk)) {
                $n = 0;
                foreach ($this->dataDisk as $item) {
                    $res['DataDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return RunInstancesRequest
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
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n               = 0;
                foreach ($map['DataDisk'] as $item) {
                    $model->dataDisk[$n++] = null !== $item ? dataDisk::fromMap($item) : $item;
                }
            }
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
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
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
