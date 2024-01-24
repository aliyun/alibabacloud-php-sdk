<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBRequest;

use AlibabaCloud\Tea\Model;

class rdsSuperAccount extends Model
{
    /**
     * @description The account name of the super administrator that is used to connect to the ApsaraDB RDS for MySQL instance.
     *
     * @example drds_sample_rds_super_account
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The ID of ApsaraDB RDS instance.
     *
     * @example drds_sample_rds_id
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @description The password of the super administrator account that is used to connect to the ApsaraDB RDS instance.
     *
     * @example drds_sample_rds_super_password
     *
     * @var string
     */
    public $password;
    protected $_name = [
        'accountName'  => 'AccountName',
        'dbInstanceId' => 'DbInstanceId',
        'password'     => 'Password',
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
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsSuperAccount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        return $model;
    }
}
