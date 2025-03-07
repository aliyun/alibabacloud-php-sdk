<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccountsRequest extends Model
{
    /**
     * @description The name of the database account.
     *
     * @example testuser
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The type of the database account that you want to query. Valid values: Super, Normal, and All. Default value: Super. If you set this parameter to Super, the information about the privileged account is returned. If you set this parameter to Normal, the information about all standard accounts is returned. If you set this parameter to All, the information about all database accounts is returned.
     *
     * @example Super
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example gp-bp***************
     *
     * @var string
     */
    public $DBInstanceId;
    protected $_name = [
        'accountName'  => 'AccountName',
        'accountType'  => 'AccountType',
        'DBInstanceId' => 'DBInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        return $model;
    }
}
