<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class CreatePublicAntChainAccountRequest extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $accountPubKey;

    /**
     * @var string
     */
    public $accountRecoverPubKey;

    /**
     * @var string
     */
    public $bizid;
    protected $_name = [
        'account'              => 'Account',
        'accountPubKey'        => 'AccountPubKey',
        'accountRecoverPubKey' => 'AccountRecoverPubKey',
        'bizid'                => 'Bizid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->accountPubKey) {
            $res['AccountPubKey'] = $this->accountPubKey;
        }
        if (null !== $this->accountRecoverPubKey) {
            $res['AccountRecoverPubKey'] = $this->accountRecoverPubKey;
        }
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePublicAntChainAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['AccountPubKey'])) {
            $model->accountPubKey = $map['AccountPubKey'];
        }
        if (isset($map['AccountRecoverPubKey'])) {
            $model->accountRecoverPubKey = $map['AccountRecoverPubKey'];
        }
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }

        return $model;
    }
}
