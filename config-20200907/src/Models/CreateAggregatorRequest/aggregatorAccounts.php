<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregatorRequest;

use AlibabaCloud\Tea\Model;

class aggregatorAccounts extends Model
{
    /**
     * @description The ID of the member account.
     *
     * For more information about how to obtain the ID of a member account, see [ListAccounts](~~160016~~).
     * @example 171322098523****
     *
     * @var int
     */
    public $accountId;

    /**
     * @description The name of the member account.
     *
     * For more information about how to obtain the name of a member account, see [ListAccounts](~~160016~~).
     * @example Alice
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The affiliation of the member account. You can set this parameter only to ResourceDirectory.
     *
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
