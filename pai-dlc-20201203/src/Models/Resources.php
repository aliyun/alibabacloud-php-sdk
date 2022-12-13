<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class Resources extends Model
{
    /**
     * @example 10
     *
     * @var string
     */
    public $CPU;

    /**
     * @example 8
     *
     * @var string
     */
    public $GPU;

    /**
     * @example 1024（单位GB）
     *
     * @var string
     */
    public $memory;
    protected $_name = [
        'CPU'    => 'CPU',
        'GPU'    => 'GPU',
        'memory' => 'Memory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }
        if (null !== $this->GPU) {
            $res['GPU'] = $this->GPU;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }
        if (isset($map['GPU'])) {
            $model->GPU = $map['GPU'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
