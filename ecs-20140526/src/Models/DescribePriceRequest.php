<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceRequest\dataDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceRequest\schedulerOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceRequest\systemDisk;
use AlibabaCloud\Tea\Model;

class DescribePriceRequest extends Model
{
    /**
     * @var dataDisk[]
     */
    public $dataDisk;

    /**
     * @var schedulerOptions
     */
    public $schedulerOptions;

    /**
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @description The number of ECS instances. You can specify this parameter when you want to query the prices of multiple instances that have specific specifications. Valid values: 1 to 1000.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @description The total number of times that the elasticity assurance can be applied. Set the value to Unlimited. This value indicates that the elasticity assurance can be applied an unlimited number of times within its effective duration.
     *
     * Default value: Unlimited.
     * @example Unlimited
     *
     * @var string
     */
    public $assuranceTimes;

    /**
     * @description The storage capacity. Unit: GiB.
     *
     * @example 1024
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The dedicated host type. You can call the [DescribeDedicatedHostTypes](~~134240~~) operation to query the most recent list of dedicated host types.
     *
     * @example ddh.c5
     *
     * @var string
     */
    public $dedicatedHostType;

    /**
     * @description The ID of the image. Images contain the runtime environment to load when instances start. You can call the [DescribeImages](~~25534~~) operation to query the available images. If you do not specify this parameter, the system queries the prices of Linux images.
     *
     * @example centos_7_05_64_20G_alibase_20181212.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The total number of instances for which to reserve the capacity of an instance type.
     *
     * Valid values: 1 to 1000.
     * @example 100
     *
     * @var int
     */
    public $instanceAmount;

    /**
     * @description The total number of vCPUs supported by the elasticity assurance. When you call this API operation, the system calculates the number of instances that an elasticity assurance must support based on your specified InstanceType value and rounds the calculated value up.
     *
     * > When you call this API operation to query the price of an elasticity assurance, you can only specify either InstanceCoreCpuCount or InstanceAmount.
     * @example 1024
     *
     * @var int
     */
    public $instanceCpuCoreCount;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   classic: classic network
     *   vpc: Virtual Private Cloud (VPC)
     *
     * Default value: vpc.
     * @example vpc
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The instance type of the instance. When the `ResourceType` parameter is set to `instance`, you must specify the InstanceType parameter. For more information, see [Instance families](~~25378~~) or call the [DescribeInstanceTypes](~~25620~~) operation to query the most recent instance type list.
     *
     * @example ecs.g6.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The instance type. You can select only a single instance type when you configure an elasticity assurance in unlimited mode.
     *
     * @example ecs.g6.xlarge
     *
     * @var string[]
     */
    public $instanceTypeList;

    /**
     * @description The billing method for network usage. Valid values:
     *
     *   PayByBandwidth: pay-by-bandwidth
     *   PayByTraffic: pay-by-traffic
     *
     * Default value: PayByTraffic.
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum outbound public bandwidth. Unit: Mbit/s. Valid values: 0 to 100.
     *
     * Default value: 0.
     * @example 5
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description Specifies whether the instance is I/O optimized. Valid values:
     *
     *   none: The instance is not I/O optimized.
     *   optimized: The instance is I/O optimized.
     *
     * If the instance type specified by the InstanceType parameter does not belong to [Generation I instance families](~~55263~~), the default value of IoOptimized is optimized.
     * @example optimized
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description The Internet service provider (ISP). Valid values:
     *
     *   cmcc: China Mobile
     *   telecom: China Telecom
     *   unicom: China Unicom
     *   multiCarrier: multi-line ISP
     *
     * @example cmcc
     *
     * @var string
     */
    public $isp;

    /**
     * @description The payment option of the reserved instance. Valid values:
     *
     *   No Upfront
     *   Partial Upfront
     *   All Upfront
     *
     * @example All Upfront
     *
     * @var string
     */
    public $offeringType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The billing duration of the ECS instance. Valid values:
     *
     *   Valid values when PriceUnit is set to Month: 1, 2, 3, 4, 5, 6, 7, 8, and 9.
     *   Valid values when PriceUnit is set to Year: 1, 2, 3, 4, and 5.
     *   Valid value when PriceUnit is set to Hour: 1.
     *   Valid values when PriceUnit is set to Week: 1, 2, 3, and 4.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The operating system of the image used by the instance. Valid values:
     *
     *   Windows: Windows Server operating systems
     *   Linux: Linux and UNIX-like operating systems
     *
     * @example Linux
     *
     * @var string
     */
    public $platform;

    /**
     * @description The pricing unit of the ECS resource. Default value: Hour. Valid values:
     *
     *   Month
     *   Year
     *   Hour
     *   Week
     *
     * @example Year
     *
     * @var string
     */
    public $priceUnit;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
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
     * @description The type of the resource. Valid values:
     *
     *   instance: queries the most recent prices of ECS instances. When this parameter is set to `instance`, you must specify the `InstanceType` parameter.
     *   disk: queries the most recent prices of cloud disks. When this parameter is set to `disk`, you must specify both the `DataDisk.1.Category` and `DataDisk.1.Size` parameters.
     *   bandwidth: queries the most recent prices for network usage.
     *   ddh: queries the most recent prices of dedicated hosts.
     *   ElasticityAssurance: queries the most recent prices of elasticity assurances. When this parameter is set to `ElasticityAssurance`, you must specify the `InstanceType` parameter.
     *   CapacityReservation: queries the most recent prices of capacity reservations. When this parameter is set to `CapacityReservation`, you must specify the `InstanceType` parameter.
     *
     * Default value: instance.
     * @example instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The scope of the reserved instance. Valid values:
     *
     *   Region: regional
     *   Zone: zonal
     *
     * Default value: Region.
     * @example Zone
     *
     * @var string
     */
    public $scope;

