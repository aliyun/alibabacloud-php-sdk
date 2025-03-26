<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\containers\livenessProbe;

use AlibabaCloud\Dara\Model;

class exec extends Model
{
    /**
     * @var string[]
     */
    public $commands;
    protected $_name = [
        'commands' => 'Commands',
    ];

    public function validate()
    {
        if (\is_array($this->commands)) {
            Model::validateArray($this->commands);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commands) {
            if (\is_array($this->commands)) {
                $res['Commands'] = [];
                $n1 = 0;
                foreach ($this->commands as $item1) {
                    $res['Commands'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Commands'])) {
            if (!empty($map['Commands'])) {
                $model->commands = [];
                $n1 = 0;
                foreach ($map['Commands'] as $item1) {
                    $model->commands[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
