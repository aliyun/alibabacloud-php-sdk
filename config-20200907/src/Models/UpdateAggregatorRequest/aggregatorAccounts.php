<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregatorRequest;

use AlibabaCloud\Tea\Model;

class aggregatorAccounts extends Model
{
    /**
     * @description The ID of the member.
     *
     * >  If you want to update the member list, you must configure both the `AccountId` and `AccountType` parameters.
     * @example 173808452267****
     *
     * @var int
     */
    public $accountId;

    /**
     * @description The display name of the member.
     *
     * >  If you want to update the member list, you must configure both the `AccountId` and `AccountType` parameters.
     * @example Tony
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The resource directory to which the member belongs. Valid value: ResourceDirectory. ResourceDirectory indicates that the member belongs to a resource directory.
     *
     * >  If you want to update the member list, you must configure both the `AccountId` and `AccountType` parameters.
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
