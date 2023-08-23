<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers\readinessProbe;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commands) {
            $res['Commands'] = $this->commands;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return exec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Commands'])) {
            if (!empty($map['Commands'])) {
                $model->commands = $map['Commands'];
            }
        }

        return $model;
    }
}
