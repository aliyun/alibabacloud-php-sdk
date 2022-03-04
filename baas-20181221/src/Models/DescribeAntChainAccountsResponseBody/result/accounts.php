<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainAccountsResponseBody\result;

use AlibabaCloud\Tea\Model;

class accounts extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $accountPublicKey;

    /**
     * @var string
     */
    public $accountRecoveryKey;

    /**
     * @var string
     */
    public $accountStatus;

    /**
     * @var string
     */
    public $antChainId;
    protected $_name = [
        'account'            => 'Account',
        'accountPublicKey'   => 'AccountPublicKey',
        'accountRecoveryKey' => 'AccountRecoveryKey',
        'accountStatus'      => 'AccountStatus',
        'antChainId'         => 'AntChainId',
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
        if (null !== $this->accountPublicKey) {
            $res['AccountPublicKey'] = $this->accountPublicKey;
        }
        if (null !== $this->accountRecoveryKey) {
            $res['AccountRecoveryKey'] = $this->accountRecoveryKey;
        }
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['AccountPublicKey'])) {
            $model->accountPublicKey = $map['AccountPublicKey'];
        }
        if (isset($map['AccountRecoveryKey'])) {
            $model->accountRecoveryKey = $map['AccountRecoveryKey'];
        }
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }

        return $model;
    }
}
