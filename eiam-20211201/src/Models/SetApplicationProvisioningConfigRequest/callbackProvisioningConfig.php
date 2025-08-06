<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningConfigRequest;

use AlibabaCloud\Dara\Model;

class callbackProvisioningConfig extends Model
{
    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $encryptKey;

    /**
     * @var bool
     */
    public $encryptRequired;

    /**
     * @var string[]
     */
    public $listenEventScopes;
    protected $_name = [
        'callbackUrl' => 'CallbackUrl',
        'encryptKey' => 'EncryptKey',
        'encryptRequired' => 'EncryptRequired',
        'listenEventScopes' => 'ListenEventScopes',
    ];

    public function validate()
    {
        if (\is_array($this->listenEventScopes)) {
            Model::validateArray($this->listenEventScopes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->encryptKey) {
            $res['EncryptKey'] = $this->encryptKey;
        }

        if (null !== $this->encryptRequired) {
            $res['EncryptRequired'] = $this->encryptRequired;
        }

        if (null !== $this->listenEventScopes) {
            if (\is_array($this->listenEventScopes)) {
                $res['ListenEventScopes'] = [];
                $n1 = 0;
                foreach ($this->listenEventScopes as $item1) {
                    $res['ListenEventScopes'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        if (isset($map['EncryptKey'])) {
            $model->encryptKey = $map['EncryptKey'];
        }

        if (isset($map['EncryptRequired'])) {
            $model->encryptRequired = $map['EncryptRequired'];
        }

        if (isset($map['ListenEventScopes'])) {
            if (!empty($map['ListenEventScopes'])) {
                $model->listenEventScopes = [];
                $n1 = 0;
                foreach ($map['ListenEventScopes'] as $item1) {
                    $model->listenEventScopes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
