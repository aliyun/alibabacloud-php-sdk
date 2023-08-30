<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class GPUConfig extends Model
{
    /**
     * @example 2048
     *
     * @var int
     */
    public $gpuMemorySize;

    /**
     * @example fc.gpu.ampere.1
     *
     * @var string
     */
    public $gpuType;
    protected $_name = [
        'gpuMemorySize' => 'gpuMemorySize',
        'gpuType'       => 'gpuType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gpuMemorySize) {
            $res['gpuMemorySize'] = $this->gpuMemorySize;
        }
        if (null !== $this->gpuType) {
            $res['gpuType'] = $this->gpuType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GPUConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gpuMemorySize'])) {
            $model->gpuMemorySize = $map['gpuMemorySize'];
        }
        if (isset($map['gpuType'])) {
            $model->gpuType = $map['gpuType'];
        }

        return $model;
    }
}
