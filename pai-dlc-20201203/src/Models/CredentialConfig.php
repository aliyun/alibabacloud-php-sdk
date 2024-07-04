<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class CredentialConfig extends Model
{
    /**
     * @var string
     */
    public $aliyunEnvRoleKey;

    /**
     * @var CredentialConfigItem[]
     */
    public $credentialConfigItems;

    /**
     * @var bool
     */
    public $enableCredentialInject;
    protected $_name = [
        'aliyunEnvRoleKey'       => 'AliyunEnvRoleKey',
        'credentialConfigItems'  => 'CredentialConfigItems',
        'enableCredentialInject' => 'EnableCredentialInject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunEnvRoleKey) {
            $res['AliyunEnvRoleKey'] = $this->aliyunEnvRoleKey;
        }
        if (null !== $this->credentialConfigItems) {
            $res['CredentialConfigItems'] = [];
            if (null !== $this->credentialConfigItems && \is_array($this->credentialConfigItems)) {
                $n = 0;
                foreach ($this->credentialConfigItems as $item) {
                    $res['CredentialConfigItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->enableCredentialInject) {
            $res['EnableCredentialInject'] = $this->enableCredentialInject;
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
        if (isset($map['CredentialConfigItems'])) {
            if (!empty($map['CredentialConfigItems'])) {
                $model->credentialConfigItems = [];
                $n                            = 0;
                foreach ($map['CredentialConfigItems'] as $item) {
                    $model->credentialConfigItems[$n++] = null !== $item ? CredentialConfigItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EnableCredentialInject'])) {
            $model->enableCredentialInject = $map['EnableCredentialInject'];
        }

        return $model;
    }
}
