<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceTypesRequest extends Model
{
    /**
     * @description The CPU architecture. Valid values:
     *
     *   X86: x86
     *   ARM: ARM
     *
     * @example X86
     *
     * @var string
     */
    public $cpuArchitecture;

    /**
     * @var string[]
     */
    public $cpuArchitectures;

    /**
     * @description The GPU model.
     *
     * >  Fuzzy match is supported. For example, if an instance type provides NVIDIA V100 GPUs and you set this parameter to NVIDIA, information about the instance type is queried.
     * @example NVIDIA V100
     *
     * @var string
     */
    public $GPUSpec;

    /**
     * @var string[]
     */
    public $gpuSpecs;

    /**
     * @var string[]
     */
    public $instanceCategories;

    /**
     * @description The category of the instance type. Valid values:
     *
     *   General-purpose: general-purpose instance type
     *   Compute-optimized: compute-optimized instance type
     *   Memory-optimized: memory-optimized instance type
     *   Big data: big data instance type
     *   Local SSDs: instance type with local SSDs
     *   High Clock Speed: instance type with high clock speeds
     *   Enhanced: enhanced instance type
     *   Shared: shared instance type
     *   Compute-optimized with GPU: GPU-accelerated compute-optimized instance type
     *   Visual Compute-optimized: visual compute-optimized instance type
     *   Heterogeneous Service: heterogeneous service instance type
     *   Compute-optimized with FPGA: FPGA-accelerated compute-optimized instance type
     *   Compute-optimized with NPU: NPU-accelerated compute-optimized instance type
     *   ECS Bare Metal: ECS Bare Metal Instance type
     *   Super Computing Cluster: Super Computing Cluster (SCC) instance type
     * - Cloud Physical Server.
     * @example Big data
     *
     * @var string
     */
    public $instanceCategory;

    /**
     * @description The level of the instance family. Valid values:
     *
     *   EntryLevel: entry level (shared)
     *   EnterpriseLevel: enterprise level
     *   CreditEntryLevel: credit-based entry level
     *
     * @example EntryLevel
     *
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @var string[]
     */
    public $instanceTypeFamilies;

    /**
     * @description The instance family to which the instance type belongs. For information about the valid values of this parameter, see [DescribeInstanceTypeFamilies](~~25621~~).
     *
     * For more information about instance families, see [Instance families](~~25378~~).
     * @example ecs.g6
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description Instance type N. Valid values of N: 1 to 10. If this parameter is left empty, information about all instance types is queried.
     *
     * @example ecs.g6.large
     *
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @var string[]
     */
    public $localStorageCategories;

    /**
     * @description The category of local disks. For more information, see [Local disks](~~63138#section_n2w\_8yc\_5u1~~). Valid values:
     *
     *   local_hdd_pro: local Serial Advanced Technology Attachment (SATA) HDDs, which are used by d1ne or d1 instances
     *   local_ssd_pro: local Non-Volatile Memory Express (NVMe) SSDs, which are used by i2, i2g, i1, ga1, or gn5 instances
     *
     * @example local_ssd_pro
     *
     * @var string
     */
    public $localStorageCategory;

    /**
     * @description The maximum number of entries to return on each page. Maximum value: 1600.
     *
     * Default value: 1600.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The maximum number of vCPUs. The value must be a positive integer.
     *
     * >  If an instance type has more vCPUs than the specified value, information about the instance type is not queried.
     * @example 10
     *
     * @var int
     */
    public $maximumCpuCoreCount;

    /**
     * @description The maximum clock speed.
     *
     * >  If an instance type uses processors that have a higher clock speed than the specified value, information about the instance type is not queried.
     * @example 3.2
     *
     * @var float
     */
    public $maximumCpuSpeedFrequency;

    /**
     * @description The maximum turbo frequency.
     *
     * >  If an instance type uses processors that deliver a higher turbo frequency than the specified value, information about the instance type is not queried.
     * @example 4.1
     *
     * @var float
     */
    public $maximumCpuTurboFrequency;

    /**
     * @description The maximum number of GPUs. The value must be a positive integer.
     *
     * >  If an instance type provides more GPUs than the specified value, information about the instance type is not queried.
     * @example 10
     *
     * @var int
     */
    public $maximumGPUAmount;

    /**
     * @description The maximum memory size. Unit: GiB.
     *
     * >  If the memory size of an instance type is larger than the specified value, information about the instance type is not queried.
     * @example 60
     *
     * @var float
     */
    public $maximumMemorySize;

    /**
     * @description The minimum baseline CPU performance (overall baseline performance of all vCPUs) of a t5 or t6 burstable instance.
     *
     * >  If a t5 or t6 instance type provides baseline CPU performance lower than the specified value, information about the instance type is not queried.
     * @example 12
     *
     * @var int
     */
    public $minimumBaselineCredit;

    /**
     * @description The minimum number of vCPUs. The value must be a positive integer.
     *
     * >  If an instance type has fewer vCPUs than the specified value, information about the instance type is not queried.
     * @example 2
     *
     * @var int
     */
    public $minimumCpuCoreCount;

    /**
     * @description The minimum clock speed.
     *
     * >  If an instance type uses processors that have a lower clock speed than the specified value, information about the instance type is not queried.
     * @example 2.5
     *
     * @var float
     */
    public $minimumCpuSpeedFrequency;

    /**
     * @description The minimum turbo frequency.
     *
     * >  If an instance type uses processors that deliver a lower turbo frequency than the specified value, information about the instance type is not queried.
     * @example 3.2
     *
     * @var float
     */
    public $minimumCpuTurboFrequency;

    /**
     * @description The minimum number of cloud disks per instance.
     *
     * >  If an instance type supports fewer cloud disks than the specified value, information about the instance type is not queried.
     * @example 4
     *
     * @var int
     */
    public $minimumDiskQuantity;

    /**
     * @description The minimum number of IPv6 addresses per ENI.
     *
     * >  If an instance type supports fewer IPv6 addresses per ENI than the specified value, information about the instance type is not queried.
     * @example 2
     *
     * @var int
     */
    public $minimumEniIpv6AddressQuantity;

    /**
     * @description The minimum number of IPv4 addresses per ENI.
     *
     * >  If an instance type supports fewer IPv4 addresses per ENI than the specified value, information about the instance type is not queried.
     * @example 2
     *
     * @var int
     */
    public $minimumEniPrivateIpAddressQuantity;

    /**
     * @description The minimum number of elastic network interfaces (ENIs) per instance.
     *
     * >  If an instance type supports fewer ENIs than the specified value, information about the instance type is not queried.
     * @example 4
     *
     * @var int
     */
    public $minimumEniQuantity;

    /**
     * @description The minimum number of ERIs per instance.
     *
     * >  If an instance type supports fewer ERIs than the specified value, information about the instance type is not queried.
     * @example 0
     *
     * @var int
     */
    public $minimumEriQuantity;

    /**
     * @description The minimum number of GPUs. The value must be a positive integer.
     *
     * >  If an instance type provides fewer GPUs than the specified value, information about the instance type is not queried.
     * @example 3
     *
     * @var int
     */
    public $minimumGPUAmount;

    /**
     * @description The minimum initial CPU credits of a t5 or t6 burstable instance.
     *
     * >  If a t5 or t6 instance type provides less initial vCPU credits than the specified value, information about the instance type is not queried.
     * @example 12
     *
     * @var int
     */
    public $minimumInitialCredit;

    /**
     * @description The minimum inbound internal bandwidth. Unit: Kbit/s.
     *
     * >  If an instance type provides an inbound internal bandwidth that is lower than the specified value, information about the instance type is not queried.
     * @example 12288
     *
     * @var int
     */
    public $minimumInstanceBandwidthRx;

    /**
     * @description The minimum outbound internal bandwidth. Unit: Kbit/s.
     *
     * >  If an instance type provides an outbound internal bandwidth that is lower than the specified value, information about the instance type is not queried.
     * @example 12288
     *
     * @var int
     */
    public $minimumInstanceBandwidthTx;

    /**
     * @description The minimum inbound packet forwarding rate over the internal network. Unit: pps.
     *
     * >  If an instance type provides an inbound packet forwarding rate over the internal network that is lower than the specified value, information about the instance type is not queried.
     * @example 15
     *
     * @var int
     */
    public $minimumInstancePpsRx;

    /**
     * @description The minimum outbound packet forwarding rate over the internal network. Unit: pps.
     *
     * >  If an instance type provides an outbound packet forwarding rate over the internal network that is lower than the specified value, information about the instance type is not queried.
     * @example 15
     *
     * @var int
     */
    public $minimumInstancePpsTx;

    /**
     * @description The minimum number of local disks per instance.
     *
     * >  If an instance type supports fewer local disks than the specified value, information about the instance type is not queried.
     * @example 4
     *
     * @var int
     */
    public $minimumLocalStorageAmount;

    /**
     * @description The capacity of each local disk attached per instance. Unit: GiB.
     *
     * @example 40
     *
     * @var int
     */
    public $minimumLocalStorageCapacity;

    /**
     * @description The minimum memory size. Unit: GiB.
     *
     * >  If the memory size of an instance type is smaller than the specified value, information about the instance type is not queried.
     * @example 20
     *
     * @var float
     */
    public $minimumMemorySize;

    /**
     * @description The minimum default number of queues per primary network interface controller (NIC).
     *
     * >  If an instance type supports fewer queues per primary NIC than the specified value, information about the instance type is not queried.
     * @example 8
     *
     * @var int
     */
    public $minimumPrimaryEniQueueNumber;

    /**
     * @description The minimum number of queue pair (QP) queues per elastic RDMA interface (ERI).
     *
     * >  If an instance type supports fewer QP queues per ERI than the specified value, information about the instance type is not queried.
     * @example 8
     *
     * @var int
     */
    public $minimumQueuePairNumber;

    /**
     * @description The minimum default number of queues per secondary NIC.
     *
     * >  If an instance type supports fewer queues per secondary NIC than the specified value, information about the instance type is not queried.
     * @example 4
     *
     * @var int
     */
    public $minimumSecondaryEniQueueNumber;

    /**
     * @description The query token. Set the value to the NextToken value returned in the previous call to the DescribeInstanceTypes operation. You do not need to specify this parameter for the first request.
     *
     * @example e71d8a535bd9cc11
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Specifies whether cloud disks can be attached by using the NVMe protocol. Valid values:
     *
     *   required: The cloud disk can be attached by using the NVMe protocol.
     *   unsupported: The cloud disk cannot be attached by using the NVMe protocol.
     *
     * @example required
     *
     * @var string
     */
    public $nvmeSupport;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The CPU model.
     *
     * >  Fuzzy match is supported. For example, if an instance type uses Intel Xeon (Ice Lake) Platinum 8369B processors and you set this parameter to Intel, information about the instance type is queried.
     * @example Intel Xeon(Ice Lake) Platinum 8369B
     *
     * @var string
     */
    public $physicalProcessorModel;

    /**
     * @var string[]
     */
    public $physicalProcessorModels;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'cpuArchitecture'                    => 'CpuArchitecture',
        'cpuArchitectures'                   => 'CpuArchitectures',
        'GPUSpec'                            => 'GPUSpec',
        'gpuSpecs'                           => 'GpuSpecs',
        'instanceCategories'                 => 'InstanceCategories',
        'instanceCategory'                   => 'InstanceCategory',
        'instanceFamilyLevel'                => 'InstanceFamilyLevel',
        'instanceTypeFamilies'               => 'InstanceTypeFamilies',
        'instanceTypeFamily'                 => 'InstanceTypeFamily',
        'instanceTypes'                      => 'InstanceTypes',
        'localStorageCategories'             => 'LocalStorageCategories',
        'localStorageCategory'               => 'LocalStorageCategory',
        'maxResults'                         => 'MaxResults',
        'maximumCpuCoreCount'                => 'MaximumCpuCoreCount',
        'maximumCpuSpeedFrequency'           => 'MaximumCpuSpeedFrequency',
        'maximumCpuTurboFrequency'           => 'MaximumCpuTurboFrequency',
        'maximumGPUAmount'                   => 'MaximumGPUAmount',
        'maximumMemorySize'                  => 'MaximumMemorySize',
        'minimumBaselineCredit'              => 'MinimumBaselineCredit',
        'minimumCpuCoreCount'                => 'MinimumCpuCoreCount',
        'minimumCpuSpeedFrequency'           => 'MinimumCpuSpeedFrequency',
        'minimumCpuTurboFrequency'           => 'MinimumCpuTurboFrequency',
        'minimumDiskQuantity'                => 'MinimumDiskQuantity',
        'minimumEniIpv6AddressQuantity'      => 'MinimumEniIpv6AddressQuantity',
        'minimumEniPrivateIpAddressQuantity' => 'MinimumEniPrivateIpAddressQuantity',
        'minimumEniQuantity'                 => 'MinimumEniQuantity',
        'minimumEriQuantity'                 => 'MinimumEriQuantity',
        'minimumGPUAmount'                   => 'MinimumGPUAmount',
        'minimumInitialCredit'               => 'MinimumInitialCredit',
        'minimumInstanceBandwidthRx'         => 'MinimumInstanceBandwidthRx',
        'minimumInstanceBandwidthTx'         => 'MinimumInstanceBandwidthTx',
        'minimumInstancePpsRx'               => 'MinimumInstancePpsRx',
        'minimumInstancePpsTx'               => 'MinimumInstancePpsTx',
        'minimumLocalStorageAmount'          => 'MinimumLocalStorageAmount',
        'minimumLocalStorageCapacity'        => 'MinimumLocalStorageCapacity',
        'minimumMemorySize'                  => 'MinimumMemorySize',
        'minimumPrimaryEniQueueNumber'       => 'MinimumPrimaryEniQueueNumber',
        'minimumQueuePairNumber'             => 'MinimumQueuePairNumber',
        'minimumSecondaryEniQueueNumber'     => 'MinimumSecondaryEniQueueNumber',
        'nextToken'                          => 'NextToken',
        'nvmeSupport'                        => 'NvmeSupport',
        'ownerAccount'                       => 'OwnerAccount',
        'ownerId'                            => 'OwnerId',
        'physicalProcessorModel'             => 'PhysicalProcessorModel',
        'physicalProcessorModels'            => 'PhysicalProcessorModels',
        'resourceOwnerAccount'               => 'ResourceOwnerAccount',
        'resourceOwnerId'                    => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuArchitecture) {
            $res['CpuArchitecture'] = $this->cpuArchitecture;
        }
        if (null !== $this->cpuArchitectures) {
            $res['CpuArchitectures'] = $this->cpuArchitectures;
        }
        if (null !== $this->GPUSpec) {
            $res['GPUSpec'] = $this->GPUSpec;
        }
        if (null !== $this->gpuSpecs) {
            $res['GpuSpecs'] = $this->gpuSpecs;
        }
        if (null !== $this->instanceCategories) {
            $res['InstanceCategories'] = $this->instanceCategories;
        }
        if (null !== $this->instanceCategory) {
            $res['InstanceCategory'] = $this->instanceCategory;
        }
        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }
        if (null !== $this->instanceTypeFamilies) {
            $res['InstanceTypeFamilies'] = $this->instanceTypeFamilies;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
        }
        if (null !== $this->localStorageCategories) {
            $res['LocalStorageCategories'] = $this->localStorageCategories;
        }
        if (null !== $this->localStorageCategory) {
            $res['LocalStorageCategory'] = $this->localStorageCategory;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->maximumCpuCoreCount) {
            $res['MaximumCpuCoreCount'] = $this->maximumCpuCoreCount;
        }
        if (null !== $this->maximumCpuSpeedFrequency) {
            $res['MaximumCpuSpeedFrequency'] = $this->maximumCpuSpeedFrequency;
        }
        if (null !== $this->maximumCpuTurboFrequency) {
            $res['MaximumCpuTurboFrequency'] = $this->maximumCpuTurboFrequency;
        }
        if (null !== $this->maximumGPUAmount) {
            $res['MaximumGPUAmount'] = $this->maximumGPUAmount;
        }
        if (null !== $this->maximumMemorySize) {
            $res['MaximumMemorySize'] = $this->maximumMemorySize;
        }
        if (null !== $this->minimumBaselineCredit) {
            $res['MinimumBaselineCredit'] = $this->minimumBaselineCredit;
        }
        if (null !== $this->minimumCpuCoreCount) {
            $res['MinimumCpuCoreCount'] = $this->minimumCpuCoreCount;
        }
        if (null !== $this->minimumCpuSpeedFrequency) {
            $res['MinimumCpuSpeedFrequency'] = $this->minimumCpuSpeedFrequency;
        }
        if (null !== $this->minimumCpuTurboFrequency) {
            $res['MinimumCpuTurboFrequency'] = $this->minimumCpuTurboFrequency;
        }
        if (null !== $this->minimumDiskQuantity) {
            $res['MinimumDiskQuantity'] = $this->minimumDiskQuantity;
        }
        if (null !== $this->minimumEniIpv6AddressQuantity) {
            $res['MinimumEniIpv6AddressQuantity'] = $this->minimumEniIpv6AddressQuantity;
        }
        if (null !== $this->minimumEniPrivateIpAddressQuantity) {
            $res['MinimumEniPrivateIpAddressQuantity'] = $this->minimumEniPrivateIpAddressQuantity;
        }
        if (null !== $this->minimumEniQuantity) {
            $res['MinimumEniQuantity'] = $this->minimumEniQuantity;
        }
        if (null !== $this->minimumEriQuantity) {
            $res['MinimumEriQuantity'] = $this->minimumEriQuantity;
        }
        if (null !== $this->minimumGPUAmount) {
            $res['MinimumGPUAmount'] = $this->minimumGPUAmount;
        }
        if (null !== $this->minimumInitialCredit) {
            $res['MinimumInitialCredit'] = $this->minimumInitialCredit;
        }
        if (null !== $this->minimumInstanceBandwidthRx) {
            $res['MinimumInstanceBandwidthRx'] = $this->minimumInstanceBandwidthRx;
        }
        if (null !== $this->minimumInstanceBandwidthTx) {
            $res['MinimumInstanceBandwidthTx'] = $this->minimumInstanceBandwidthTx;
        }
        if (null !== $this->minimumInstancePpsRx) {
            $res['MinimumInstancePpsRx'] = $this->minimumInstancePpsRx;
        }
        if (null !== $this->minimumInstancePpsTx) {
            $res['MinimumInstancePpsTx'] = $this->minimumInstancePpsTx;
        }
        if (null !== $this->minimumLocalStorageAmount) {
            $res['MinimumLocalStorageAmount'] = $this->minimumLocalStorageAmount;
        }
        if (null !== $this->minimumLocalStorageCapacity) {
            $res['MinimumLocalStorageCapacity'] = $this->minimumLocalStorageCapacity;
        }
        if (null !== $this->minimumMemorySize) {
            $res['MinimumMemorySize'] = $this->minimumMemorySize;
        }
        if (null !== $this->minimumPrimaryEniQueueNumber) {
            $res['MinimumPrimaryEniQueueNumber'] = $this->minimumPrimaryEniQueueNumber;
        }
        if (null !== $this->minimumQueuePairNumber) {
            $res['MinimumQueuePairNumber'] = $this->minimumQueuePairNumber;
        }
        if (null !== $this->minimumSecondaryEniQueueNumber) {
            $res['MinimumSecondaryEniQueueNumber'] = $this->minimumSecondaryEniQueueNumber;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->nvmeSupport) {
            $res['NvmeSupport'] = $this->nvmeSupport;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->physicalProcessorModel) {
            $res['PhysicalProcessorModel'] = $this->physicalProcessorModel;
        }
        if (null !== $this->physicalProcessorModels) {
            $res['PhysicalProcessorModels'] = $this->physicalProcessorModels;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuArchitecture'])) {
            $model->cpuArchitecture = $map['CpuArchitecture'];
        }
        if (isset($map['CpuArchitectures'])) {
            if (!empty($map['CpuArchitectures'])) {
                $model->cpuArchitectures = $map['CpuArchitectures'];
            }
        }
        if (isset($map['GPUSpec'])) {
            $model->GPUSpec = $map['GPUSpec'];
        }
        if (isset($map['GpuSpecs'])) {
            if (!empty($map['GpuSpecs'])) {
                $model->gpuSpecs = $map['GpuSpecs'];
            }
        }
        if (isset($map['InstanceCategories'])) {
            if (!empty($map['InstanceCategories'])) {
                $model->instanceCategories = $map['InstanceCategories'];
            }
        }
        if (isset($map['InstanceCategory'])) {
            $model->instanceCategory = $map['InstanceCategory'];
        }
        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }
        if (isset($map['InstanceTypeFamilies'])) {
            if (!empty($map['InstanceTypeFamilies'])) {
                $model->instanceTypeFamilies = $map['InstanceTypeFamilies'];
            }
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = $map['InstanceTypes'];
            }
        }
        if (isset($map['LocalStorageCategories'])) {
            if (!empty($map['LocalStorageCategories'])) {
                $model->localStorageCategories = $map['LocalStorageCategories'];
            }
        }
        if (isset($map['LocalStorageCategory'])) {
            $model->localStorageCategory = $map['LocalStorageCategory'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['MaximumCpuCoreCount'])) {
            $model->maximumCpuCoreCount = $map['MaximumCpuCoreCount'];
        }
        if (isset($map['MaximumCpuSpeedFrequency'])) {
            $model->maximumCpuSpeedFrequency = $map['MaximumCpuSpeedFrequency'];
        }
        if (isset($map['MaximumCpuTurboFrequency'])) {
            $model->maximumCpuTurboFrequency = $map['MaximumCpuTurboFrequency'];
        }
        if (isset($map['MaximumGPUAmount'])) {
            $model->maximumGPUAmount = $map['MaximumGPUAmount'];
        }
        if (isset($map['MaximumMemorySize'])) {
            $model->maximumMemorySize = $map['MaximumMemorySize'];
        }
        if (isset($map['MinimumBaselineCredit'])) {
            $model->minimumBaselineCredit = $map['MinimumBaselineCredit'];
        }
        if (isset($map['MinimumCpuCoreCount'])) {
            $model->minimumCpuCoreCount = $map['MinimumCpuCoreCount'];
        }
        if (isset($map['MinimumCpuSpeedFrequency'])) {
            $model->minimumCpuSpeedFrequency = $map['MinimumCpuSpeedFrequency'];
        }
        if (isset($map['MinimumCpuTurboFrequency'])) {
            $model->minimumCpuTurboFrequency = $map['MinimumCpuTurboFrequency'];
        }
        if (isset($map['MinimumDiskQuantity'])) {
            $model->minimumDiskQuantity = $map['MinimumDiskQuantity'];
        }
        if (isset($map['MinimumEniIpv6AddressQuantity'])) {
            $model->minimumEniIpv6AddressQuantity = $map['MinimumEniIpv6AddressQuantity'];
        }
        if (isset($map['MinimumEniPrivateIpAddressQuantity'])) {
            $model->minimumEniPrivateIpAddressQuantity = $map['MinimumEniPrivateIpAddressQuantity'];
        }
        if (isset($map['MinimumEniQuantity'])) {
            $model->minimumEniQuantity = $map['MinimumEniQuantity'];
        }
        if (isset($map['MinimumEriQuantity'])) {
            $model->minimumEriQuantity = $map['MinimumEriQuantity'];
        }
        if (isset($map['MinimumGPUAmount'])) {
            $model->minimumGPUAmount = $map['MinimumGPUAmount'];
        }
        if (isset($map['MinimumInitialCredit'])) {
            $model->minimumInitialCredit = $map['MinimumInitialCredit'];
        }
        if (isset($map['MinimumInstanceBandwidthRx'])) {
            $model->minimumInstanceBandwidthRx = $map['MinimumInstanceBandwidthRx'];
        }
        if (isset($map['MinimumInstanceBandwidthTx'])) {
            $model->minimumInstanceBandwidthTx = $map['MinimumInstanceBandwidthTx'];
        }
        if (isset($map['MinimumInstancePpsRx'])) {
            $model->minimumInstancePpsRx = $map['MinimumInstancePpsRx'];
        }
        if (isset($map['MinimumInstancePpsTx'])) {
            $model->minimumInstancePpsTx = $map['MinimumInstancePpsTx'];
        }
        if (isset($map['MinimumLocalStorageAmount'])) {
            $model->minimumLocalStorageAmount = $map['MinimumLocalStorageAmount'];
        }
        if (isset($map['MinimumLocalStorageCapacity'])) {
            $model->minimumLocalStorageCapacity = $map['MinimumLocalStorageCapacity'];
        }
        if (isset($map['MinimumMemorySize'])) {
            $model->minimumMemorySize = $map['MinimumMemorySize'];
        }
        if (isset($map['MinimumPrimaryEniQueueNumber'])) {
            $model->minimumPrimaryEniQueueNumber = $map['MinimumPrimaryEniQueueNumber'];
        }
        if (isset($map['MinimumQueuePairNumber'])) {
            $model->minimumQueuePairNumber = $map['MinimumQueuePairNumber'];
        }
        if (isset($map['MinimumSecondaryEniQueueNumber'])) {
            $model->minimumSecondaryEniQueueNumber = $map['MinimumSecondaryEniQueueNumber'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['NvmeSupport'])) {
            $model->nvmeSupport = $map['NvmeSupport'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PhysicalProcessorModel'])) {
            $model->physicalProcessorModel = $map['PhysicalProcessorModel'];
        }
        if (isset($map['PhysicalProcessorModels'])) {
            if (!empty($map['PhysicalProcessorModels'])) {
                $model->physicalProcessorModels = $map['PhysicalProcessorModels'];
            }
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
