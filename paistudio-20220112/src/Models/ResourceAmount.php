<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ResourceAmount extends Model
{
    /**
     * @example 100
     *
     * @var string
     */
    public $CPU;

    /**
     * @example 16
     *
     * @var string
     */
    public $GPU;

    /**
     * @example GPU
     *
     * @var string
     */
    public $GPUType;

    /**
     * @example 100Gi
     *
     * @var string
     */
    public $memory;
    protected $_name = [
        'CPU'     => 'CPU',
        'GPU'     => 'GPU',
        'GPUType' => 'GPUType',
        'memory'  => 'Memory',
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
        if (null !== $this->GPUType) {
            $res['GPUType'] = $this->GPUType;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResourceAmount
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
        if (isset($map['GPUType'])) {
            $model->GPUType = $map['GPUType'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
