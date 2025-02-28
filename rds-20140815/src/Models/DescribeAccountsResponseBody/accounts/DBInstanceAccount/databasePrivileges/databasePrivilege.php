<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponseBody\accounts\DBInstanceAccount\databasePrivileges;

use AlibabaCloud\Dara\Model;

class databasePrivilege extends Model
{
    /**
     * @var string
     */
    public $accountPrivilege;
    /**
     * @var string
     */
    public $accountPrivilegeDetail;
    /**
     * @var string
     */
    public $DBName;
    protected $_name = [
        'accountPrivilege'       => 'AccountPrivilege',
        'accountPrivilegeDetail' => 'AccountPrivilegeDetail',
        'DBName'                 => 'DBName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountPrivilege) {
            $res['AccountPrivilege'] = $this->accountPrivilege;
        }

        if (null !== $this->accountPrivilegeDetail) {
            $res['AccountPrivilegeDetail'] = $this->accountPrivilegeDetail;
        }

        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountPrivilege'])) {
            $model->accountPrivilege = $map['AccountPrivilege'];
        }

        if (isset($map['AccountPrivilegeDetail'])) {
            $model->accountPrivilegeDetail = $map['AccountPrivilegeDetail'];
        }

        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }

        return $model;
    }
}
