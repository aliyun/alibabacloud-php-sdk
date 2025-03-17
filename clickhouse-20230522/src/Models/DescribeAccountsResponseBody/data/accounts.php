<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeAccountsResponseBody\data;

use AlibabaCloud\Tea\Model;

class accounts extends Model
{
    /**
     * @description The username of the database account.
     *
     * @example test
     *
     * @var string
     */
    public $account;

    /**
     * @description The type of the database account. Valid values:
     *
     *   **1**: standard account
     *   **6**: privileged account
     *
     * @example NormalAccount
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The description.
     *
     * @example Used for test
     *
     * @var string
     */
    public $description;

    /**
     * @description The state of the database account. Valid values:
     *
     *   **0**: The database account is being created.
     *   **1**: The database account is in use.
     *   **3**: The database account is being deleted.
     *
     * @example 1
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'account' => 'Account',
        'accountType' => 'AccountType',
        'description' => 'Description',
        'status' => 'Status',
    ];

    public function validate() {}

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
