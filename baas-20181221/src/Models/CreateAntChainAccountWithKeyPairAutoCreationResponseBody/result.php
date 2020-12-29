<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\CreateAntChainAccountWithKeyPairAutoCreationResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $accountPublicKey;

    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $accountRecoverPrivateKey;

    /**
     * @var string
     */
    public $accountRecoverPublicKey;

    /**
     * @var string
     */
    public $accountPrivateKey;

    /**
     * @var string
     */
    public $antChainId;
    protected $_name = [
        'accountPublicKey'         => 'AccountPublicKey',
        'account'                  => 'Account',
        'accountRecoverPrivateKey' => 'AccountRecoverPrivateKey',
        'accountRecoverPublicKey'  => 'AccountRecoverPublicKey',
        'accountPrivateKey'        => 'AccountPrivateKey',
        'antChainId'               => 'AntChainId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountPublicKey) {
            $res['AccountPublicKey'] = $this->accountPublicKey;
        }
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->accountRecoverPrivateKey) {
            $res['AccountRecoverPrivateKey'] = $this->accountRecoverPrivateKey;
        }
        if (null !== $this->accountRecoverPublicKey) {
            $res['AccountRecoverPublicKey'] = $this->accountRecoverPublicKey;
        }
        if (null !== $this->accountPrivateKey) {
            $res['AccountPrivateKey'] = $this->accountPrivateKey;
        }
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountPublicKey'])) {
            $model->accountPublicKey = $map['AccountPublicKey'];
        }
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['AccountRecoverPrivateKey'])) {
            $model->accountRecoverPrivateKey = $map['AccountRecoverPrivateKey'];
        }
        if (isset($map['AccountRecoverPublicKey'])) {
            $model->accountRecoverPublicKey = $map['AccountRecoverPublicKey'];
        }
        if (isset($map['AccountPrivateKey'])) {
            $model->accountPrivateKey = $map['AccountPrivateKey'];
        }
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }

        return $model;
    }
}
