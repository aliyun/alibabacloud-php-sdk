<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListNodesResponseBody\nodes;

use AlibabaCloud\Tea\Model;

class totalResources extends Model
{
    /**
     * @description The number of vCPUs.
     *
     * @example 1
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The number of GPUs.
     *
     * @example 0
     *
     * @var int
     */
    public $gpu;

    /**
     * @description The amount of memory. Unit: GiB.
     *
     * @example 1024
     *
     * @var int
     */
    public $memory;
    protected $_name = [
        'cpu'    => 'Cpu',
        'gpu'    => 'Gpu',
        'memory' => 'Memory',
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
        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return totalResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
