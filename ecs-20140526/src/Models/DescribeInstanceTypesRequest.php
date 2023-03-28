<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceTypesRequest extends Model
{
    /**
     * @var string
     */
    public $cpuArchitecture;

    /**
     * @var string
     */
    public $GPUSpec;

    /**
     * @var string
     */
    public $instanceCategory;

    /**
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @var string
     */
    public $localStorageCategory;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var int
     */
    public $maximumCpuCoreCount;

    /**
     * @var float
     */
    public $maximumCpuSpeedFrequency;

    /**
     * @var float
     */
    public $maximumCpuTurboFrequency;

    /**
     * @var int
     */
    public $maximumGPUAmount;

    /**
     * @var float
     */
    public $maximumMemorySize;

    /**
     * @var int
     */
    public $minimumBaselineCredit;

    /**
     * @var int
     */
    public $minimumCpuCoreCount;

    /**
     * @var float
     */
    public $minimumCpuSpeedFrequency;

    /**
     * @var float
     */
    public $minimumCpuTurboFrequency;

    /**
     * @var int
     */
    public $minimumDiskQuantity;

    /**
     * @var int
     */
    public $minimumEniIpv6AddressQuantity;

    /**
     * @var int
     */
    public $minimumEniPrivateIpAddressQuantity;

    /**
     * @var int
     */
    public $minimumEniQuantity;

    /**
     * @var int
     */
    public $minimumEriQuantity;

    /**
     * @var int
     */
    public $minimumGPUAmount;

    /**
     * @var int
     */
    public $minimumInitialCredit;

    /**
     * @var int
     */
    public $minimumInstanceBandwidthRx;

    /**
     * @var int
     */
    public $minimumInstanceBandwidthTx;

    /**
     * @var int
     */
    public $minimumInstancePpsRx;

    /**
     * @var int
     */
    public $minimumInstancePpsTx;

    /**
     * @var int
     */
    public $minimumLocalStorageAmount;

    /**
     * @var int
     */
    public $minimumLocalStorageCapacity;

    /**
     * @var float
     */
    public $minimumMemorySize;

    /**
     * @var int
     */
    public $minimumPrimaryEniQueueNumber;

    /**
     * @var int
     */
    public $minimumQueuePairNumber;

    /**
     * @var int
     */
    public $minimumSecondaryEniQueueNumber;

    /**
     * @var string
     */
    public $nextToken;

    /**
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
     * @var string
     */
    public $physicalProcessorModel;

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
        'GPUSpec'                            => 'GPUSpec',
        'instanceCategory'                   => 'InstanceCategory',
        'instanceFamilyLevel'                => 'InstanceFamilyLevel',
        'instanceTypeFamily'                 => 'InstanceTypeFamily',
        'instanceTypes'                      => 'InstanceTypes',
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
        if (null !== $this->GPUSpec) {
            $res['GPUSpec'] = $this->GPUSpec;
        }
        if (null !== $this->instanceCategory) {
            $res['InstanceCategory'] = $this->instanceCategory;
        }
        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
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
        if (isset($map['GPUSpec'])) {
            $model->GPUSpec = $map['GPUSpec'];
        }
        if (isset($map['InstanceCategory'])) {
            $model->instanceCategory = $map['InstanceCategory'];
        }
        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = $map['InstanceTypes'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
