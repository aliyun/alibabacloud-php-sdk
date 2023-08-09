<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDiskSpecRequest;

use AlibabaCloud\Tea\Model;

class performanceControlOptions extends Model
{
    /**
     * @description The new IOPS of the disk. You can modify the IOPS of only disks in dedicated block storage clusters.
     *
     * For more information, see [EBS performance](~~25382~~).
     * @example 2000
     *
     * @var int
     */
    public $IOPS;

    /**
     * @description The new IOPS and throughput of the disk. This parameter is valid only when the disk is in a dedicated block storage cluster.
     *
     * Set the value to All, which indicates that the IOPS and throughput of the disk is reset to the initial values.
     * @example All
     *
     * @var string
     */
    public $recover;

    /**
     * @description The new throughput of the disk. You can modify the throughput of only disks in dedicated block storage clusters. Unit: MB/s.
     *
     * For more information, see [EBS performance](~~25382~~).
     * @example 200
     *
     * @var int
     */
    public $throughput;
    protected $_name = [
        'IOPS'       => 'IOPS',
        'recover'    => 'Recover',
        'throughput' => 'Throughput',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IOPS) {
            $res['IOPS'] = $this->IOPS;
        }
        if (null !== $this->recover) {
            $res['Recover'] = $this->recover;
        }
        if (null !== $this->throughput) {
            $res['Throughput'] = $this->throughput;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performanceControlOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IOPS'])) {
            $model->IOPS = $map['IOPS'];
        }
        if (isset($map['Recover'])) {
            $model->recover = $map['Recover'];
        }
        if (isset($map['Throughput'])) {
            $model->throughput = $map['Throughput'];
        }

        return $model;
    }
}
