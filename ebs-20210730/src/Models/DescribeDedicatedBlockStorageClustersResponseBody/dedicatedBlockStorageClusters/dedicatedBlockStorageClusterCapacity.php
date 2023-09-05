<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClustersResponseBody\dedicatedBlockStorageClusters;

use AlibabaCloud\Tea\Model;

class dedicatedBlockStorageClusterCapacity extends Model
{
    /**
     * @description The available capacity of the dedicated block storage cluster. Unit: GiB.
     *
     * @example 61440
     *
     * @var int
     */
    public $availableCapacity;

    /**
     * @var int
     */
    public $availableDeviceCapacity;

    /**
     * @var float
     */
    public $availableSpaceCapacity;

    /**
     * @var int
     */
    public $clusterAvailableCapacity;

    /**
     * @var int
     */
    public $clusterDeliveryCapacity;

    /**
     * @example 0
     *
     * @var int
     */
    public $deliveryCapacity;

    /**
     * @description The total capacity of the dedicated block storage cluster. Unit: GiB.
     *
     * @example 61440
     *
     * @var int
     */
    public $totalCapacity;

    /**
     * @var int
     */
    public $totalDeviceCapacity;

    /**
     * @var int
     */
    public $totalSpaceCapacity;

    /**
     * @example 1440
     *
     * @var int
     */
    public $usedCapacity;

    /**
     * @var int
     */
    public $usedDeviceCapacity;

    /**
     * @var float
     */
    public $usedSpaceCapacity;
    protected $_name = [
        'availableCapacity'        => 'AvailableCapacity',
        'availableDeviceCapacity'  => 'AvailableDeviceCapacity',
        'availableSpaceCapacity'   => 'AvailableSpaceCapacity',
        'clusterAvailableCapacity' => 'ClusterAvailableCapacity',
        'clusterDeliveryCapacity'  => 'ClusterDeliveryCapacity',
        'deliveryCapacity'         => 'DeliveryCapacity',
        'totalCapacity'            => 'TotalCapacity',
        'totalDeviceCapacity'      => 'TotalDeviceCapacity',
        'totalSpaceCapacity'       => 'TotalSpaceCapacity',
        'usedCapacity'             => 'UsedCapacity',
        'usedDeviceCapacity'       => 'UsedDeviceCapacity',
        'usedSpaceCapacity'        => 'UsedSpaceCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableCapacity) {
            $res['AvailableCapacity'] = $this->availableCapacity;
        }
        if (null !== $this->availableDeviceCapacity) {
            $res['AvailableDeviceCapacity'] = $this->availableDeviceCapacity;
        }
        if (null !== $this->availableSpaceCapacity) {
            $res['AvailableSpaceCapacity'] = $this->availableSpaceCapacity;
        }
        if (null !== $this->clusterAvailableCapacity) {
            $res['ClusterAvailableCapacity'] = $this->clusterAvailableCapacity;
        }
        if (null !== $this->clusterDeliveryCapacity) {
            $res['ClusterDeliveryCapacity'] = $this->clusterDeliveryCapacity;
        }
        if (null !== $this->deliveryCapacity) {
            $res['DeliveryCapacity'] = $this->deliveryCapacity;
        }
        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
        }
        if (null !== $this->totalDeviceCapacity) {
            $res['TotalDeviceCapacity'] = $this->totalDeviceCapacity;
        }
        if (null !== $this->totalSpaceCapacity) {
            $res['TotalSpaceCapacity'] = $this->totalSpaceCapacity;
        }
        if (null !== $this->usedCapacity) {
            $res['UsedCapacity'] = $this->usedCapacity;
        }
        if (null !== $this->usedDeviceCapacity) {
            $res['UsedDeviceCapacity'] = $this->usedDeviceCapacity;
        }
        if (null !== $this->usedSpaceCapacity) {
            $res['UsedSpaceCapacity'] = $this->usedSpaceCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedBlockStorageClusterCapacity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableCapacity'])) {
            $model->availableCapacity = $map['AvailableCapacity'];
        }
        if (isset($map['AvailableDeviceCapacity'])) {
            $model->availableDeviceCapacity = $map['AvailableDeviceCapacity'];
        }
        if (isset($map['AvailableSpaceCapacity'])) {
            $model->availableSpaceCapacity = $map['AvailableSpaceCapacity'];
        }
        if (isset($map['ClusterAvailableCapacity'])) {
            $model->clusterAvailableCapacity = $map['ClusterAvailableCapacity'];
        }
        if (isset($map['ClusterDeliveryCapacity'])) {
            $model->clusterDeliveryCapacity = $map['ClusterDeliveryCapacity'];
        }
        if (isset($map['DeliveryCapacity'])) {
            $model->deliveryCapacity = $map['DeliveryCapacity'];
        }
        if (isset($map['TotalCapacity'])) {
            $model->totalCapacity = $map['TotalCapacity'];
        }
        if (isset($map['TotalDeviceCapacity'])) {
            $model->totalDeviceCapacity = $map['TotalDeviceCapacity'];
        }
        if (isset($map['TotalSpaceCapacity'])) {
            $model->totalSpaceCapacity = $map['TotalSpaceCapacity'];
        }
        if (isset($map['UsedCapacity'])) {
            $model->usedCapacity = $map['UsedCapacity'];
        }
        if (isset($map['UsedDeviceCapacity'])) {
            $model->usedDeviceCapacity = $map['UsedDeviceCapacity'];
        }
        if (isset($map['UsedSpaceCapacity'])) {
            $model->usedSpaceCapacity = $map['UsedSpaceCapacity'];
        }

        return $model;
    }
}
