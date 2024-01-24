<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\CreateInstanceAccountRequest;

use AlibabaCloud\Tea\Model;

class dbPrivilege extends Model
{
    /**
     * @description The name of the database that you want to manage by using the account to create.
     *
     * @example test123
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The permissions that you want to grant to the account to manage the database.
     *
     * @example DDL
     *
     * @var string
     */
    public $privilege;
    protected $_name = [
        'dbName'    => 'DbName',
        'privilege' => 'Privilege',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return dbPrivilege
     */
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
