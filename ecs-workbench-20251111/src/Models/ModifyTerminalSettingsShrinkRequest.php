<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20251111\Models;

use AlibabaCloud\Dara\Model;

class ModifyTerminalSettingsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $passwordlessLoginConfigShrink;
    protected $_name = [
        'passwordlessLoginConfigShrink' => 'PasswordlessLoginConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passwordlessLoginConfigShrink) {
            $res['PasswordlessLoginConfig'] = $this->passwordlessLoginConfigShrink;
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
        if (isset($map['PasswordlessLoginConfig'])) {
            $model->passwordlessLoginConfigShrink = $map['PasswordlessLoginConfig'];
        }

        return $model;
    }
}
