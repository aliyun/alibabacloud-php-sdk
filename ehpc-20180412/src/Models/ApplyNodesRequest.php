<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ApplyNodesRequest\instanceTypeModel;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ApplyNodesRequest\tag;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ApplyNodesRequest\zoneInfos;
use AlibabaCloud\Tea\Model;

class ApplyNodesRequest extends Model
{
    /**
     * @description Specifies whether to allocate a public IP address to the compute nodes. Valid values:
     *
     *   true: A public IP address is allocated to the compute nodes.
     *   false: A public IP address is not allocated to the compute nodes.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $allocatePublicAddress;

    /**
     * @description The ID of the E-HPC cluster.
     *
     * You can call the [ListClusters](~~87126~~) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The maximum hourly price of the compute nodes. The value is a floating-point number that supports up to three decimal places. The parameter takes effect only when ComputeSpotStrategy is set to SpotWithPriceLimit.
     *
     * If ComputeSpotPriceLimit and InstanceTypeModel.N.MaxPrice are specified at the same time, compute nodes are created based on the smaller value of the two parameters.
     * @example 0.68
     *
     * @var float
     */
    public $computeSpotPriceLimit;

    /**
     * @description The preemption policy of the compute nodes. Valid values:
     *
     *   NoSpot: The compute nodes are pay-as-you-go instances.
     *   SpotWithPriceLimit: The compute nodes are preemptible instances that have a user-defined maximum hourly price.
     *   SpotAsPriceGo: The compute nodes are preemptible instances for which the market price at the time of purchase is used as the bid price.
     *
     * Default value: NoSpot.
     * @example NoSpot
     *
     * @var string
     */
    public $computeSpotStrategy;

    /**
     * @description The number of vCPUs. The parameter is required when the ResourceAmountType parameter is set to Cores.
     *
     * You can set vCPU and Memory to query node specifications. For example, you can query the available compute nodes that have 2 vCPUs and 16 GB of memory by setting vCPU to 2 and Memory to 16. You can also query compute nodes by node specification and zone. Query results are sorted by price. The nodes that have the lowest price are created.
     * @example 2
     *
     * @var int
     */
    public $cores;

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
     * @description The image ID of the compute nodes to be added. The parameter takes effect only when the TargetImageId parameter is not specified.
     *
     * >  If you add multiple compute nodes, the TargetImageId parameter takes effect only on the nodes for which the TargetImageId parameter is specified.
     * @example centos_7_06_64_20G_alibase_20190711.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The level of the instance family. The parameter takes effect only when Cores and Memory are specified. Valid values:
     *
     *   EntryLevel
     *   EnterpriseLevel
     *   CreditEntryLevel For more information, see [Overview of burstable instances](~~59977~~).
     *
     * Default value: EnterpriseLevel.
     * @example EntryLevel
     *
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @description The information about the preemptible instance.
     *
     * @var instanceTypeModel[]
     */
    public $instanceTypeModel;

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
     *   If the purchased outbound public bandwidth is greater than 10 Mbit/s, the valid values of this parameter are 1 to the amount of the outbound bandwidth that is purchased. The default value is the value of the InternetMaxBandWidthOut parameter.
     *
     * @example 10
     *
     * @var int
     */
    public $internetMaxBandWidthIn;

    /**
     * @description The maximum outbound public bandwidth. Unit: Mbit/s. Valid values: 0 to 100.
     *
     * Default value: 0.
     * @example 10
     *
     * @var int
     */
    public $internetMaxBandWidthOut;

    /**
     * @description The interval between two consecutive batches. Valid values: 60 to 600. Unit: seconds.
     *
     * Default value: 60.
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @description The queue to which the compute nodes are added.
     *
     * You can call the [ListQueues](~~92176~~) operation to query the queue name.
     * @example workq
     *
     * @var string
     */
    public $jobQueue;

    /**
     * @description The memory capacity. The parameter is required when the ResourceAmountType parameter is set to Cores. Unit: GB.
     *
     * You can set vCPU and Memory to query node specifications. For example, you can query the available compute nodes that have 2 vCPUs and 16 GB of memory by setting vCPU to 2 and Memory to 16. You can also query compute nodes by node specification and zone. Query results are sorted by price. The nodes that have the lowest price are created.
     * @example 16
     *
     * @var int
     */
    public $memory;

