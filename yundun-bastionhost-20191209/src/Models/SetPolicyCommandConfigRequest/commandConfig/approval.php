<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyCommandConfigRequest\commandConfig;

use AlibabaCloud\Tea\Model;

class approval extends Model
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
     * @return approval
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
