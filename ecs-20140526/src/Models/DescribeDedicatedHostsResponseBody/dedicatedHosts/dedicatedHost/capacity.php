<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\capacity\socketCapacities;

class capacity extends Model
{
    /**
     * @var int
     */
    public $availableLocalStorage;
    /**
     * @var float
     */
    public $availableMemory;
    /**
     * @var int
     */
    public $availableVcpus;
    /**
     * @var int
     */
    public $availableVgpus;
    /**
     * @var string
     */
    public $localStorageCategory;
    /**
     * @var socketCapacities
     */
    public $socketCapacities;
    /**
     * @var int
     */
    public $totalLocalStorage;
    /**
     * @var float
     */
    public $totalMemory;
    /**
     * @var int
     */
    public $totalVcpus;
    /**
     * @var int
     */
    public $totalVgpus;
    protected $_name = [
        'availableLocalStorage' => 'AvailableLocalStorage',
        'availableMemory'       => 'AvailableMemory',
        'availableVcpus'        => 'AvailableVcpus',
        'availableVgpus'        => 'AvailableVgpus',
        'localStorageCategory'  => 'LocalStorageCategory',
        'socketCapacities'      => 'SocketCapacities',
        'totalLocalStorage'     => 'TotalLocalStorage',
        'totalMemory'           => 'TotalMemory',
        'totalVcpus'            => 'TotalVcpus',
        'totalVgpus'            => 'TotalVgpus',
    ];

    public function validate()
    {
        if (null !== $this->socketCapacities) {
            $this->socketCapacities->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->socketCapacities) {
            $res['SocketCapacities'] = null !== $this->socketCapacities ? $this->socketCapacities->toArray($noStream) : $this->socketCapacities;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['SocketCapacities'])) {
            $model->socketCapacities = socketCapacities::fromMap($map['SocketCapacities']);
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
