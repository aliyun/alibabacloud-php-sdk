<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListDeployConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class containerResourceRequest extends Model
{
    /**
     * @var string
     */
    public $cpu;

    /**
     * @var string
     */
    public $gpu;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
     */
    public $storage;
    protected $_name = [
        'cpu'     => 'Cpu',
        'gpu'     => 'Gpu',
        'memory'  => 'Memory',
        'storage' => 'Storage',
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
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerResourceRequest
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
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }

        return $model;
    }
}
