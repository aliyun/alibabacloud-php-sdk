<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregatorResponseBody\aggregator;

use AlibabaCloud\Tea\Model;

class aggregatorAccounts extends Model
{
    /**
     * @description The ID of the member account.
     *
     * @example 171322098523****
     *
     * @var int
     */
    public $accountId;

    /**
     * @description The name of the member account.
     *
     * @example Alice
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The type of the member account. Only ResourceDirectory is returned, which indicates that the account is a resource directory account.
     *
     * @example ResourceDirectory
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The status of the configuration recorder for the member account. Valid values:
     *
     *   REGISTRABLE: The configuration recorder is not registered.
     *   BUILDING: The configuration recorder is being deployed.
     *   REGISTERED: The configuration recorder is registered.
     *   REBUILDING: The configuration recorder is being redeployed.
     *
     * @example REGISTERED
     *
     * @var string
     */
    public $recorderStatus;
    protected $_name = [
        'accountId'      => 'AccountId',
        'accountName'    => 'AccountName',
        'accountType'    => 'AccountType',
        'recorderStatus' => 'RecorderStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->recorderStatus) {
            $res['RecorderStatus'] = $this->recorderStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aggregatorAccounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['RecorderStatus'])) {
            $model->recorderStatus = $map['RecorderStatus'];
        }

        return $model;
    }
}
