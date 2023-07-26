<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAccountsResponseBody\accounts;

use AlibabaCloud\Tea\Model;

class DBInstanceAccount extends Model
{
    /**
     * @description The description of the account.
     *
     * @example testuser
     *
     * @var string
     */
    public $accountDescription;

    /**
     * @description The name of the account.
     *
     * @example testuser
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The state of the account.
     *
     *   **0**: The account is being created.
     *   **1**: The account is in use.
     *   **3**: The account is being deleted.
     *
     * @example 1
     *
     * @var string
     */
    public $accountStatus;

    /**
     * @description The ID of the instance.
     *
     * @example gp-bp***************
     *
     * @var string
     */
    public $DBInstanceId;
    protected $_name = [
        'accountDescription' => 'AccountDescription',
        'accountName'        => 'AccountName',
        'accountStatus'      => 'AccountStatus',
        'DBInstanceId'       => 'DBInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountDescription) {
            $res['AccountDescription'] = $this->accountDescription;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceAccount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountDescription'])) {
            $model->accountDescription = $map['AccountDescription'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        return $model;
    }
}
