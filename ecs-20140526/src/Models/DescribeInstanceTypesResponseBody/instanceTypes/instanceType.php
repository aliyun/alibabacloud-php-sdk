<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\enhancedNetwork;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\networkCards;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\supportedBootModes;
use AlibabaCloud\Tea\Model;

class instanceType extends Model
{
    /**
     * @description The baseline vCPU computing performance (overall baseline performance of all vCPUs) per t5 or t6 burstable instance.
     *
     * @example 4
     *
     * @var int
     */
    public $baselineCredit;

    /**
     * @description The CPU architecture. Valid values:
     *
     *   X86
     *   ARM
     *
     * @example X86
     *
     * @var string
     */
    public $cpuArchitecture;

    /**
     * @description The number of vCPUs.
     *
     * @example 4
     *
     * @var int
     */
    public $cpuCoreCount;

    /**
     * @description The CPU base frequency. Unit: GHz.
     *
     * @example 2.7
     *
     * @var float
     */
    public $cpuSpeedFrequency;

    /**
     * @description The CPU turbo frequency. Unit: GHz.
     *
     * @example 3.5
     *
     * @var float
     */
    public $cpuTurboFrequency;

    /**
     * @description The maximum number of cloud disks per instance.
     *
     * @example 17
     *
     * @var int
     */
    public $diskQuantity;

    /**
     * @description This parameter is unavailable for public use.
     *
     * @var enhancedNetwork
     */
    public $enhancedNetwork;

    /**
     * @description The maximum number of IPv6 addresses per ENI.
     *
     * @example 1
     *
     * @var int
     */
    public $eniIpv6AddressQuantity;

    /**
     * @description The maximum number of IPv4 addresses per ENI.
     *
     * @example 10
     *
     * @var int
     */
    public $eniPrivateIpAddressQuantity;

    /**
     * @description The maximum number of ENIs per instance.
     *
     * @example 3
     *
     * @var int
     */
    public $eniQuantity;

    /**
     * @description The maximum number of ENIs, including primary, secondary, and trunk ENIs.
     *
     * >  This parameter is in invitational preview and is not publicly available.
     * @example 0
     *
     * @var int
     */
    public $eniTotalQuantity;

    /**
     * @description Indicates whether trunk ENIs are supported.
     *
     * >  This parameter is in invitational preview and is not publicly available.
     * @example true
     *
     * @var bool
     */
    public $eniTrunkSupported;

    /**
     * @description The number of ERIs.
     *
     * >  This parameter is in invitational preview and is not publicly available.
     * @example 0
     *
     * @var int
     */
    public $eriQuantity;

    /**
     * @description The number of GPUs.
     *
     * @example 0
     *
     * @var int
     */
    public $GPUAmount;

    /**
     * @description The amount of GPU memory per GPU. Unit: GiB
     *
     * @example 32
     *
     * @var float
     */
    public $GPUMemorySize;

    /**
     * @description The GPU model.
     *
     * @example NVIDIA V100
     *
     * @var string
     */
    public $GPUSpec;

    /**
     * @description The initial vCPU credits per t5 or t6 burstable instance.
     *
     * @example 120
     *
     * @var int
     */
    public $initialCredit;

    /**
     * @description The maximum inbound internal bandwidth. Unit: Kbit/s.
     *
     * @example 1024000
     *
     * @var int
     */
    public $instanceBandwidthRx;

    /**
     * @description The maximum outbound internal bandwidth. Unit: Kbit/s.
     *
     * @example 1024000
     *
     * @var int
     */
    public $instanceBandwidthTx;

    /**
     * @description The category of the instance type. Valid values:
     *
     *   General-purpose
     *   Compute-optimized
     *   Memory-optimized
     *   Big data
     *   Local SSDs
     *   High Clock Speed
     *   Enhanced
     *   Shared
     *   Compute-optimized with GPU
     *   Visual Compute-optimized
     *   Heterogeneous Service
     *   Compute-optimized with FPGA
     *   Compute-optimized with NPU
     *   ECS Bare Metal
     *   Super Computing Cluster
     *   High Performance Compute
     *
     * @example Big data
     *
     * @var string
     */
    public $instanceCategory;

