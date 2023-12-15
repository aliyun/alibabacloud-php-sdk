<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\CreateAccountWithKeyPairAutoCreationResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $accountPrivateKey;

    /**
     * @var string
     */
    public $accountPublicKey;

    /**
     * @var string
     */
    public $accountRecoverPrivateKey;

    /**
     * @var string
     */
    public $accountRecoverPublicKey;
    protected $_name = [
        'accountPrivateKey'        => 'AccountPrivateKey',
        'accountPublicKey'         => 'AccountPublicKey',
        'accountRecoverPrivateKey' => 'AccountRecoverPrivateKey',
        'accountRecoverPublicKey'  => 'AccountRecoverPublicKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $model;
    }
}
