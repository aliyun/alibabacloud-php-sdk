<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\CredentialConfig\configs;
use AlibabaCloud\Tea\Model;

class CredentialConfig extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $aliyunEnvRoleKey;

    /**
     * @var configs[]
     */
    public $configs;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;
    protected $_name = [
        'aliyunEnvRoleKey' => 'AliyunEnvRoleKey',
        'configs' => 'Configs',
        'enable' => 'Enable',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunEnvRoleKey) {
            $res['AliyunEnvRoleKey'] = $this->aliyunEnvRoleKey;
        }
        if (null !== $this->configs) {
            $res['Configs'] = [];
            if (null !== $this->configs && \is_array($this->configs)) {
                $n = 0;
                foreach ($this->configs as $item) {
                    $res['Configs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CredentialConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunEnvRoleKey'])) {
            $model->aliyunEnvRoleKey = $map['AliyunEnvRoleKey'];
        }
        if (isset($map['Configs'])) {
            if (!empty($map['Configs'])) {
                $model->configs = [];
                $n = 0;
                foreach ($map['Configs'] as $item) {
                    $model->configs[$n++] = null !== $item ? configs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}
