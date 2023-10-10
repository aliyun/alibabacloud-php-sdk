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
     * @example de44334f1094cbd37e952ef691a837f36eab2e9afdf6bed9bf523c2dde40ff7b1ff526ec11b510d320f536685f75dd90f67fda8d41a69738a76a77c27b1373fb
     *
     * @var string
     */
    public $accountPublicKey;

    /**
     * @example ee54a9c4511345f2de05889540eedb8dfed7b57ab0647c5894e4333596bc2ecef07a0469331d016ad9978b39367a0a5c217ef92ffffcbd6716db6667353891a9
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
     * @example pYogqb9v
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
