<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantUserResponseBody\tenantUser;

use AlibabaCloud\Tea\Model;

class roles extends Model
{
    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'database' => 'Database',
        'role'     => 'Role',
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
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
