<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class JobMetric extends Model
{
    /**
     * @var float
     */
    public $totalCpu;

    /**
     * @var int
     */
    public $totalMemoryByte;
    protected $_name = [
        'totalCpu'        => 'totalCpu',
        'totalMemoryByte' => 'totalMemoryByte',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCpu) {
            $res['totalCpu'] = $this->totalCpu;
        }
        if (null !== $this->totalMemoryByte) {
            $res['totalMemoryByte'] = $this->totalMemoryByte;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobMetric
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['totalCpu'])) {
            $model->totalCpu = $map['totalCpu'];
        }
        if (isset($map['totalMemoryByte'])) {
            $model->totalMemoryByte = $map['totalMemoryByte'];
        }

        return $model;
    }
}
