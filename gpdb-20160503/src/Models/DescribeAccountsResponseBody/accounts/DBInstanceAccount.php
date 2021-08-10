<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAccountsResponseBody\accounts;

use AlibabaCloud\Tea\Model;

class DBInstanceAccount extends Model
{
    /**
     * @var string
     */
    public $accountDescription;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $accountStatus;

    /**
     * @var string
     */
    public $accountName;
    protected $_name = [
        'accountDescription' => 'AccountDescription',
        'DBInstanceId'       => 'DBInstanceId',
        'accountStatus'      => 'AccountStatus',
        'accountName'        => 'AccountName',
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
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        return $model;
    }
}
