<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainAccountsV2ResponseBody\result;

use AlibabaCloud\Tea\Model;

class accounts extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $account;

    /**
     * @example 2aa43bae103b6840ce8efdfe6f3fe5e52f8d1db0f44ff762df87ba17eb209979a0e22c934b2728c6c1bab864a6da52de60c5da89793bd839650a1a153e876e32
     *
     * @var string
     */
    public $accountPublicKey;

    /**
     * @example 5a36312d78681794258bb33372586c676adf150ad69e67dbfcaae61bba3607705950bc9efe1bf4a17ac24b05b1615a410e48d2a005dca251c6173495bb47ae29
     *
     * @var string
     */
    public $accountRecoveryKey;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $accountStatus;

    /**
     * @example 8bd720bde18c4b37b0f4a1c7834db163
     *
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
