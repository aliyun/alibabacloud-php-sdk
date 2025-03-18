<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy\commandConfig;

use AlibabaCloud\Tea\Model;

class approval extends Model
{
    /**
     * @description An array of commands that can be run only after approval.
     *
     * @var string[]
     */
    public $commands;
    protected $_name = [
        'commands' => 'Commands',
    ];

    public function validate() {}

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
