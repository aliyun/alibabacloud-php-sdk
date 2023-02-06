<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost;

use AlibabaCloud\Tea\Model;

class capacity extends Model
{
    /**
     * @description The amount of available space on the local disks. Unit: GiB.
     *
     * @example 65
     *
     * @var int
     */
    public $availableLocalStorage;

    /**
     * @description The amount of available memory space. Unit: GiB.
     *
     * @example 25
     *
     * @var float
     */
    public $availableMemory;

    /**
     * @description The number of available vCPUs.
     *
     * @example 5
     *
     * @var int
     */
    public $availableVcpus;

    /**
     * @description The number of available vGPUs.
     *
     * @example 2
     *
     * @var int
     */
    public $availableVgpus;

    /**
     * @description The category of the local disks.
     *
     * @example i2
     *
     * @var string
     */
    public $localStorageCategory;

    /**
     * @description The total capacity of the local disks. Unit: GiB.
     *
     * @example 512
     *
     * @var int
     */
    public $totalLocalStorage;

    /**
     * @description The total capacity of the memory. Unit: GiB.
     *
     * @example 1024
     *
     * @var float
     */
    public $totalMemory;

    /**
     * @description The total number of vCPUs.
     *
     * @example 56
     *
     * @var int
     */
    public $totalVcpus;

    /**
     * @description The total number of vGPUs.
     *
     * @example 10
     *
     * @var int
     */
    public $totalVgpus;
    protected $_name = [
        'availableLocalStorage' => 'AvailableLocalStorage',
        'availableMemory'       => 'AvailableMemory',
        'availableVcpus'        => 'AvailableVcpus',
        'availableVgpus'        => 'AvailableVgpus',
        'localStorageCategory'  => 'LocalStorageCategory',
        'totalLocalStorage'     => 'TotalLocalStorage',
        'totalMemory'           => 'TotalMemory',
        'totalVcpus'            => 'TotalVcpus',
        'totalVgpus'            => 'TotalVgpus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableLocalStorage) {
            $res['AvailableLocalStorage'] = $this->availableLocalStorage;
        }
        if (null !== $this->availableMemory) {
            $res['AvailableMemory'] = $this->availableMemory;
        }
        if (null !== $this->availableVcpus) {
            $res['AvailableVcpus'] = $this->availableVcpus;
        }
        if (null !== $this->availableVgpus) {
            $res['AvailableVgpus'] = $this->availableVgpus;
        }
        if (null !== $this->localStorageCategory) {
            $res['LocalStorageCategory'] = $this->localStorageCategory;
        }
        if (null !== $this->totalLocalStorage) {
            $res['TotalLocalStorage'] = $this->totalLocalStorage;
        }
        if (null !== $this->totalMemory) {
            $res['TotalMemory'] = $this->totalMemory;
        }
        if (null !== $this->totalVcpus) {
            $res['TotalVcpus'] = $this->totalVcpus;
        }
        if (null !== $this->totalVgpus) {
            $res['TotalVgpus'] = $this->totalVgpus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableLocalStorage'])) {
            $model->availableLocalStorage = $map['AvailableLocalStorage'];
        }
        if (isset($map['AvailableMemory'])) {
            $model->availableMemory = $map['AvailableMemory'];
        }
        if (isset($map['AvailableVcpus'])) {
            $model->availableVcpus = $map['AvailableVcpus'];
        }
        if (isset($map['AvailableVgpus'])) {
            $model->availableVgpus = $map['AvailableVgpus'];
        }
        if (isset($map['LocalStorageCategory'])) {
            $model->localStorageCategory = $map['LocalStorageCategory'];
        }
        if (isset($map['TotalLocalStorage'])) {
            $model->totalLocalStorage = $map['TotalLocalStorage'];
        }
        if (isset($map['TotalMemory'])) {
            $model->totalMemory = $map['TotalMemory'];
        }
        if (isset($map['TotalVcpus'])) {
            $model->totalVcpus = $map['TotalVcpus'];
        }
        if (isset($map['TotalVgpus'])) {
            $model->totalVgpus = $map['TotalVgpus'];
        }

        return $model;
    }
}
