<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainAccountsNewResponseBody\result;

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

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $memberName;
    protected $_name = [
        'account'            => 'Account',
        'accountPublicKey'   => 'AccountPublicKey',
        'accountRecoveryKey' => 'AccountRecoveryKey',
        'accountStatus'      => 'AccountStatus',
        'antChainId'         => 'AntChainId',
        'createTime'         => 'CreateTime',
        'memberName'         => 'MemberName',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }

        return $model;
    }
}
