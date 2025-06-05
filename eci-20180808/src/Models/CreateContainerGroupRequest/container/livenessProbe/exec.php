<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\livenessProbe;

use AlibabaCloud\Dara\Model;

class exec extends Model
{
    /**
     * @var string[]
     */
    public $command;
    protected $_name = [
        'command' => 'Command',
    ];

    public function validate()
    {
        if (\is_array($this->command)) {
            Model::validateArray($this->command);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->command) {
            if (\is_array($this->command)) {
                $res['Command'] = [];
                $n1 = 0;
                foreach ($this->command as $item1) {
                    $res['Command'][$n1++] = $item1;
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
        if (isset($map['Command'])) {
            if (!empty($map['Command'])) {
                $model->command = [];
                $n1 = 0;
                foreach ($map['Command'] as $item1) {
                    $model->command[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
