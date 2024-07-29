<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeAccountsResponseBody\data;

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
     * @example NormalAccount
     *
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 1
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'account'     => 'Account',
        'accountType' => 'AccountType',
        'description' => 'Description',
        'status'      => 'Status',
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
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
