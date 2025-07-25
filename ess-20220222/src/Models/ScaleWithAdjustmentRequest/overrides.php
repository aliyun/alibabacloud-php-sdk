<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentRequest;

use AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentRequest\overrides\containerOverrides;
use AlibabaCloud\Tea\Model;

class overrides extends Model
{
    /**
     * @description The list of parameters that you want to use to override specific configurations for containers.
     *
     * @var containerOverrides[]
     */
    public $containerOverrides;

    /**
     * @description The number of vCPUs that you want to allocate to the instance.
     *
     * @example 2
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The memory size that you want to allocate to the instance. Unit: GiB.
     *
     * @example 4
     *
     * @var float
     */
    public $memory;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'containerOverrides' => 'ContainerOverrides',
        'cpu' => 'Cpu',
        'memory' => 'Memory',
        'userData' => 'UserData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerOverrides) {
            $res['ContainerOverrides'] = [];
            if (null !== $this->containerOverrides && \is_array($this->containerOverrides)) {
                $n = 0;
                foreach ($this->containerOverrides as $item) {
                    $res['ContainerOverrides'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return overrides
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerOverrides'])) {
            if (!empty($map['ContainerOverrides'])) {
                $model->containerOverrides = [];
                $n = 0;
                foreach ($map['ContainerOverrides'] as $item) {
                    $model->containerOverrides[$n++] = null !== $item ? containerOverrides::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
