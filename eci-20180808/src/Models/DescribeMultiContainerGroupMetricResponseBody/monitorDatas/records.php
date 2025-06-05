<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\records\containers;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\records\CPU;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\records\disk;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\records\filesystem;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\records\memory;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\records\network;

class records extends Model
{
    /**
     * @var CPU
     */
    public $CPU;

    /**
     * @var containers[]
     */
    public $containers;

    /**
     * @var disk[]
     */
    public $disk;

    /**
     * @var filesystem[]
     */
    public $filesystem;

    /**
     * @var memory
     */
    public $memory;

    /**
     * @var network
     */
    public $network;

    /**
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'CPU' => 'CPU',
        'containers' => 'Containers',
        'disk' => 'Disk',
        'filesystem' => 'Filesystem',
        'memory' => 'Memory',
        'network' => 'Network',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        if (null !== $this->CPU) {
            $this->CPU->validate();
        }
        if (\is_array($this->containers)) {
            Model::validateArray($this->containers);
        }
        if (\is_array($this->disk)) {
            Model::validateArray($this->disk);
        }
        if (\is_array($this->filesystem)) {
            Model::validateArray($this->filesystem);
        }
        if (null !== $this->memory) {
            $this->memory->validate();
        }
        if (null !== $this->network) {
            $this->network->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = null !== $this->CPU ? $this->CPU->toArray($noStream) : $this->CPU;
        }

        if (null !== $this->containers) {
            if (\is_array($this->containers)) {
                $res['Containers'] = [];
                $n1 = 0;
                foreach ($this->containers as $item1) {
                    $res['Containers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->disk) {
            if (\is_array($this->disk)) {
                $res['Disk'] = [];
                $n1 = 0;
                foreach ($this->disk as $item1) {
                    $res['Disk'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->filesystem) {
            if (\is_array($this->filesystem)) {
                $res['Filesystem'] = [];
                $n1 = 0;
                foreach ($this->filesystem as $item1) {
                    $res['Filesystem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->memory) {
            $res['Memory'] = null !== $this->memory ? $this->memory->toArray($noStream) : $this->memory;
        }

        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toArray($noStream) : $this->network;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['CPU'])) {
            $model->CPU = CPU::fromMap($map['CPU']);
        }

        if (isset($map['Containers'])) {
            if (!empty($map['Containers'])) {
                $model->containers = [];
                $n1 = 0;
                foreach ($map['Containers'] as $item1) {
                    $model->containers[$n1++] = containers::fromMap($item1);
                }
            }
        }

        if (isset($map['Disk'])) {
            if (!empty($map['Disk'])) {
                $model->disk = [];
                $n1 = 0;
                foreach ($map['Disk'] as $item1) {
                    $model->disk[$n1++] = disk::fromMap($item1);
                }
            }
        }

        if (isset($map['Filesystem'])) {
            if (!empty($map['Filesystem'])) {
                $model->filesystem = [];
                $n1 = 0;
                foreach ($map['Filesystem'] as $item1) {
                    $model->filesystem[$n1++] = filesystem::fromMap($item1);
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
