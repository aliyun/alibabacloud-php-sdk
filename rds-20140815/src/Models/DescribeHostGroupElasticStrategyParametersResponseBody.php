<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeHostGroupElasticStrategyParametersResponseBody extends Model
{
    /**
     * @description The CPU utilization of the instance. Unit: percentage.
     *
     * @example 20
     *
     * @var int
     */
    public $cpuShar;

    /**
     * @description The number of CPU cores used by the instance. Unit: cores.
     *
     * @example 4
     *
     * @var int
     */
    public $cpuZoom;

    /**
     * @description The number of I/O requests.
     *
     * @example 10
     *
     * @var int
     */
    public $iopsZoom;

    /**
     * @description The maximum number of concurrent connections supported by the instance type.
     *
     * @example 30
     *
     * @var int
     */
    public $maxConnZoom;

    /**
     * @description The total memory size of the instance in the dedicated cluster. Unit: MB.
     *
     * @example 1000
     *
     * @var int
     */
    public $memoryZoom;

    /**
     * @description The request ID.
     *
     * @example 60F9A12A-16B8-4728-B099-4CA38D32C31C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cpuShar'     => 'CpuShar',
        'cpuZoom'     => 'CpuZoom',
        'iopsZoom'    => 'IopsZoom',
        'maxConnZoom' => 'MaxConnZoom',
        'memoryZoom'  => 'MemoryZoom',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuShar) {
            $res['CpuShar'] = $this->cpuShar;
        }
        if (null !== $this->cpuZoom) {
            $res['CpuZoom'] = $this->cpuZoom;
        }
        if (null !== $this->iopsZoom) {
            $res['IopsZoom'] = $this->iopsZoom;
        }
        if (null !== $this->maxConnZoom) {
            $res['MaxConnZoom'] = $this->maxConnZoom;
        }
        if (null !== $this->memoryZoom) {
            $res['MemoryZoom'] = $this->memoryZoom;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHostGroupElasticStrategyParametersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuShar'])) {
            $model->cpuShar = $map['CpuShar'];
        }
        if (isset($map['CpuZoom'])) {
            $model->cpuZoom = $map['CpuZoom'];
        }
        if (isset($map['IopsZoom'])) {
            $model->iopsZoom = $map['IopsZoom'];
        }
        if (isset($map['MaxConnZoom'])) {
            $model->maxConnZoom = $map['MaxConnZoom'];
        }
        if (isset($map['MemoryZoom'])) {
            $model->memoryZoom = $map['MemoryZoom'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
