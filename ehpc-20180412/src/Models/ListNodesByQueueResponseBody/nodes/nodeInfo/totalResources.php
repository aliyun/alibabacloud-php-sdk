<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesByQueueResponseBody\nodes\nodeInfo;

use AlibabaCloud\Tea\Model;

class totalResources extends Model
{
    /**
     * @var int
     */
    public $gpu;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $memory;
    protected $_name = [
        'gpu'    => 'Gpu',
        'cpu'    => 'Cpu',
        'memory' => 'Memory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
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
        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
