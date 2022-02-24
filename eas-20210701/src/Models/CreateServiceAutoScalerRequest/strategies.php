<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceAutoScalerRequest;

use AlibabaCloud\Tea\Model;

class strategies extends Model
{
    /**
     * @description 最大 replica 数，需要大于MinReplica
     *
     * @var float
     */
    public $cpu;

    /**
     * @description 每个实例支持的最大qps数，超出即扩容
     *
     * @var float
     */
    public $qps;
    protected $_name = [
        'cpu' => 'Cpu',
        'qps' => 'Qps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return strategies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }

        return $model;
    }
}
