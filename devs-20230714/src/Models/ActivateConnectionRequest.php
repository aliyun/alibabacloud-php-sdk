<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ActivateConnectionRequest extends Model
{
    /**
     * @var GitAccount
     */
    public $account;

    /**
     * @var OAuthCredential
     */
    public $credential;
    protected $_name = [
        'account' => 'account',
        'credential' => 'credential',
    ];

    public function validate()
    {
        if (null !== $this->account) {
            $this->account->validate();
        }
        if (null !== $this->credential) {
            $this->credential->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->account) {
            $res['account'] = null !== $this->account ? $this->account->toArray($noStream) : $this->account;
        }

        if (null !== $this->credential) {
            $res['credential'] = null !== $this->credential ? $this->credential->toArray($noStream) : $this->credential;
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
        if (isset($map['account'])) {
            $model->account = GitAccount::fromMap($map['account']);
        }

        if (isset($map['credential'])) {
            $model->credential = OAuthCredential::fromMap($map['credential']);
        }

        return $model;
    }
}
