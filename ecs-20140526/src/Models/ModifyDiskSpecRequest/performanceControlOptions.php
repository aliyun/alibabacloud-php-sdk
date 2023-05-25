<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDiskSpecRequest;

use AlibabaCloud\Tea\Model;

class performanceControlOptions extends Model
{
    /**
     * @description 目标云盘IOPS。仅支持修改专属存储集群云盘IOPS。
     *
     * 更多信息，请参见[云盘性能](~~25382~~)。
     * @example 2000
     *
     * @var int
     */
    public $IOPS;

    /**
     * @description 重置云盘性能，仅支持专属存储集群云盘。
     *
     * 目前仅支持设置为All（重置云盘IOPS和吞吐量到初始值）。
     * @example All
     *
     * @var string
     */
    public $recover;

    /**
     * @description 目标云盘吞吐量，仅支持修改专属存储集群云盘吞吐量，单位MB/s。
     *
     * 更多信息，请参见[云盘性能](~~25382~~)。
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
