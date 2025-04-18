<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CredentialConfig\configs;

class CredentialConfig extends Model
{
    /**
     * @var string
     */
    public $aliyunEnvRoleKey;

    /**
     * @var configs[]
     */
    public $configs;

    /**
     * @var bool
     */
    public $enable;
    protected $_name = [
        'aliyunEnvRoleKey' => 'AliyunEnvRoleKey',
        'configs' => 'Configs',
        'enable' => 'Enable',
    ];

    public function validate()
    {
        if (\is_array($this->configs)) {
            Model::validateArray($this->configs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunEnvRoleKey) {
            $res['AliyunEnvRoleKey'] = $this->aliyunEnvRoleKey;
        }

        if (null !== $this->configs) {
            if (\is_array($this->configs)) {
                $res['Configs'] = [];
                $n1 = 0;
                foreach ($this->configs as $item1) {
                    $res['Configs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
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
        if (isset($map['AliyunEnvRoleKey'])) {
            $model->aliyunEnvRoleKey = $map['AliyunEnvRoleKey'];
        }

        if (isset($map['Configs'])) {
            if (!empty($map['Configs'])) {
                $model->configs = [];
                $n1 = 0;
                foreach ($map['Configs'] as $item1) {
                    $model->configs[$n1++] = configs::fromMap($item1);
                }
            }
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}
