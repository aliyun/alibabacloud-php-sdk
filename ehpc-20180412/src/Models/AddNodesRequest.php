<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\AddNodesRequest\dataDisks;
use AlibabaCloud\Tea\Model;

class AddNodesRequest extends Model
{
    /**
     * @description Specifies whether to allocate a public IP address to the compute nodes. Valid values:
     *
     *   true: A public IP address is allocated to the compute nodes.
     *   false: A public IP address is not allocated to the compute nodes.
     *
     * Default value: false
     * @example false
     *
     * @var bool
     */
    public $allocatePublicAddress;

    /**
     * @description Specifies whether to enable auto-renewal. The parameter takes effect only when EcsChargeType is set to PrePaid. Valid values:
     *
     *   true: enables auto-renewal
     *   false: disables auto-renewal
     *
     * Default value: true
     * @example true
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description The auto-renewal period of the subscription compute nodes. The parameter takes effect when AutoRenew is set to true.
     *
     *   If PeriodUnit is set to Week, the valid values of the AutoRenewPeriod parameter are 1, 2, and 3.
     *   If PeriodUnit is set to Month, the valid values of the AutoRenewPeriod parameter are 1, 2, 3, 6, and 12.
     *
     * Default value: 1
     * @example 1
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that the value is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How do I ensure the idempotence of a request?](~~25693~~)
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the E-HPC cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Specifies whether the compute nodes support hyper-threading. Valid values:
     *
     *   true: Hyper-threading is supported.
     *   false: Hyper-threading is not supported.
     *
     * Default value: true
     * @example true
     *
     * @var bool
     */
    public $computeEnableHt;

    /**
     * @description The protection period of the preemptible instance. Unit: hours. Valid values: 0 and 1. A value of 0 indicates that the preemptible instance has no protection period.
     *
     * @example 1
     *
     * @var int
     */
    public $computeSpotDuration;

    /**
     * @description The interruption mode of the preemptible instance. Default value: Terminate. Set the value to Terminate, which indicates that the instance is released.
     *
     * @example Terminate
     *
     * @var string
     */
    public $computeSpotInterruptionBehavior;

    /**
     * @description The maximum hourly price of the compute nodes. The value can be accurate to three decimal places. The parameter only takes effect when SpotStrategy is set to SpotWithPriceLimit.
     *
     * @example 0.68
     *
     * @var string
     */
    public $computeSpotPriceLimit;

    /**
     * @description The preemption policy of the compute nodes. The parameter only takes effect when EcsChargeType is set to PostPaid. Valid values:
     *
     *   NoSpot: The compute nodes are pay-as-you-go instances.
     *   SpotWithPriceLimit: The instance is a preemptible instance that has a user-defined maximum hourly price.
     *   SpotAsPriceGo: The compute nodes are preemptible instances for which the market price at the time of purchase is used as the bid price.
     *
     * Default value: NoSpot
     * @example NoSpot
     *
     * @var string
     */
    public $computeSpotStrategy;

    /**
     * @description The number of compute nodes that you want to add. Valid values: 1 to 99. The value of this parameter is greater than that of the MinCount parameter.
     *
     *   If the number of available ECS instances is less than the value of the MinCount parameter, the compute nodes cannot be added.
     *   If the number of available ECS instances is greater than the value of the MinCount parameter and less than that of the Count parameter, the compute nodes are added based on the value of the MinCount parameter.
     *   If the number of available ECS instances is greater than the value of the Count parameter, the compute nodes are added based on the value of the Count parameter.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description The mode in which the compute nodes are added. Valid values:
     *
     *   manual: The compute nodes are manually added.
     *   autoscale: The compute nodes are automatically added.
     *
     * Default value: manual
     * @example manual
     *
     * @var string
     */
    public $createMode;

    /**
     * @var dataDisks[]
     */
    public $dataDisks;

