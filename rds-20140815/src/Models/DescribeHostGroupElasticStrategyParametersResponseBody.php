<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeHostGroupElasticStrategyParametersResponseBody extends Model
{
    /**
     * @var int
     */
    public $cpuShar;

    /**
     * @var int
     */
    public $cpuZoom;

    /**
     * @var int
     */
    public $iopsZoom;

    /**
     * @var int
     */
    public $maxConnZoom;

    /**
     * @var int
     */
    public $memoryZoom;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cpuShar' => 'CpuShar',
        'cpuZoom' => 'CpuZoom',
        'iopsZoom' => 'IopsZoom',
        'maxConnZoom' => 'MaxConnZoom',
        'memoryZoom' => 'MemoryZoom',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