    /**
     * @description The application policy of the preemptible nodes. Valid values:
     *
     *   LowPriceResourcePlanning: Preemptible nodes are created based on the unit prices of vCPUs in ascending order. Preemptible nodes are created first when multiple preemptible instance types are specified.
     *   CapacityOptResourcePlanning: Preemptible nodes are created based on the prices and release rates in ascending order.
     *   CustomizedResourcePlanning: Nodes are added based on the predefined value of the ZoneIds.N parameter. Instances of a zone that has a higher priority are used first.
     *
     * @example LowPriceResourcePlanning
     *
     * @var string
     */
    public $priorityStrategy;

    /**
     * @description The type of the resource that you want to add. Valid values:
     *
     *   Instances: the ECS instances that are used as compute nodes
     *   Cores: vCPU and memory
     *
     * Default value: Instances.
     * @example Instances
     *
     * @var string
     */
    public $resourceAmountType;

    /**
     * @description The total number of batches to create nodes. Valid values: 1 to 10.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $round;

    /**
     * @description Specifies whether to strictly meet the requirements of the TargetCapacity parameter. The parameter takes effect only when StrictSatisfiedTargetCapacity is set to true. Valid values:
     *
     *   true: Check the inventory of the resources. Compute nodes are created based on the value of the TargetCapacity parameter only when the available resources are sufficient. Otherwise, no compute nodes are created.
     *   false: Check the inventory of the resources. Compute nodes are created only when the available resources are sufficient. However, some compute nodes may fail to be created because resources become insufficient after the inventory query.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $strictResourceProvision;

    /**
     * @description Specifies whether to meet the requirements of the TargetCapacity parameter. Valid values:
     *
     *   true: If the available resources are fewer than the resources that you want to add, no compute nodes are created and an error is returned. If the available resources are more than the resources that you want to add, the following cases may occur:
     *
     *   If StrictResourceProvision is set to true, check the inventory of the resources. Compute nodes are created based on the value of the TargetCapacity parameter only when the available resources are sufficient. Otherwise, no compute nodes are created.
     *   If StrictResourceProvision is set to false, check the inventory of the resources. Compute nodes are created only when the available resources are sufficient. However, some compute nodes may fail to be created because resources become insufficient after the inventory query.
     *
     *   false: If the available resources are insufficient, compute nodes are created based on the inventory of the resources.
     *
     * Default value: true.
     * @example true
     *
     * @var bool
     */
    public $strictSatisfiedTargetCapacity;

    /**
     * @description The performance level of the ESSD that you want to use as the system disk. Valid values:
     *
     *   PL0: A single ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: A single ESSD can deliver up to 50,000 IOPS of random read/write.
     *   PL2: A single ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * Default value: PL0. For more information, see [ESSDs](~~122389~~).
     * @example PL0
     *
     * @var string
     */
    public $systemDiskLevel;

    /**
     * @description The size of the system disk. Unit: GB.
     *
     * Default value: 40.
     * @example 40
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The type of the system disk. Valid values:
     *
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: SSD
     *   cloud_essd: enhanced SSD (ESSD)
     *   cloud: basic disk. Disks of this type are retired.
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $systemDiskType;

    /**
     * @description The tag to add to the instance.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The amount of the resource that you want to add. The specific number depends on the value of the ResourceAmountType parameter:
     *
     *   If ResourceAmountType is set to Instance, the value range of TargetCapacity is 1 to 200.
     *   If ResourceAmountType is set to Cores, the value range of TargetCapacity is 1 to 1,000.
     *
     * @example 20
     *
     * @var int
     */
    public $targetCapacity;

