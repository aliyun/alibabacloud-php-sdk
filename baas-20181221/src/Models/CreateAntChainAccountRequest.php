<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class CreateAntChainAccountRequest extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $account;

    /**
     * @example AEDC32...
     *
     * @var string
     */
    public $accountPubKey;

    /**
     * @example AEDC32...
     *
     * @var string
     */
    public $accountRecoverPubKey;

    /**
     * @example bDXK6boZ
     *
     * @var string
     */
    public $antChainId;
    protected $_name = [
        'account'              => 'Account',
        'accountPubKey'        => 'AccountPubKey',
        'accountRecoverPubKey' => 'AccountRecoverPubKey',
        'antChainId'           => 'AntChainId',
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
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
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
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['AccountPubKey'])) {
            $model->accountPubKey = $map['AccountPubKey'];
        }
        if (isset($map['AccountRecoverPubKey'])) {
            $model->accountRecoverPubKey = $map['AccountRecoverPubKey'];
        }
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }

        return $model;
    }
}
