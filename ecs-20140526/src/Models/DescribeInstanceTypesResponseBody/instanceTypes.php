<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody;

use AlibabaCloud\Tea\Model;

class instanceTypes extends Model
{
    /**
     * @var int
     */
    public $eniTotalQuantity;

    /**
     * @var string
     */
    public $localStorageCategory;

    /**
     * @var int
     */
    public $primaryEniQueueNumber;

    /**
     * @var float
     */
    public $memorySize;

    /**
     * @var int
     */
    public $localStorageCapacity;

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
    public $eniIpv6AddressQuantity;

    /**
     * @var int
     */
    public $maximumQueueNumberPerEni;

    /**
     * @var string
     */
    public $instanceTypeId;

    /**
     * @var int
     */
    public $instanceBandwidthRx;

    /**
     * @var string
     */
    public $GPUSpec;

    /**
     * @var int
     */
    public $secondaryEniQueueNumber;

    /**
     * @var int
     */
    public $instanceBandwidthTx;

    /**
     * @var int
     */
    public $GPUAmount;

    /**
     * @var int
     */
    public $totalEniQueueQuantity;

    /**
     * @var int
     */
    public $initialCredit;

    /**
     * @var int
     */
    public $localStorageAmount;

    /**
     * @var int
     */
    public $baselineCredit;

    /**
     * @var int
     */
    public $instancePpsTx;

    /**
     * @var int
     */
    public $eniPrivateIpAddressQuantity;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var int
     */
    public $cpuCoreCount;

    /**
     * @var int
     */
    public $eniQuantity;

