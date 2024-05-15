<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDiskSpecRequest;

use AlibabaCloud\Tea\Model;

class performanceControlOptions extends Model
{
    /**
     * @description The new IOPS rate of the disk. You can modify the IOPS rate of only disks in dedicated block storage clusters.
     *
     * For more information, see [Block storage performance](https://help.aliyun.com/document_detail/25382.html).
     * @example 2000
     *
     * @var int
     */
    public $IOPS;

    /**
     * @description Specifies whether to reset the IOPS rate and throughput of the disk. This parameter takes effect only when the disk belongs to a dedicated block storage cluster.
     *
     * Set the value to All, which indicates that the IOPS rate and throughput of the disk are reset to the initial values.
     * @example All
     *
     * @var string
     */
    public $recover;

    /**
     * @description The new throughput of the disk. You can modify the throughput of only disks in dedicated block storage clusters. Unit: MB/s.
     *
     * For more information, see [Block storage performance](https://help.aliyun.com/document_detail/25382.html).
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