    /**
     * @description The details of the zones. You can specify up to 10 zones.
     *
     * @var zoneInfos[]
     */
    public $zoneInfos;
    protected $_name = [
        'allocatePublicAddress'         => 'AllocatePublicAddress',
        'clusterId'                     => 'ClusterId',
        'computeSpotPriceLimit'         => 'ComputeSpotPriceLimit',
        'computeSpotStrategy'           => 'ComputeSpotStrategy',
        'cores'                         => 'Cores',
        'hostNamePrefix'                => 'HostNamePrefix',
        'hostNameSuffix'                => 'HostNameSuffix',
        'imageId'                       => 'ImageId',
        'instanceFamilyLevel'           => 'InstanceFamilyLevel',
        'instanceTypeModel'             => 'InstanceTypeModel',
        'internetChargeType'            => 'InternetChargeType',
        'internetMaxBandWidthIn'        => 'InternetMaxBandWidthIn',
        'internetMaxBandWidthOut'       => 'InternetMaxBandWidthOut',
        'interval'                      => 'Interval',
        'jobQueue'                      => 'JobQueue',
        'memory'                        => 'Memory',
        'priorityStrategy'              => 'PriorityStrategy',
        'resourceAmountType'            => 'ResourceAmountType',
        'round'                         => 'Round',
        'strictResourceProvision'       => 'StrictResourceProvision',
        'strictSatisfiedTargetCapacity' => 'StrictSatisfiedTargetCapacity',
        'systemDiskLevel'               => 'SystemDiskLevel',
        'systemDiskSize'                => 'SystemDiskSize',
        'systemDiskType'                => 'SystemDiskType',
        'tag'                           => 'Tag',
        'targetCapacity'                => 'TargetCapacity',
        'zoneInfos'                     => 'ZoneInfos',
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
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->computeSpotPriceLimit) {
            $res['ComputeSpotPriceLimit'] = $this->computeSpotPriceLimit;
        }
        if (null !== $this->computeSpotStrategy) {
            $res['ComputeSpotStrategy'] = $this->computeSpotStrategy;
        }
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
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
        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }
        if (null !== $this->instanceTypeModel) {
            $res['InstanceTypeModel'] = [];
            if (null !== $this->instanceTypeModel && \is_array($this->instanceTypeModel)) {
                $n = 0;
                foreach ($this->instanceTypeModel as $item) {
                    $res['InstanceTypeModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->jobQueue) {
            $res['JobQueue'] = $this->jobQueue;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->priorityStrategy) {
            $res['PriorityStrategy'] = $this->priorityStrategy;
        }
        if (null !== $this->resourceAmountType) {
            $res['ResourceAmountType'] = $this->resourceAmountType;
        }
        if (null !== $this->round) {
            $res['Round'] = $this->round;
        }
        if (null !== $this->strictResourceProvision) {
            $res['StrictResourceProvision'] = $this->strictResourceProvision;
        }
        if (null !== $this->strictSatisfiedTargetCapacity) {
            $res['StrictSatisfiedTargetCapacity'] = $this->strictSatisfiedTargetCapacity;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targetCapacity) {
            $res['TargetCapacity'] = $this->targetCapacity;
        }
        if (null !== $this->zoneInfos) {
            $res['ZoneInfos'] = [];
            if (null !== $this->zoneInfos && \is_array($this->zoneInfos)) {
                $n = 0;
                foreach ($this->zoneInfos as $item) {
                    $res['ZoneInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocatePublicAddress'])) {
            $model->allocatePublicAddress = $map['AllocatePublicAddress'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ComputeSpotPriceLimit'])) {
            $model->computeSpotPriceLimit = $map['ComputeSpotPriceLimit'];
        }
        if (isset($map['ComputeSpotStrategy'])) {
            $model->computeSpotStrategy = $map['ComputeSpotStrategy'];
        }
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
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
        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }
        if (isset($map['InstanceTypeModel'])) {
            if (!empty($map['InstanceTypeModel'])) {
                $model->instanceTypeModel = [];
                $n                        = 0;
                foreach ($map['InstanceTypeModel'] as $item) {
                    $model->instanceTypeModel[$n++] = null !== $item ? instanceTypeModel::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['JobQueue'])) {
            $model->jobQueue = $map['JobQueue'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['PriorityStrategy'])) {
            $model->priorityStrategy = $map['PriorityStrategy'];
        }
        if (isset($map['ResourceAmountType'])) {
            $model->resourceAmountType = $map['ResourceAmountType'];
        }
        if (isset($map['Round'])) {
            $model->round = $map['Round'];
        }
        if (isset($map['StrictResourceProvision'])) {
            $model->strictResourceProvision = $map['StrictResourceProvision'];
        }
        if (isset($map['StrictSatisfiedTargetCapacity'])) {
            $model->strictSatisfiedTargetCapacity = $map['StrictSatisfiedTargetCapacity'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TargetCapacity'])) {
            $model->targetCapacity = $map['TargetCapacity'];
        }
        if (isset($map['ZoneInfos'])) {
            if (!empty($map['ZoneInfos'])) {
                $model->zoneInfos = [];
                $n                = 0;
                foreach ($map['ZoneInfos'] as $item) {
                    $model->zoneInfos[$n++] = null !== $item ? zoneInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
