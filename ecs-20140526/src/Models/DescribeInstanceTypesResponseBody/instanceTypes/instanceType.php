<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\attributes;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\cpuOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\enhancedNetwork;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\networkCards;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\supportedBootModes;

class instanceType extends Model
{
    /**
     * @var attributes
     */
    public $attributes;

    /**
     * @var int
     */
    public $baselineCredit;

    /**
     * @var string
     */
    public $cpuArchitecture;

    /**
     * @var int
     */
    public $cpuCoreCount;

    /**
     * @var cpuOptions
     */
    public $cpuOptions;

    /**
     * @var float
     */
    public $cpuSpeedFrequency;

    /**
     * @var float
     */
    public $cpuTurboFrequency;

    /**
     * @var int
     */
    public $diskQuantity;

    /**
     * @var enhancedNetwork
     */
    public $enhancedNetwork;

    /**
     * @var int
     */
    public $eniIpv6AddressQuantity;

    /**
     * @var int
     */
    public $eniPrivateIpAddressQuantity;

    /**
     * @var int
     */
    public $eniQuantity;

    /**
     * @var int
     */
    public $eniTotalQuantity;

    /**
     * @var bool
     */
    public $eniTrunkSupported;

    /**
     * @var int
     */
    public $eriQuantity;

    /**
     * @var int
     */
    public $GPUAmount;

    /**
     * @var float
     */
    public $GPUMemorySize;

    /**
     * @var string
     */
    public $GPUSpec;

    /**
     * @var int
     */
    public $initialCredit;

    /**
     * @var int
     */
    public $instanceBandwidthRx;

    /**
     * @var int
     */
    public $instanceBandwidthTx;

    /**
     * @var string
     */
    public $instanceCategory;

    /**
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @var int
     */
    public $instancePpsRx;

    /**
     * @var int
     */
    public $instancePpsTx;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var string
     */
    public $instanceTypeId;

    /**
     * @var bool
     */
    public $jumboFrameSupport;

    /**
     * @var int
     */
    public $localStorageAmount;

    /**
     * @var int
     */
    public $localStorageCapacity;

    /**
     * @var string
     */
    public $localStorageCategory;

    /**
     * @var int
     */
    public $maximumQueueNumberPerEni;

    /**
     * @var float
     */
    public $memorySize;

    /**
     * @var int
     */
    public $networkCardQuantity;

    /**
     * @var networkCards
     */
    public $networkCards;

    /**
     * @var bool
     */
    public $networkEncryptionSupport;

    /**
     * @var string
     */
    public $nvmeSupport;

    /**
     * @var string
     */
    public $physicalProcessorModel;

    /**
     * @var int
     */
    public $primaryEniQueueNumber;

    /**
     * @var int
     */
    public $queuePairNumber;

    /**
     * @var int
     */
    public $secondaryEniQueueNumber;

    /**
     * @var supportedBootModes
     */
    public $supportedBootModes;

