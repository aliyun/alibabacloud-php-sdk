<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\capacity\socketCapacities;

use AlibabaCloud\Tea\Model;

class socketCapacity extends Model
{
    /**
     * @var float
     */
    public $availableMemory;

    /**
     * @var int
     */
    public $availableVcpu;

    /**
     * @var int
     */
    public $socketId;

    /**
     * @var float
     */
    public $totalMemory;

    /**
     * @var int
     */
    public $totalVcpu;
    protected $_name = [
        'availableMemory' => 'AvailableMemory',
        'availableVcpu'   => 'AvailableVcpu',
        'socketId'        => 'SocketId',
        'totalMemory'     => 'TotalMemory',
        'totalVcpu'       => 'TotalVcpu',
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
        if (null !== $this->availableVcpu) {
            $res['AvailableVcpu'] = $this->availableVcpu;
        }
        if (null !== $this->socketId) {
            $res['SocketId'] = $this->socketId;
        }
        if (null !== $this->totalMemory) {
            $res['TotalMemory'] = $this->totalMemory;
        }
        if (null !== $this->totalVcpu) {
            $res['TotalVcpu'] = $this->totalVcpu;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return socketCapacity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableMemory'])) {
            $model->availableMemory = $map['AvailableMemory'];
        }
        if (isset($map['AvailableVcpu'])) {
            $model->availableVcpu = $map['AvailableVcpu'];
        }
        if (isset($map['SocketId'])) {
            $model->socketId = $map['SocketId'];
        }
        if (isset($map['TotalMemory'])) {
            $model->totalMemory = $map['TotalMemory'];
        }
        if (isset($map['TotalVcpu'])) {
            $model->totalVcpu = $map['TotalVcpu'];
        }

        return $model;
    }
}
