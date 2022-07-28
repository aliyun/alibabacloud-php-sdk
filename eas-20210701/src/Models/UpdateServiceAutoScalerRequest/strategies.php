<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceAutoScalerRequest;

use AlibabaCloud\Tea\Model;

class strategies extends Model
{
    /**
     * @var float
     */
    public $cpu;

    /**
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
