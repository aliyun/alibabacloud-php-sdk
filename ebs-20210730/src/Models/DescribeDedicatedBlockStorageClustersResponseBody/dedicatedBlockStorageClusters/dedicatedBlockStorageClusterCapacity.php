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
     * @description The total capacity of the dedicated block storage cluster that was delivered in disk creation orders. Unit: GB.
     *
     * @example 61440
     *
     * @var int
     */
    public $availableDeviceCapacity;

    /**
     * @description This parameter is displayed only if Thin Provision is enabled.
     *
     * @example 40000.3
     *
     * @var float
     */
    public $availableSpaceCapacity;

    /**
     * @description The capacity of the dedicated block storage cluster that was delivered in orders. Unit: GB.
     *
     * @example 61440
     *
     * @var int
     */
    public $clusterAvailableCapacity;

    /**
     * @description The capacity of the dedicated block storage cluster that is to be delivered in orders. Unit: GB.
     *
     * @example 0
     *
     * @var int
     */
    public $clusterDeliveryCapacity;

    /**
     * @description The to-be-delivered capacity of the dedicated block storage cluster. Unit: GB.
     *
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
     * @description The total capacity of the dedicated block storage cluster that is to be delivered in disk creation orders. Unit: GB.
     *
     * @example 61440
     *
     * @var int
     */
    public $totalDeviceCapacity;

    /**
     * @description This parameter is displayed only if Thin Provision is enabled.
     *
     * @example 73728
     *
     * @var int
     */
    public $totalSpaceCapacity;

    /**
     * @description The used capacity of the dedicated block storage cluster. Unit: GB.
     *
     * @example 1440
     *
     * @var int
     */
    public $usedCapacity;

    /**
     * @description The capacity of the dedicated block storage cluster that was used to create disks. Unit: GB.
     *
     * @example 32000
     *
     * @var int
     */
    public $usedDeviceCapacity;

    /**
     * @description This parameter is displayed only if Thin Provision is enabled.
     *
     * @example 33727.7
     *
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
