<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\CreateAntChainAccountWithKeyPairAutoCreationResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example accountname
     *
     * @var string
     */
    public $account;

    /**
     * @example -----BEGIN ENCRYPTED PRIVATE KEY-----\nM***8=\n-----END ENCRYPTED PRIVATE KEY-----\n
     *
     * @var string
     */
    public $accountPrivateKey;

    /**
     * @example b***7
     *
     * @var string
     */
    public $accountPublicKey;

    /**
     * @example -----BEGIN ENCRYPTED PRIVATE KEY-----\nM***Io=\n-----END ENCRYPTED PRIVATE KEY-----\n
     *
     * @var string
     */
    public $accountRecoverPrivateKey;

    /**
     * @example d***b
     *
     * @var string
     */
    public $accountRecoverPublicKey;

    /**
     * @example 1q8B5R9p
     *
     * @var string
     */
    public $antChainId;
    protected $_name = [
        'account'                  => 'Account',
        'accountPrivateKey'        => 'AccountPrivateKey',
        'accountPublicKey'         => 'AccountPublicKey',
        'accountRecoverPrivateKey' => 'AccountRecoverPrivateKey',
        'accountRecoverPublicKey'  => 'AccountRecoverPublicKey',
        'antChainId'               => 'AntChainId',
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
        if (null !== $this->accountPrivateKey) {
            $res['AccountPrivateKey'] = $this->accountPrivateKey;
        }
        if (null !== $this->accountPublicKey) {
            $res['AccountPublicKey'] = $this->accountPublicKey;
        }
        if (null !== $this->accountRecoverPrivateKey) {
            $res['AccountRecoverPrivateKey'] = $this->accountRecoverPrivateKey;
        }
        if (null !== $this->accountRecoverPublicKey) {
            $res['AccountRecoverPublicKey'] = $this->accountRecoverPublicKey;
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
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['AccountPrivateKey'])) {
            $model->accountPrivateKey = $map['AccountPrivateKey'];
        }
        if (isset($map['AccountPublicKey'])) {
            $model->accountPublicKey = $map['AccountPublicKey'];
        }
        if (isset($map['AccountRecoverPrivateKey'])) {
            $model->accountRecoverPrivateKey = $map['AccountRecoverPrivateKey'];
        }
        if (isset($map['AccountRecoverPublicKey'])) {
            $model->accountRecoverPublicKey = $map['AccountRecoverPublicKey'];
        }
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }

        return $model;
    }
}
