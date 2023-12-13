<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records\containers;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records\CPU;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records\disk;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records\filesystem;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records\memory;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponseBody\records\network;
use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description The monitoring data of vCPUs.
     *
     * @var CPU
     */
    public $CPU;

    /**
     * @description The monitoring data of containers.
     *
     * @var containers[]
     */
    public $containers;

    /**
     * @description The monitoring data of disks.
     *
     * @var disk[]
     */
    public $disk;

    /**
     * @description The monitoring data of file system partitions.
     *
     * @var filesystem[]
     */
    public $filesystem;

    /**
     * @description The monitoring data of the memory.
     *
     * @var memory
     */
    public $memory;

    /**
     * @description The monitoring data of the network.
     *
     * @var network
     */
    public $network;

    /**
     * @description The time when the monitoring data entry was collected. The time follows the RFC 3339 format.
     *
     * @example 2021-08-25T16:22:00.000+08:00
     *
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'CPU'        => 'CPU',
        'containers' => 'Containers',
        'disk'       => 'Disk',
        'filesystem' => 'Filesystem',
        'memory'     => 'Memory',
        'network'    => 'Network',
        'timestamp'  => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = null !== $this->CPU ? $this->CPU->toMap() : null;
        }
        if (null !== $this->containers) {
            $res['Containers'] = [];
            if (null !== $this->containers && \is_array($this->containers)) {
                $n = 0;
                foreach ($this->containers as $item) {
                    $res['Containers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->disk) {
            $res['Disk'] = [];
            if (null !== $this->disk && \is_array($this->disk)) {
                $n = 0;
                foreach ($this->disk as $item) {
                    $res['Disk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->filesystem) {
            $res['Filesystem'] = [];
            if (null !== $this->filesystem && \is_array($this->filesystem)) {
                $n = 0;
                foreach ($this->filesystem as $item) {
                    $res['Filesystem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->memory) {
            $res['Memory'] = null !== $this->memory ? $this->memory->toMap() : null;
        }
        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toMap() : null;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPU'])) {
            $model->CPU = CPU::fromMap($map['CPU']);
        }
        if (isset($map['Containers'])) {
            if (!empty($map['Containers'])) {
                $model->containers = [];
                $n                 = 0;
                foreach ($map['Containers'] as $item) {
                    $model->containers[$n++] = null !== $item ? containers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Disk'])) {
            if (!empty($map['Disk'])) {
                $model->disk = [];
                $n           = 0;
                foreach ($map['Disk'] as $item) {
                    $model->disk[$n++] = null !== $item ? disk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Filesystem'])) {
            if (!empty($map['Filesystem'])) {
                $model->filesystem = [];
                $n                 = 0;
                foreach ($map['Filesystem'] as $item) {
                    $model->filesystem[$n++] = null !== $item ? filesystem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Memory'])) {
            $model->memory = memory::fromMap($map['Memory']);
        }
        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
