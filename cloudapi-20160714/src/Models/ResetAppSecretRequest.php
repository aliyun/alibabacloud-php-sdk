<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class ResetAppSecretRequest extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $newAppKey;

    /**
     * @var string
     */
    public $newAppSecret;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'appKey' => 'AppKey',
        'newAppKey' => 'NewAppKey',
        'newAppSecret' => 'NewAppSecret',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->newAppKey) {
            $res['NewAppKey'] = $this->newAppKey;
        }

        if (null !== $this->newAppSecret) {
            $res['NewAppSecret'] = $this->newAppSecret;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['NewAppKey'])) {
            $model->newAppKey = $map['NewAppKey'];
        }

        if (isset($map['NewAppSecret'])) {
            $model->newAppSecret = $map['NewAppSecret'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
