<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

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
        'aliyunEnvRoleKey' => 'AliyunEnvRoleKey',
        'credentialConfigItems' => 'CredentialConfigItems',
        'enableCredentialInject' => 'EnableCredentialInject',
    ];

    public function validate()
    {
        if (\is_array($this->credentialConfigItems)) {
            Model::validateArray($this->credentialConfigItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunEnvRoleKey) {
            $res['AliyunEnvRoleKey'] = $this->aliyunEnvRoleKey;
        }

        if (null !== $this->credentialConfigItems) {
            if (\is_array($this->credentialConfigItems)) {
                $res['CredentialConfigItems'] = [];
                $n1 = 0;
                foreach ($this->credentialConfigItems as $item1) {
                    $res['CredentialConfigItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->enableCredentialInject) {
            $res['EnableCredentialInject'] = $this->enableCredentialInject;
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

        if (isset($map['CredentialConfigItems'])) {
            if (!empty($map['CredentialConfigItems'])) {
                $model->credentialConfigItems = [];
                $n1 = 0;
                foreach ($map['CredentialConfigItems'] as $item1) {
                    $model->credentialConfigItems[$n1++] = CredentialConfigItem::fromMap($item1);
                }
            }
        }

        if (isset($map['EnableCredentialInject'])) {
            $model->enableCredentialInject = $map['EnableCredentialInject'];
        }

        return $model;
    }
}
