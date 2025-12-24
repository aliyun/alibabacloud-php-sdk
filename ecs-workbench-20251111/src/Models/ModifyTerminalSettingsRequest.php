<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20251111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecsworkbench\V20251111\Models\ModifyTerminalSettingsRequest\passwordlessLoginConfig;

class ModifyTerminalSettingsRequest extends Model
{
    /**
     * @var passwordlessLoginConfig
     */
    public $passwordlessLoginConfig;
    protected $_name = [
        'passwordlessLoginConfig' => 'PasswordlessLoginConfig',
    ];

    public function validate()
    {
        if (null !== $this->passwordlessLoginConfig) {
            $this->passwordlessLoginConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passwordlessLoginConfig) {
            $res['PasswordlessLoginConfig'] = null !== $this->passwordlessLoginConfig ? $this->passwordlessLoginConfig->toArray($noStream) : $this->passwordlessLoginConfig;
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
            $model->passwordlessLoginConfig = passwordlessLoginConfig::fromMap($map['PasswordlessLoginConfig']);
        }

        return $model;
    }
}