    /**
     * @description The level of the instance family. Valid values:
     *
     *   EntryLevel: entry level (shared).
     *   EnterpriseLevel: enterprise level.
     *   CreditEntryLevel: credit-based entry level. For more information, see [Overview](https://help.aliyun.com/document_detail/59977.html).
     *
     * @example EnterpriseLevel
     *
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @description The inbound packet forwarding rate over the internal network. Unit: pps.
     *
     * @example 500000
     *
     * @var int
     */
    public $instancePpsRx;

    /**
     * @description The outbound packet forwarding rate over the internal network. Unit: pps.
     *
     * @example 500000
     *
     * @var int
     */
    public $instancePpsTx;

    /**
     * @description The instance family.
     *
     * @example ecs.g6
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description The ID of the instance type.
     *
     * @example ecs.g6.large
     *
     * @var string
     */
    public $instanceTypeId;

    /**
     * @description The number of local disks per instance.
     *
     * @example 1
     *
     * @var int
     */
    public $localStorageAmount;

    /**
     * @description The capacity of each local disk. Unit: GiB
     *
     * @example 5000
     *
     * @var int
     */
    public $localStorageCapacity;

    /**
     * @description The category of local disks. For more information, see [Local disks](https://help.aliyun.com/document_detail/63138.html). Valid values:
     *
     *   local_hdd_pro: local SATA HDDs, which are attached to d1ne or d1 instances
     *   local_ssd_pro: local NVMe SSDs, which are attached to i2, i2g, i1, ga1, or gn5 instances
     *
     * @example local_ssd_pro
     *
     * @var string
     */
    public $localStorageCategory;

    /**
     * @description The maximum number of queues per ENI, including primary and secondary ENIs.
     *
     * @example 4
     *
     * @var int
     */
    public $maximumQueueNumberPerEni;

    /**
     * @description The memory size. Unit: GiB
     *
     * @example 16
     *
     * @var float
     */
    public $memorySize;

    /**
     * @description The maximum number of network cards that the instance type supports.
     *
     * @example 1
     *
     * @var int
     */
    public $networkCardQuantity;

    /**
     * @description The information of the network cards.
     *
     * @var networkCards
     */
    public $networkCards;

    /**
     * @description Indicates whether to allow network traffic transmitted over virtual private clouds (VPCs) to be encrypted. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $networkEncryptionSupport;

    /**
     * @description Indicates whether cloud disks can be attached by using the NVMe protocol. Valid values:
     *
     *   required: Cloud disks can be attached by using the NVMe protocol.
     *   unsupported: Cloud disks cannot be attached by using the NVMe protocol.
     *
     * @example unsupported
     *
     * @var string
     */
    public $nvmeSupport;

    /**
     * @description The CPU model.
     *
     * @example Intel Xeon(Ice Lake) Platinum 8369B
     *
     * @var string
     */
    public $physicalProcessorModel;

    /**
     * @description The default number of queues per primary ENI.
     *
     * @example 4
     *
     * @var int
     */
    public $primaryEniQueueNumber;

    /**
     * @description The maximum number of QPs per ERI.
     *
     * @example 22
     *
     * @var int
     */
    public $queuePairNumber;

    /**
     * @description The default number of queues per secondary ENI.
     *
     * @example 4
     *
     * @var int
     */
    public $secondaryEniQueueNumber;

    /**
     * @description The boot modes supported by the instance type.
     *
     * @var supportedBootModes
     */
    public $supportedBootModes;

