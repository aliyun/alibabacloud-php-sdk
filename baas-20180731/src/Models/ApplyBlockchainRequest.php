<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class ApplyBlockchainRequest extends Model
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
    public $blockchain;

    /**
     * @var string
     */
    public $uploadReq;
    protected $_name = [
        'account'              => 'Account',
        'accountPubKey'        => 'AccountPubKey',
        'accountRecoverPubKey' => 'AccountRecoverPubKey',
        'blockchain'           => 'Blockchain',
        'uploadReq'            => 'UploadReq',
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
        if (null !== $this->blockchain) {
            $res['Blockchain'] = $this->blockchain;
        }
        if (null !== $this->uploadReq) {
            $res['UploadReq'] = $this->uploadReq;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyBlockchainRequest
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
        if (isset($map['Blockchain'])) {
            $model->blockchain = $map['Blockchain'];
        }
        if (isset($map['UploadReq'])) {
            $model->uploadReq = $map['UploadReq'];
        }

        return $model;
    }
}
