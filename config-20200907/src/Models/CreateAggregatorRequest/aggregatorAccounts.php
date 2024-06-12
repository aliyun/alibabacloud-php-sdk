<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregatorRequest;

use AlibabaCloud\Tea\Model;

class aggregatorAccounts extends Model
{
    /**
     * @description The member account ID. For more information about how to obtain the ID of a member account, see [ListAccounts](https://help.aliyun.com/document_detail/160016.html).
     *
     * @example 171322098523****
     *
     * @var int
     */
    public $accountId;

    /**
     * @description The name of the member account. For more information about how to obtain the name of a member account, see [ListAccounts](https://help.aliyun.com/document_detail/160016.html).
     *
     * @example Alice
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The type of the member account. Set this parameter to ResourceDirectory.
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
