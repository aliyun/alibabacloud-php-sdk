<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

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
        'account'    => 'account',
        'credential' => 'credential',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['account'] = null !== $this->account ? $this->account->toMap() : null;
        }
        if (null !== $this->credential) {
            $res['credential'] = null !== $this->credential ? $this->credential->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ActivateConnectionRequest
     */
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