    /**
     * @var int
     */
    public $totalEniQueueQuantity;
    protected $_name = [
        'attributes' => 'Attributes',
        'baselineCredit' => 'BaselineCredit',
        'cpuArchitecture' => 'CpuArchitecture',
        'cpuCoreCount' => 'CpuCoreCount',
        'cpuOptions' => 'CpuOptions',
        'cpuSpeedFrequency' => 'CpuSpeedFrequency',
        'cpuTurboFrequency' => 'CpuTurboFrequency',
        'diskQuantity' => 'DiskQuantity',
        'enhancedNetwork' => 'EnhancedNetwork',
        'eniIpv6AddressQuantity' => 'EniIpv6AddressQuantity',
        'eniPrivateIpAddressQuantity' => 'EniPrivateIpAddressQuantity',
        'eniQuantity' => 'EniQuantity',
        'eniTotalQuantity' => 'EniTotalQuantity',
        'eniTrunkSupported' => 'EniTrunkSupported',
        'eriQuantity' => 'EriQuantity',
        'GPUAmount' => 'GPUAmount',
        'GPUMemorySize' => 'GPUMemorySize',
        'GPUSpec' => 'GPUSpec',
        'initialCredit' => 'InitialCredit',
        'instanceBandwidthRx' => 'InstanceBandwidthRx',
        'instanceBandwidthTx' => 'InstanceBandwidthTx',
        'instanceCategory' => 'InstanceCategory',
        'instanceFamilyLevel' => 'InstanceFamilyLevel',
        'instancePpsRx' => 'InstancePpsRx',
        'instancePpsTx' => 'InstancePpsTx',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'instanceTypeId' => 'InstanceTypeId',
        'jumboFrameSupport' => 'JumboFrameSupport',
        'localStorageAmount' => 'LocalStorageAmount',
        'localStorageCapacity' => 'LocalStorageCapacity',
        'localStorageCategory' => 'LocalStorageCategory',
        'maximumQueueNumberPerEni' => 'MaximumQueueNumberPerEni',
        'memorySize' => 'MemorySize',
        'networkCardQuantity' => 'NetworkCardQuantity',
        'networkCards' => 'NetworkCards',
        'networkEncryptionSupport' => 'NetworkEncryptionSupport',
        'nvmeSupport' => 'NvmeSupport',
        'physicalProcessorModel' => 'PhysicalProcessorModel',
        'primaryEniQueueNumber' => 'PrimaryEniQueueNumber',
        'queuePairNumber' => 'QueuePairNumber',
        'secondaryEniQueueNumber' => 'SecondaryEniQueueNumber',
        'supportedBootModes' => 'SupportedBootModes',
        'totalEniQueueQuantity' => 'TotalEniQueueQuantity',
    ];

    public function validate()
    {
        if (null !== $this->attributes) {
            $this->attributes->validate();
        }
        if (null !== $this->cpuOptions) {
            $this->cpuOptions->validate();
        }
        if (null !== $this->enhancedNetwork) {
            $this->enhancedNetwork->validate();
        }
        if (null !== $this->networkCards) {
            $this->networkCards->validate();
        }
        if (null !== $this->supportedBootModes) {
            $this->supportedBootModes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = null !== $this->attributes ? $this->attributes->toArray($noStream) : $this->attributes;
        }

        if (null !== $this->baselineCredit) {
            $res['BaselineCredit'] = $this->baselineCredit;
        }

        if (null !== $this->cpuArchitecture) {
            $res['CpuArchitecture'] = $this->cpuArchitecture;
        }

        if (null !== $this->cpuCoreCount) {
            $res['CpuCoreCount'] = $this->cpuCoreCount;
        }

        if (null !== $this->cpuOptions) {
            $res['CpuOptions'] = null !== $this->cpuOptions ? $this->cpuOptions->toArray($noStream) : $this->cpuOptions;
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
            $res['EnhancedNetwork'] = null !== $this->enhancedNetwork ? $this->enhancedNetwork->toArray($noStream) : $this->enhancedNetwork;
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

        if (null !== $this->jumboFrameSupport) {
            $res['JumboFrameSupport'] = $this->jumboFrameSupport;
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
            $res['NetworkCards'] = null !== $this->networkCards ? $this->networkCards->toArray($noStream) : $this->networkCards;
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
            $res['SupportedBootModes'] = null !== $this->supportedBootModes ? $this->supportedBootModes->toArray($noStream) : $this->supportedBootModes;
        }

        if (null !== $this->totalEniQueueQuantity) {
            $res['TotalEniQueueQuantity'] = $this->totalEniQueueQuantity;
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
        if (isset($map['Attributes'])) {
            $model->attributes = attributes::fromMap($map['Attributes']);
        }

        if (isset($map['BaselineCredit'])) {
            $model->baselineCredit = $map['BaselineCredit'];
        }

        if (isset($map['CpuArchitecture'])) {
            $model->cpuArchitecture = $map['CpuArchitecture'];
        }

        if (isset($map['CpuCoreCount'])) {
            $model->cpuCoreCount = $map['CpuCoreCount'];
        }

        if (isset($map['CpuOptions'])) {
            $model->cpuOptions = cpuOptions::fromMap($map['CpuOptions']);
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

        if (isset($map['JumboFrameSupport'])) {
            $model->jumboFrameSupport = $map['JumboFrameSupport'];
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