    /**
     * @description The billing method of the compute nodes. Valid values:
     *
     *   PostPaid: pay-as-you-go
     *   PrePaid: subscription
     *
     * If the parameter is set to PrePaid, auto-renewal is enabled by default. After the E-HPC cluster is released, auto-renewal is disabled.
     * @example PostPaid
     *
     * @var string
     */
    public $ecsChargeType;

    /**
     * @description The prefix of the hostname. You can specify the parameter to manage the compute nodes in an efficient manner.
     *
     * @example compute
     *
     * @var string
     */
    public $hostNamePrefix;

    /**
     * @description The suffix of the hostname. You can specify the parameter to manage the compute nodes in an efficient manner.
     *
     * @example 01
     *
     * @var string
     */
    public $hostNameSuffix;

    /**
     * @description The ID of the image that is specified for the compute nodes. The image must meet the following requirements:
     *
     *   The operating system that is specified by the image must be the same as that of the existing cluster nodes. For example, if the operating system of the cluster nodes is CentOS, you can select only a CentOS image.
     *
     * > If you add nodes to a hybrid cloud cluster that supports multiple operating systems, you can select a Windows Server image or a CentOS image when the operating system of the cluster nodes is Windows.
     *
     *   The major version of the image specified for the compute nodes that you want to add is the same as that of the image of the cluster. For example, if the version of the cluster image is CentOS 7.x, the version of the image specified for the compute nodes must be CentOS 7.x.
     *
     * You can call the [ListImages](~~87213~~) and [ListCustomImages](~~87215~~) operations to query the image ID.
     * @example centos_7_06_64_20G_alibase_20190711.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The type of the image. Valid values:
     *
     *   system: public image
     *   self: custom image
     *   others: shared image
     *   marketplace: Alibaba Cloud Marketplace image
     *
     * Default value: system
     * @example system
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description The instance type of the compute nodes. The default value is the instance type that was specified when you created the E-HPC cluster or the last time when you added compute nodes.
     *
     * @example ecs.n1.tiny
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The billing method of the elastic IP address (EIP). Valid values:
     *
     *   PayByBandwidth: pay-by-bandwidth
     *   PayByTraffic: pay-by-traffic
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum inbound public bandwidth. Unit: Mbit/s. Valid values:
     *
     *   If the purchased outbound public bandwidth is less than or equal to 10 Mbit/s, the valid values of the parameter are 1 to 10 and the default value is 10.
     *   If the purchased outbound public bandwidth is greater than 10 Mbit/s, the valid values of this parameter are 1 to the amount of the outbound bandwidth that is purchased.
     *
     * @example 10
     *
     * @var int
     */
    public $internetMaxBandWidthIn;

    /**
     * @description The maximum outbound public bandwidth. Unit: Mbit/s. Valid values: 0 to 100.
     *
     * Default value: 0
     * @example 10
     *
     * @var int
     */
    public $internetMaxBandWidthOut;

    /**
     * @description The queue to which the compute nodes are added.
     *
     * @example workq
     *
     * @var string
     */
    public $jobQueue;

    /**
     * @description The minimum number of the compute nodes that you want to add. Valid values: 1 to 99. The value of the parameter is less than that of the Count parameter.
     *
     *   If the number of available ECS instances is less than the value of the MinCount parameter, the compute nodes cannot be added.
     *   If the number of available ECS instances is greater than the value of the MinCount parameter and less than that of the Count parameter, the compute nodes are added based on the value of the MinCount parameter.
     *   If the number of available ECS instances is greater than the value of the Count parameter, the compute nodes are added based on the value of the Count parameter.
     *
     * Default value: 1
     * @example 1
     *
     * @var int
     */
    public $minCount;

    /**
     * @example Standard
     *
     * @var string
     */
    public $networkInterfaceTrafficMode;

    /**
     * @description The duration of the subscription. The unit of the duration is specified by the PeriodUnit parameter. The parameter only takes effect when InstanceChargeType is set to PrePaid. Valid values:
     *
     *   If PeriodUnit is set to Week, the valid values of the Period parameter are 1, 2, 3, and 4.
     *   Valid values when PeriodUnit is set to Month: 1, 2, 3, 4, 5, 6, 7, 8, 9, 12, 24, 36, 48, and 60.
     *
     * Default value: 1
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription period. Valid values:
     *
     *   Week
     *   Month
     *
     * Default value: Month
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description Specifies whether to set the API operation as a synchronous operation. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false
     * @example false
     *
     * @var bool
     */
    public $sync;

