<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponseBody\instanceAccounts\instanceAccount\dbPrivileges;

use AlibabaCloud\Dara\Model;

class dbPrivilege extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $privilege;
    protected $_name = [
        'dbName' => 'DbName',
        'privilege' => 'Privilege',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->privilege) {
            $res['Privilege'] = $this->privilege;
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
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['Privilege'])) {
            $model->privilege = $map['Privilege'];
        }

        return $model;
    }
}
