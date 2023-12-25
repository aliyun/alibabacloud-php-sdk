<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentRequest;

use AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentRequest\overrides\containerOverrides;
use AlibabaCloud\Tea\Model;

class overrides extends Model
{
    /**
     * @var containerOverrides[]
     */
    public $containerOverrides;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var float
     */
    public $memory;
    protected $_name = [
        'containerOverrides' => 'ContainerOverrides',
        'cpu'                => 'Cpu',
        'memory'             => 'Memory',
    ];

    public function validate()
    {
    }

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
                $n                         = 0;
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

        return $model;
    }
}