    /**
     * @var bool
     */
    public $eniTrunkSupported;
    protected $_name = [
        'eniTotalQuantity'            => 'EniTotalQuantity',
        'localStorageCategory'        => 'LocalStorageCategory',
        'primaryEniQueueNumber'       => 'PrimaryEniQueueNumber',
        'memorySize'                  => 'MemorySize',
        'localStorageCapacity'        => 'LocalStorageCapacity',
        'instanceFamilyLevel'         => 'InstanceFamilyLevel',
        'instancePpsRx'               => 'InstancePpsRx',
        'eniIpv6AddressQuantity'      => 'EniIpv6AddressQuantity',
        'maximumQueueNumberPerEni'    => 'MaximumQueueNumberPerEni',
        'instanceTypeId'              => 'InstanceTypeId',
        'instanceBandwidthRx'         => 'InstanceBandwidthRx',
        'GPUSpec'                     => 'GPUSpec',
        'secondaryEniQueueNumber'     => 'SecondaryEniQueueNumber',
        'instanceBandwidthTx'         => 'InstanceBandwidthTx',
        'GPUAmount'                   => 'GPUAmount',
        'totalEniQueueQuantity'       => 'TotalEniQueueQuantity',
        'initialCredit'               => 'InitialCredit',
        'localStorageAmount'          => 'LocalStorageAmount',
        'baselineCredit'              => 'BaselineCredit',
        'instancePpsTx'               => 'InstancePpsTx',
        'eniPrivateIpAddressQuantity' => 'EniPrivateIpAddressQuantity',
        'instanceTypeFamily'          => 'InstanceTypeFamily',
        'cpuCoreCount'                => 'CpuCoreCount',
        'eniQuantity'                 => 'EniQuantity',
        'eniTrunkSupported'           => 'EniTrunkSupported',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eniTotalQuantity) {
            $res['EniTotalQuantity'] = $this->eniTotalQuantity;
        }
        if (null !== $this->localStorageCategory) {
            $res['LocalStorageCategory'] = $this->localStorageCategory;
        }
        if (null !== $this->primaryEniQueueNumber) {
            $res['PrimaryEniQueueNumber'] = $this->primaryEniQueueNumber;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->localStorageCapacity) {
            $res['LocalStorageCapacity'] = $this->localStorageCapacity;
        }
        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }
        if (null !== $this->instancePpsRx) {
            $res['InstancePpsRx'] = $this->instancePpsRx;
        }
        if (null !== $this->eniIpv6AddressQuantity) {
            $res['EniIpv6AddressQuantity'] = $this->eniIpv6AddressQuantity;
        }
        if (null !== $this->maximumQueueNumberPerEni) {
            $res['MaximumQueueNumberPerEni'] = $this->maximumQueueNumberPerEni;
        }
        if (null !== $this->instanceTypeId) {
            $res['InstanceTypeId'] = $this->instanceTypeId;
        }
        if (null !== $this->instanceBandwidthRx) {
            $res['InstanceBandwidthRx'] = $this->instanceBandwidthRx;
        }
        if (null !== $this->GPUSpec) {
            $res['GPUSpec'] = $this->GPUSpec;
        }
        if (null !== $this->secondaryEniQueueNumber) {
            $res['SecondaryEniQueueNumber'] = $this->secondaryEniQueueNumber;
        }
        if (null !== $this->instanceBandwidthTx) {
            $res['InstanceBandwidthTx'] = $this->instanceBandwidthTx;
        }
        if (null !== $this->GPUAmount) {
            $res['GPUAmount'] = $this->GPUAmount;
        }
        if (null !== $this->totalEniQueueQuantity) {
            $res['TotalEniQueueQuantity'] = $this->totalEniQueueQuantity;
        }
        if (null !== $this->initialCredit) {
            $res['InitialCredit'] = $this->initialCredit;
        }
        if (null !== $this->localStorageAmount) {
            $res['LocalStorageAmount'] = $this->localStorageAmount;
        }
        if (null !== $this->baselineCredit) {
            $res['BaselineCredit'] = $this->baselineCredit;
        }
        if (null !== $this->instancePpsTx) {
            $res['InstancePpsTx'] = $this->instancePpsTx;
        }
        if (null !== $this->eniPrivateIpAddressQuantity) {
            $res['EniPrivateIpAddressQuantity'] = $this->eniPrivateIpAddressQuantity;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->cpuCoreCount) {
            $res['CpuCoreCount'] = $this->cpuCoreCount;
        }
        if (null !== $this->eniQuantity) {
            $res['EniQuantity'] = $this->eniQuantity;
        }
        if (null !== $this->eniTrunkSupported) {
            $res['EniTrunkSupported'] = $this->eniTrunkSupported;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EniTotalQuantity'])) {
            $model->eniTotalQuantity = $map['EniTotalQuantity'];
        }
        if (isset($map['LocalStorageCategory'])) {
            $model->localStorageCategory = $map['LocalStorageCategory'];
        }
        if (isset($map['PrimaryEniQueueNumber'])) {
            $model->primaryEniQueueNumber = $map['PrimaryEniQueueNumber'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['LocalStorageCapacity'])) {
            $model->localStorageCapacity = $map['LocalStorageCapacity'];
        }
        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }
        if (isset($map['InstancePpsRx'])) {
            $model->instancePpsRx = $map['InstancePpsRx'];
        }
        if (isset($map['EniIpv6AddressQuantity'])) {
            $model->eniIpv6AddressQuantity = $map['EniIpv6AddressQuantity'];
        }
        if (isset($map['MaximumQueueNumberPerEni'])) {
            $model->maximumQueueNumberPerEni = $map['MaximumQueueNumberPerEni'];
        }
        if (isset($map['InstanceTypeId'])) {
            $model->instanceTypeId = $map['InstanceTypeId'];
        }
        if (isset($map['InstanceBandwidthRx'])) {
            $model->instanceBandwidthRx = $map['InstanceBandwidthRx'];
        }
        if (isset($map['GPUSpec'])) {
            $model->GPUSpec = $map['GPUSpec'];
        }
        if (isset($map['SecondaryEniQueueNumber'])) {
            $model->secondaryEniQueueNumber = $map['SecondaryEniQueueNumber'];
        }
        if (isset($map['InstanceBandwidthTx'])) {
            $model->instanceBandwidthTx = $map['InstanceBandwidthTx'];
        }
        if (isset($map['GPUAmount'])) {
            $model->GPUAmount = $map['GPUAmount'];
        }
        if (isset($map['TotalEniQueueQuantity'])) {
            $model->totalEniQueueQuantity = $map['TotalEniQueueQuantity'];
        }
        if (isset($map['InitialCredit'])) {
            $model->initialCredit = $map['InitialCredit'];
        }
        if (isset($map['LocalStorageAmount'])) {
            $model->localStorageAmount = $map['LocalStorageAmount'];
        }
        if (isset($map['BaselineCredit'])) {
            $model->baselineCredit = $map['BaselineCredit'];
        }
        if (isset($map['InstancePpsTx'])) {
            $model->instancePpsTx = $map['InstancePpsTx'];
        }
        if (isset($map['EniPrivateIpAddressQuantity'])) {
            $model->eniPrivateIpAddressQuantity = $map['EniPrivateIpAddressQuantity'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['CpuCoreCount'])) {
            $model->cpuCoreCount = $map['CpuCoreCount'];
        }
        if (isset($map['EniQuantity'])) {
            $model->eniQuantity = $map['EniQuantity'];
        }
        if (isset($map['EniTrunkSupported'])) {
            $model->eniTrunkSupported = $map['EniTrunkSupported'];
        }

        return $model;
    }
}