    /**
     * @description The performance level of the ESSD that is used as the system disk. Valid values:
     *
     *   PL0: A single ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: A single ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: A single ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * For more information about ESSD performance parameters, see [ESSD](~~122389~~).
     * @example PL0
     *
     * @var string
     */
    public $systemDiskLevel;

    /**
     * @description The size of the system disk. Unit: GiB
     *
     * Default value: 40
     * @example 40
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The type of the system disk. Valid values:
     *
     *   cloud_efficiency: ultra disk.
     *   cloud_ssd: SSD.
     *   cloud_essd: ESSD.
     *   cloud: basic disk. Disks of this type are retired.
     *
     * Default value: cloud_efficiency
     * @example cloud_ssd
     *
     * @var string
     */
    public $systemDiskType;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp1lfcjbfb099rrjn****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the zone.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allocatePublicAddress'           => 'AllocatePublicAddress',
        'autoRenew'                       => 'AutoRenew',
        'autoRenewPeriod'                 => 'AutoRenewPeriod',
        'clientToken'                     => 'ClientToken',
        'clusterId'                       => 'ClusterId',
        'computeEnableHt'                 => 'ComputeEnableHt',
        'computeSpotDuration'             => 'ComputeSpotDuration',
        'computeSpotInterruptionBehavior' => 'ComputeSpotInterruptionBehavior',
        'computeSpotPriceLimit'           => 'ComputeSpotPriceLimit',
        'computeSpotStrategy'             => 'ComputeSpotStrategy',
        'count'                           => 'Count',
        'createMode'                      => 'CreateMode',
        'dataDisks'                       => 'DataDisks',
        'ecsChargeType'                   => 'EcsChargeType',
        'hostNamePrefix'                  => 'HostNamePrefix',
        'hostNameSuffix'                  => 'HostNameSuffix',
        'imageId'                         => 'ImageId',
        'imageOwnerAlias'                 => 'ImageOwnerAlias',
        'instanceType'                    => 'InstanceType',
        'internetChargeType'              => 'InternetChargeType',
        'internetMaxBandWidthIn'          => 'InternetMaxBandWidthIn',
        'internetMaxBandWidthOut'         => 'InternetMaxBandWidthOut',
        'jobQueue'                        => 'JobQueue',
        'minCount'                        => 'MinCount',
        'networkInterfaceTrafficMode'     => 'NetworkInterfaceTrafficMode',
        'period'                          => 'Period',
        'periodUnit'                      => 'PeriodUnit',
        'sync'                            => 'Sync',
        'systemDiskLevel'                 => 'SystemDiskLevel',
        'systemDiskSize'                  => 'SystemDiskSize',
        'systemDiskType'                  => 'SystemDiskType',
        'vSwitchId'                       => 'VSwitchId',
        'zoneId'                          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocatePublicAddress) {
            $res['AllocatePublicAddress'] = $this->allocatePublicAddress;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->computeEnableHt) {
            $res['ComputeEnableHt'] = $this->computeEnableHt;
        }
        if (null !== $this->computeSpotDuration) {
            $res['ComputeSpotDuration'] = $this->computeSpotDuration;
        }
        if (null !== $this->computeSpotInterruptionBehavior) {
            $res['ComputeSpotInterruptionBehavior'] = $this->computeSpotInterruptionBehavior;
        }
        if (null !== $this->computeSpotPriceLimit) {
            $res['ComputeSpotPriceLimit'] = $this->computeSpotPriceLimit;
        }
        if (null !== $this->computeSpotStrategy) {
            $res['ComputeSpotStrategy'] = $this->computeSpotStrategy;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->createMode) {
            $res['CreateMode'] = $this->createMode;
        }
        if (null !== $this->dataDisks) {
            $res['DataDisks'] = [];
            if (null !== $this->dataDisks && \is_array($this->dataDisks)) {
                $n = 0;
                foreach ($this->dataDisks as $item) {
                    $res['DataDisks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ecsChargeType) {
            $res['EcsChargeType'] = $this->ecsChargeType;
        }
        if (null !== $this->hostNamePrefix) {
            $res['HostNamePrefix'] = $this->hostNamePrefix;
        }
        if (null !== $this->hostNameSuffix) {
            $res['HostNameSuffix'] = $this->hostNameSuffix;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->internetMaxBandWidthIn) {
            $res['InternetMaxBandWidthIn'] = $this->internetMaxBandWidthIn;
        }
        if (null !== $this->internetMaxBandWidthOut) {
            $res['InternetMaxBandWidthOut'] = $this->internetMaxBandWidthOut;
        }
        if (null !== $this->jobQueue) {
            $res['JobQueue'] = $this->jobQueue;
        }
        if (null !== $this->minCount) {
            $res['MinCount'] = $this->minCount;
        }
        if (null !== $this->networkInterfaceTrafficMode) {
            $res['NetworkInterfaceTrafficMode'] = $this->networkInterfaceTrafficMode;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->sync) {
            $res['Sync'] = $this->sync;
        }
        if (null !== $this->systemDiskLevel) {
            $res['SystemDiskLevel'] = $this->systemDiskLevel;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->systemDiskType) {
            $res['SystemDiskType'] = $this->systemDiskType;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocatePublicAddress'])) {
            $model->allocatePublicAddress = $map['AllocatePublicAddress'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ComputeEnableHt'])) {
            $model->computeEnableHt = $map['ComputeEnableHt'];
        }
        if (isset($map['ComputeSpotDuration'])) {
            $model->computeSpotDuration = $map['ComputeSpotDuration'];
        }
        if (isset($map['ComputeSpotInterruptionBehavior'])) {
            $model->computeSpotInterruptionBehavior = $map['ComputeSpotInterruptionBehavior'];
        }
        if (isset($map['ComputeSpotPriceLimit'])) {
            $model->computeSpotPriceLimit = $map['ComputeSpotPriceLimit'];
        }
        if (isset($map['ComputeSpotStrategy'])) {
            $model->computeSpotStrategy = $map['ComputeSpotStrategy'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CreateMode'])) {
            $model->createMode = $map['CreateMode'];
        }
        if (isset($map['DataDisks'])) {
            if (!empty($map['DataDisks'])) {
                $model->dataDisks = [];
                $n                = 0;
                foreach ($map['DataDisks'] as $item) {
                    $model->dataDisks[$n++] = null !== $item ? dataDisks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EcsChargeType'])) {
            $model->ecsChargeType = $map['EcsChargeType'];
        }
        if (isset($map['HostNamePrefix'])) {
            $model->hostNamePrefix = $map['HostNamePrefix'];
        }
        if (isset($map['HostNameSuffix'])) {
            $model->hostNameSuffix = $map['HostNameSuffix'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['InternetMaxBandWidthIn'])) {
            $model->internetMaxBandWidthIn = $map['InternetMaxBandWidthIn'];
        }
        if (isset($map['InternetMaxBandWidthOut'])) {
            $model->internetMaxBandWidthOut = $map['InternetMaxBandWidthOut'];
        }
        if (isset($map['JobQueue'])) {
            $model->jobQueue = $map['JobQueue'];
        }
        if (isset($map['MinCount'])) {
            $model->minCount = $map['MinCount'];
        }
        if (isset($map['NetworkInterfaceTrafficMode'])) {
            $model->networkInterfaceTrafficMode = $map['NetworkInterfaceTrafficMode'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['Sync'])) {
            $model->sync = $map['Sync'];
        }
        if (isset($map['SystemDiskLevel'])) {
            $model->systemDiskLevel = $map['SystemDiskLevel'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['SystemDiskType'])) {
            $model->systemDiskType = $map['SystemDiskType'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
