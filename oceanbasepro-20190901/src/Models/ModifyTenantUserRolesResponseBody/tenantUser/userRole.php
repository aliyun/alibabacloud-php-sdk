<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserRolesResponseBody\tenantUser;

use AlibabaCloud\Tea\Model;

class userRole extends Model
{
    /**
     * @description ```
     * &UserName=pay_test
     * &TenantId=ob2mr3oae0****
     * &UserRole=[{"Database":"20210824160559","Role":"readwrite"}]
     * &InstanceId=ob317v4uif****
     * ```
     * @example db_pay1
     *
     * @var string
     */
    public $database;

    /**
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description You can call this operation to modify the database privileges of a specified account in a tenant.
     *
     * @example ReadOnly
     *
     * @var string
     */
    public $role;

    /**
     * @example tbl_pay1
     *
     * @var string
     */
    public $table;
    protected $_name = [
        'database'  => 'Database',
        'isSuccess' => 'IsSuccess',
        'role'      => 'Role',
        'table'     => 'Table',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->table) {
            $res['Table'] = $this->table;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userRole
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }

        return $model;
    }
}
