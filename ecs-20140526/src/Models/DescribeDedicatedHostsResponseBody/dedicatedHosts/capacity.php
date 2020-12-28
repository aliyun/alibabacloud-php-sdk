<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts;

use AlibabaCloud\Tea\Model;

class capacity extends Model
{
    /**
     * @var float
     */
    public $availableMemory;

    /**
     * @var string
     */
    public $localStorageCategory;

    /**
     * @var float
     */
    public $totalMemory;

    /**
     * @var int
     */
    public $totalLocalStorage;

    /**
     * @var int
     */
    public $totalVcpus;

    /**
     * @var int
     */
    public $totalVgpus;

    /**
     * @var int
     */
    public $availableLocalStorage;

    /**
     * @var int
     */
    public $availableVcpus;

    /**
     * @var int
     */
    public $availableVgpus;
    protected $_name = [
        'availableMemory'       => 'AvailableMemory',
        'localStorageCategory'  => 'LocalStorageCategory',
        'totalMemory'           => 'TotalMemory',
        'totalLocalStorage'     => 'TotalLocalStorage',
        'totalVcpus'            => 'TotalVcpus',
        'totalVgpus'            => 'TotalVgpus',
        'availableLocalStorage' => 'AvailableLocalStorage',
        'availableVcpus'        => 'AvailableVcpus',
        'availableVgpus'        => 'AvailableVgpus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableMemory) {
            $res['AvailableMemory'] = $this->availableMemory;
        }
        if (null !== $this->localStorageCategory) {
            $res['LocalStorageCategory'] = $this->localStorageCategory;
        }
        if (null !== $this->totalMemory) {
            $res['TotalMemory'] = $this->totalMemory;
        }
        if (null !== $this->totalLocalStorage) {
            $res['TotalLocalStorage'] = $this->totalLocalStorage;
        }
        if (null !== $this->totalVcpus) {
            $res['TotalVcpus'] = $this->totalVcpus;
        }
        if (null !== $this->totalVgpus) {
            $res['TotalVgpus'] = $this->totalVgpus;
        }
        if (null !== $this->availableLocalStorage) {
            $res['AvailableLocalStorage'] = $this->availableLocalStorage;
        }
        if (null !== $this->availableVcpus) {
            $res['AvailableVcpus'] = $this->availableVcpus;
        }
        if (null !== $this->availableVgpus) {
            $res['AvailableVgpus'] = $this->availableVgpus;
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
        if (isset($map['AvailableMemory'])) {
            $model->availableMemory = $map['AvailableMemory'];
        }
        if (isset($map['LocalStorageCategory'])) {
            $model->localStorageCategory = $map['LocalStorageCategory'];
        }
        if (isset($map['TotalMemory'])) {
            $model->totalMemory = $map['TotalMemory'];
        }
        if (isset($map['TotalLocalStorage'])) {
            $model->totalLocalStorage = $map['TotalLocalStorage'];
        }
        if (isset($map['TotalVcpus'])) {
            $model->totalVcpus = $map['TotalVcpus'];
        }
        if (isset($map['TotalVgpus'])) {
            $model->totalVgpus = $map['TotalVgpus'];
        }
        if (isset($map['AvailableLocalStorage'])) {
            $model->availableLocalStorage = $map['AvailableLocalStorage'];
        }
        if (isset($map['AvailableVcpus'])) {
            $model->availableVcpus = $map['AvailableVcpus'];
        }
        if (isset($map['AvailableVgpus'])) {
            $model->availableVgpus = $map['AvailableVgpus'];
        }

        return $model;
    }
}
