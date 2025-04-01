<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantUsersResponseBody\tenantUsers;

use AlibabaCloud\Dara\Model;

class databases extends Model
{
    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $privileges;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $table;
    protected $_name = [
        'database' => 'Database',
        'privileges' => 'Privileges',
        'role' => 'Role',
        'table' => 'Table',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->privileges) {
            $res['Privileges'] = $this->privileges;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->table) {
            $res['Table'] = $this->table;
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
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['Privileges'])) {
            $model->privileges = $map['Privileges'];
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