    /**
     * @description The maximum number of queues on ENIs that the instance type supports.
     *
     * @example 12
     *
     * @var int
     */
    public $totalEniQueueQuantity;
    protected $_name = [
        'baselineCredit'              => 'BaselineCredit',
        'cpuArchitecture'             => 'CpuArchitecture',
        'cpuCoreCount'                => 'CpuCoreCount',
        'cpuSpeedFrequency'           => 'CpuSpeedFrequency',
        'cpuTurboFrequency'           => 'CpuTurboFrequency',
        'diskQuantity'                => 'DiskQuantity',
        'enhancedNetwork'             => 'EnhancedNetwork',
        'eniIpv6AddressQuantity'      => 'EniIpv6AddressQuantity',
        'eniPrivateIpAddressQuantity' => 'EniPrivateIpAddressQuantity',
        'eniQuantity'                 => 'EniQuantity',
        'eniTotalQuantity'            => 'EniTotalQuantity',
        'eniTrunkSupported'           => 'EniTrunkSupported',
        'eriQuantity'                 => 'EriQuantity',
        'GPUAmount'                   => 'GPUAmount',
        'GPUMemorySize'               => 'GPUMemorySize',
        'GPUSpec'                     => 'GPUSpec',
        'initialCredit'               => 'InitialCredit',
        'instanceBandwidthRx'         => 'InstanceBandwidthRx',
        'instanceBandwidthTx'         => 'InstanceBandwidthTx',
        'instanceCategory'            => 'InstanceCategory',
        'instanceFamilyLevel'         => 'InstanceFamilyLevel',
        'instancePpsRx'               => 'InstancePpsRx',
        'instancePpsTx'               => 'InstancePpsTx',
        'instanceTypeFamily'          => 'InstanceTypeFamily',
        'instanceTypeId'              => 'InstanceTypeId',
        'localStorageAmount'          => 'LocalStorageAmount',
        'localStorageCapacity'        => 'LocalStorageCapacity',
        'localStorageCategory'        => 'LocalStorageCategory',
        'maximumQueueNumberPerEni'    => 'MaximumQueueNumberPerEni',
        'memorySize'                  => 'MemorySize',
        'networkCardQuantity'         => 'NetworkCardQuantity',
        'networkCards'                => 'NetworkCards',
        'networkEncryptionSupport'    => 'NetworkEncryptionSupport',
        'nvmeSupport'                 => 'NvmeSupport',
        'physicalProcessorModel'      => 'PhysicalProcessorModel',
        'primaryEniQueueNumber'       => 'PrimaryEniQueueNumber',
        'queuePairNumber'             => 'QueuePairNumber',
        'secondaryEniQueueNumber'     => 'SecondaryEniQueueNumber',
        'supportedBootModes'          => 'SupportedBootModes',
        'totalEniQueueQuantity'       => 'TotalEniQueueQuantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineCredit) {
            $res['BaselineCredit'] = $this->baselineCredit;
        }
        if (null !== $this->cpuArchitecture) {
            $res['CpuArchitecture'] = $this->cpuArchitecture;
        }
        if (null !== $this->cpuCoreCount) {
            $res['CpuCoreCount'] = $this->cpuCoreCount;
        }
        if (null !== $this->cpuSpeedFrequency) {
            $res['CpuSpeedFrequency'] = $this->cpuSpeedFrequency;
        }
        if (null !== $this->cpuTurboFrequency) {
            $res['CpuTurboFrequency'] = $this->cpuTurboFrequency;
        }
        if (null !== $this->diskQuantity) {
            $res['DiskQuantity'] = $this->diskQuantity;
        }
        if (null !== $this->enhancedNetwork) {
            $res['EnhancedNetwork'] = null !== $this->enhancedNetwork ? $this->enhancedNetwork->toMap() : null;
        }
        if (null !== $this->eniIpv6AddressQuantity) {
            $res['EniIpv6AddressQuantity'] = $this->eniIpv6AddressQuantity;
        }
        if (null !== $this->eniPrivateIpAddressQuantity) {
            $res['EniPrivateIpAddressQuantity'] = $this->eniPrivateIpAddressQuantity;
        }
        if (null !== $this->eniQuantity) {
            $res['EniQuantity'] = $this->eniQuantity;
        }
        if (null !== $this->eniTotalQuantity) {
            $res['EniTotalQuantity'] = $this->eniTotalQuantity;
        }
        if (null !== $this->eniTrunkSupported) {
            $res['EniTrunkSupported'] = $this->eniTrunkSupported;
        }
        if (null !== $this->eriQuantity) {
            $res['EriQuantity'] = $this->eriQuantity;
        }
        if (null !== $this->GPUAmount) {
            $res['GPUAmount'] = $this->GPUAmount;
        }
        if (null !== $this->GPUMemorySize) {
            $res['GPUMemorySize'] = $this->GPUMemorySize;
        }
        if (null !== $this->GPUSpec) {
            $res['GPUSpec'] = $this->GPUSpec;
        }
        if (null !== $this->initialCredit) {
            $res['InitialCredit'] = $this->initialCredit;
        }
        if (null !== $this->instanceBandwidthRx) {
            $res['InstanceBandwidthRx'] = $this->instanceBandwidthRx;
        }
        if (null !== $this->instanceBandwidthTx) {
            $res['InstanceBandwidthTx'] = $this->instanceBandwidthTx;
        }
        if (null !== $this->instanceCategory) {
            $res['InstanceCategory'] = $this->instanceCategory;
        }
        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }
        if (null !== $this->instancePpsRx) {
            $res['InstancePpsRx'] = $this->instancePpsRx;
        }
        if (null !== $this->instancePpsTx) {
            $res['InstancePpsTx'] = $this->instancePpsTx;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->instanceTypeId) {
            $res['InstanceTypeId'] = $this->instanceTypeId;
        }
        if (null !== $this->localStorageAmount) {
            $res['LocalStorageAmount'] = $this->localStorageAmount;
        }
        if (null !== $this->localStorageCapacity) {
            $res['LocalStorageCapacity'] = $this->localStorageCapacity;
        }
        if (null !== $this->localStorageCategory) {
            $res['LocalStorageCategory'] = $this->localStorageCategory;
        }
        if (null !== $this->maximumQueueNumberPerEni) {
            $res['MaximumQueueNumberPerEni'] = $this->maximumQueueNumberPerEni;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->networkCardQuantity) {
            $res['NetworkCardQuantity'] = $this->networkCardQuantity;
        }
        if (null !== $this->networkCards) {
            $res['NetworkCards'] = null !== $this->networkCards ? $this->networkCards->toMap() : null;
        }
        if (null !== $this->networkEncryptionSupport) {
            $res['NetworkEncryptionSupport'] = $this->networkEncryptionSupport;
        }
        if (null !== $this->nvmeSupport) {
            $res['NvmeSupport'] = $this->nvmeSupport;
        }
        if (null !== $this->physicalProcessorModel) {
            $res['PhysicalProcessorModel'] = $this->physicalProcessorModel;
        }
        if (null !== $this->primaryEniQueueNumber) {
            $res['PrimaryEniQueueNumber'] = $this->primaryEniQueueNumber;
        }
        if (null !== $this->queuePairNumber) {
            $res['QueuePairNumber'] = $this->queuePairNumber;
        }
        if (null !== $this->secondaryEniQueueNumber) {
            $res['SecondaryEniQueueNumber'] = $this->secondaryEniQueueNumber;
        }
        if (null !== $this->supportedBootModes) {
            $res['SupportedBootModes'] = null !== $this->supportedBootModes ? $this->supportedBootModes->toMap() : null;
        }
        if (null !== $this->totalEniQueueQuantity) {
            $res['TotalEniQueueQuantity'] = $this->totalEniQueueQuantity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineCredit'])) {
            $model->baselineCredit = $map['BaselineCredit'];
        }
        if (isset($map['CpuArchitecture'])) {
            $model->cpuArchitecture = $map['CpuArchitecture'];
        }
        if (isset($map['CpuCoreCount'])) {
            $model->cpuCoreCount = $map['CpuCoreCount'];
        }
        if (isset($map['CpuSpeedFrequency'])) {
            $model->cpuSpeedFrequency = $map['CpuSpeedFrequency'];
        }
        if (isset($map['CpuTurboFrequency'])) {
            $model->cpuTurboFrequency = $map['CpuTurboFrequency'];
        }
        if (isset($map['DiskQuantity'])) {
            $model->diskQuantity = $map['DiskQuantity'];
        }
        if (isset($map['EnhancedNetwork'])) {
            $model->enhancedNetwork = enhancedNetwork::fromMap($map['EnhancedNetwork']);
        }
        if (isset($map['EniIpv6AddressQuantity'])) {
            $model->eniIpv6AddressQuantity = $map['EniIpv6AddressQuantity'];
        }
        if (isset($map['EniPrivateIpAddressQuantity'])) {
            $model->eniPrivateIpAddressQuantity = $map['EniPrivateIpAddressQuantity'];
        }
        if (isset($map['EniQuantity'])) {
            $model->eniQuantity = $map['EniQuantity'];
        }
        if (isset($map['EniTotalQuantity'])) {
            $model->eniTotalQuantity = $map['EniTotalQuantity'];
        }
        if (isset($map['EniTrunkSupported'])) {
            $model->eniTrunkSupported = $map['EniTrunkSupported'];
        }
        if (isset($map['EriQuantity'])) {
            $model->eriQuantity = $map['EriQuantity'];
        }
        if (isset($map['GPUAmount'])) {
            $model->GPUAmount = $map['GPUAmount'];
        }
        if (isset($map['GPUMemorySize'])) {
            $model->GPUMemorySize = $map['GPUMemorySize'];
        }
        if (isset($map['GPUSpec'])) {
            $model->GPUSpec = $map['GPUSpec'];
        }
        if (isset($map['InitialCredit'])) {
            $model->initialCredit = $map['InitialCredit'];
        }
        if (isset($map['InstanceBandwidthRx'])) {
            $model->instanceBandwidthRx = $map['InstanceBandwidthRx'];
        }
        if (isset($map['InstanceBandwidthTx'])) {
            $model->instanceBandwidthTx = $map['InstanceBandwidthTx'];
        }
        if (isset($map['InstanceCategory'])) {
            $model->instanceCategory = $map['InstanceCategory'];
        }
        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }
        if (isset($map['InstancePpsRx'])) {
            $model->instancePpsRx = $map['InstancePpsRx'];
        }
        if (isset($map['InstancePpsTx'])) {
            $model->instancePpsTx = $map['InstancePpsTx'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['InstanceTypeId'])) {
            $model->instanceTypeId = $map['InstanceTypeId'];
        }
        if (isset($map['LocalStorageAmount'])) {
            $model->localStorageAmount = $map['LocalStorageAmount'];
        }
        if (isset($map['LocalStorageCapacity'])) {
            $model->localStorageCapacity = $map['LocalStorageCapacity'];
        }
        if (isset($map['LocalStorageCategory'])) {
            $model->localStorageCategory = $map['LocalStorageCategory'];
        }
        if (isset($map['MaximumQueueNumberPerEni'])) {
            $model->maximumQueueNumberPerEni = $map['MaximumQueueNumberPerEni'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['NetworkCardQuantity'])) {
            $model->networkCardQuantity = $map['NetworkCardQuantity'];
        }
        if (isset($map['NetworkCards'])) {
            $model->networkCards = networkCards::fromMap($map['NetworkCards']);
        }
        if (isset($map['NetworkEncryptionSupport'])) {
            $model->networkEncryptionSupport = $map['NetworkEncryptionSupport'];
        }
        if (isset($map['NvmeSupport'])) {
            $model->nvmeSupport = $map['NvmeSupport'];
        }
        if (isset($map['PhysicalProcessorModel'])) {
            $model->physicalProcessorModel = $map['PhysicalProcessorModel'];
        }
        if (isset($map['PrimaryEniQueueNumber'])) {
            $model->primaryEniQueueNumber = $map['PrimaryEniQueueNumber'];
        }
        if (isset($map['QueuePairNumber'])) {
            $model->queuePairNumber = $map['QueuePairNumber'];
        }
        if (isset($map['SecondaryEniQueueNumber'])) {
            $model->secondaryEniQueueNumber = $map['SecondaryEniQueueNumber'];
        }
        if (isset($map['SupportedBootModes'])) {
            $model->supportedBootModes = supportedBootModes::fromMap($map['SupportedBootModes']);
        }
        if (isset($map['TotalEniQueueQuantity'])) {
            $model->totalEniQueueQuantity = $map['TotalEniQueueQuantity'];
        }

        return $model;
    }
}
