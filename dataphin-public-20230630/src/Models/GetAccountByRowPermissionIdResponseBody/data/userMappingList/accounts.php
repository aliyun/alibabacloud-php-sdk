<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAccountByRowPermissionIdResponseBody\data\userMappingList;

use AlibabaCloud\Tea\Model;

class accounts extends Model
{
    /**
     * @example 300901111
     *
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountName;
    protected $_name = [
        'accountId' => 'AccountId',
        'accountName' => 'AccountName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        return $model;
    }
}
