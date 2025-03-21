<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNetTestTaskRequest;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNetTestTaskRequest\commTest\hosts;
use AlibabaCloud\Tea\Model;

/**
 * @internal
 *
 * @coversNothing
 */
class commTest extends Model
{
    /**
     * @description Number of GPUs
     *
     * @example 1
     *
     * @var int
     */
    public $GPUNum;

    /**
     * @description Resource ID
     *
     * @var hosts[]
     */
    public $hosts;

    /**
     * @description Communication library model
     *
     * @example intention_v4
     *
     * @var string
     */
    public $model;

    /**
     * @description Communication library test category: ACCL or NCCL
     *
     * @example ACCL
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'GPUNum' => 'GPUNum',
        'hosts' => 'Hosts',
        'model' => 'Model',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->GPUNum) {
            $res['GPUNum'] = $this->GPUNum;
        }
        if (null !== $this->hosts) {
            $res['Hosts'] = [];
            if (null !== $this->hosts && \is_array($this->hosts)) {
                $n = 0;
                foreach ($this->hosts as $item) {
                    $res['Hosts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commTest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GPUNum'])) {
            $model->GPUNum = $map['GPUNum'];
        }
        if (isset($map['Hosts'])) {
            if (!empty($map['Hosts'])) {
                $model->hosts = [];
                $n = 0;
                foreach ($map['Hosts'] as $item) {
                    $model->hosts[$n++] = null !== $item ? hosts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
