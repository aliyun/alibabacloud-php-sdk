<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregatorRequest;

use AlibabaCloud\Tea\Model;

class aggregatorAccounts extends Model
{
    /**
     * @description The member account ID, which indicates the Alibaba Cloud account ID of the member account.
     *
     * >  If you want to update the member account list, you must set the `AccountId`, `AccountName` and `AccountType` parameters.
     * @example 173808452267****
     *
     * @var int
     */
    public $accountId;

    /**
     * @description The member account name, which indicates the name of the Alibaba Cloud account that corresponds to the member account.
     *
     * >  If you want to update the member account list, you must set the `AccountId`, `AccountName` and `AccountType` parameters.
     * @example Tony
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The affiliation of the member account. You can set this parameter to only ResourceDirectory.
     *
     * >  If you want to update the member account list, you must set the `AccountId`, `AccountName` and `AccountType` parameters.
     * @example ResourceDirectory
     *
     * @var string
     */
    public $accountType;
    protected $_name = [
        'accountId'   => 'AccountId',
        'accountName' => 'AccountName',
        'accountType' => 'AccountType',
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

        return $model;
    }
}
