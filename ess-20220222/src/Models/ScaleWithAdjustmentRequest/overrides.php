<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentRequest\overrides\containerOverrides;

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
        if (\is_array($this->containerOverrides)) {
            Model::validateArray($this->containerOverrides);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerOverrides) {
            if (\is_array($this->containerOverrides)) {
                $res['ContainerOverrides'] = [];
                $n1                        = 0;
                foreach ($this->containerOverrides as $item1) {
                    $res['ContainerOverrides'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerOverrides'])) {
            if (!empty($map['ContainerOverrides'])) {
                $model->containerOverrides = [];
                $n1                        = 0;
                foreach ($map['ContainerOverrides'] as $item1) {
                    $model->containerOverrides[$n1++] = containerOverrides::fromMap($item1);
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
