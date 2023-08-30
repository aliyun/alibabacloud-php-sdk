<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class resourceSpec extends Model
{
    /**
     * @description The bandwidth of the server.
     *
     * @example 5
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The number of vCPUs.
     *
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The category of the disk. Valid values:
     *
     *   ESSD: an enhanced SSD (ESSD) at performance level 0 (PL0).
     *   SSD: a standard SSD.
     *   CLOUD_EFFICIENCY: an ultra disk.
     *
     * @example cloud_efficiency
     *
     * @var string
     */
    public $diskCategory;

    /**
     * @description The disk size.
     *
     * @example 60
     *
     * @var int
     */
    public $diskSize;

    /**
     * @description The amount of the traffic.
     *
     *   A value of 0 indicates that the server is a bandwidth-based server.
     *   A value of none-zero indicates that the server is a data transfer plan-based server.
     *
     * @example 818
     *
     * @var float
     */
    public $flow;

    /**
     * @description The memory size.
     *
     * @example 2
     *
     * @var float
     */
    public $memory;
    protected $_name = [
        'bandwidth'    => 'Bandwidth',
        'cpu'          => 'Cpu',
        'diskCategory' => 'DiskCategory',
        'diskSize'     => 'DiskSize',
        'flow'         => 'Flow',
        'memory'       => 'Memory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