    /**
     * @description The protection period of the preemptible instance. Unit: hours. Valid values: 0, 1, 2, 3, 4, 5, and 6
     *
     *   The following protection periods are unavailable: 2, 3, 4, 5, and 6 hours. If you want to set this parameter to one of these values, [submit a ticket](https://smartservice.console.aliyun.com/service/create-ticket) and enter the following information: - The specifications and number of the resources. Example: ecs.g6.8xlarge 1000. - The region where the resources reside. Example: China (Beijing). - The period of time during which the resources are used every day. Example: 1:00 to 4: 00 every day.
     *   If this parameter is set to 0, no protection period is configured for the preemptible instance.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description The preemption policy for the pay-as-you-go instance. Valid values:
     *
     *   NoSpot: The instance is a regular pay-as-you-go instance.
     *   SpotWithPriceLimit: The instance is a preemptible instance with a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instance is a preemptible instance for which the market price is automatically used as the bidding price. The market price can be up to the pay-as-you-go price.
     *
     * > This parameter is valid only when the `PriceUnit` parameter is set to Hour and the `Period` parameter is set to 1. The default value of the `PriceUnit` parameter is `Hour` and the default value of the `Period` parameter is `1`. Therefore, you do not need to set the `PriceUnit` and `Period` parameters when you set the SpotStrategy parameter.
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The ID of the zone.
     *
     * > Prices of preemptible instances vary based on zones. When you query the price of a preemptible instance, specify the ZoneId parameter.
     * @example cn-hagzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'dataDisk'                => 'DataDisk',
        'schedulerOptions'        => 'SchedulerOptions',
        'systemDisk'              => 'SystemDisk',
        'amount'                  => 'Amount',
        'assuranceTimes'          => 'AssuranceTimes',
        'capacity'                => 'Capacity',
        'dedicatedHostType'       => 'DedicatedHostType',
        'imageId'                 => 'ImageId',
        'instanceAmount'          => 'InstanceAmount',
        'instanceCpuCoreCount'    => 'InstanceCpuCoreCount',
        'instanceNetworkType'     => 'InstanceNetworkType',
        'instanceType'            => 'InstanceType',
        'instanceTypeList'        => 'InstanceTypeList',
        'internetChargeType'      => 'InternetChargeType',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'ioOptimized'             => 'IoOptimized',
        'isp'                     => 'Isp',
        'offeringType'            => 'OfferingType',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'period'                  => 'Period',
        'platform'                => 'Platform',
        'priceUnit'               => 'PriceUnit',
        'regionId'                => 'RegionId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'resourceType'            => 'ResourceType',
        'scope'                   => 'Scope',
        'spotDuration'            => 'SpotDuration',
        'spotStrategy'            => 'SpotStrategy',
        'zoneId'                  => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDisk) {
            $res['DataDisk'] = [];
            if (null !== $this->dataDisk && \is_array($this->dataDisk)) {
                $n = 0;
                foreach ($this->dataDisk as $item) {
                    $res['DataDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->schedulerOptions) {
            $res['SchedulerOptions'] = null !== $this->schedulerOptions ? $this->schedulerOptions->toMap() : null;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->assuranceTimes) {
            $res['AssuranceTimes'] = $this->assuranceTimes;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->dedicatedHostType) {
            $res['DedicatedHostType'] = $this->dedicatedHostType;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceAmount) {
            $res['InstanceAmount'] = $this->instanceAmount;
        }
        if (null !== $this->instanceCpuCoreCount) {
            $res['InstanceCpuCoreCount'] = $this->instanceCpuCoreCount;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceTypeList) {
            $res['InstanceTypeList'] = $this->instanceTypeList;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->offeringType) {
            $res['OfferingType'] = $this->offeringType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
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
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n               = 0;
                foreach ($map['DataDisk'] as $item) {
                    $model->dataDisk[$n++] = null !== $item ? dataDisk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SchedulerOptions'])) {
            $model->schedulerOptions = schedulerOptions::fromMap($map['SchedulerOptions']);
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AssuranceTimes'])) {
            $model->assuranceTimes = $map['AssuranceTimes'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['DedicatedHostType'])) {
            $model->dedicatedHostType = $map['DedicatedHostType'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceAmount'])) {
            $model->instanceAmount = $map['InstanceAmount'];
        }
        if (isset($map['InstanceCpuCoreCount'])) {
            $model->instanceCpuCoreCount = $map['InstanceCpuCoreCount'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceTypeList'])) {
            if (!empty($map['InstanceTypeList'])) {
                $model->instanceTypeList = $map['InstanceTypeList'];
            }
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['OfferingType'])) {
            $model->offeringType = $map['OfferingType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
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
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
