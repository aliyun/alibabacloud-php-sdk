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
        'cpu' => 'cpu',
        'qps' => 'qps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }
        if (null !== $this->qps) {
            $res['qps'] = $this->qps;
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
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }
        if (isset($map['qps'])) {
            $model->qps = $map['qps'];
        }

        return $model;
    }
}
