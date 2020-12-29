<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class CreateAntChainAccountRequest extends Model
{
    /**
     * @var string
     */
    public $antChainId;

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
    protected $_name = [
        'antChainId'           => 'AntChainId',
        'account'              => 'Account',
        'accountPubKey'        => 'AccountPubKey',
        'accountRecoverPubKey' => 'AccountRecoverPubKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->accountPubKey) {
            $res['AccountPubKey'] = $this->accountPubKey;
        }
        if (null !== $this->accountRecoverPubKey) {
            $res['AccountRecoverPubKey'] = $this->accountRecoverPubKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAntChainAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['AccountPubKey'])) {
            $model->accountPubKey = $map['AccountPubKey'];
        }
        if (isset($map['AccountRecoverPubKey'])) {
            $model->accountRecoverPubKey = $map['AccountRecoverPubKey'];
        }

        return $model;
    }
}
