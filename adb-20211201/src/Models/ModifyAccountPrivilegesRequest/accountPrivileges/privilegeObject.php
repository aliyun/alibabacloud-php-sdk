<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAccountPrivilegesRequest\accountPrivileges;

use AlibabaCloud\Tea\Model;

class privilegeObject extends Model
{
    /**
     * @description The columns on which you want to grant permissions. This parameter must be specified when the PrivilegeType parameter is set to Column.
     *
     * @example column1
     *
     * @var string
     */
    public $column;

    /**
     * @description The databases on which you want to grant permissions. This parameter must be specified when the PrivilegeType parameter is set to Database, Table, or Column.
     *
     * @example tsdb1
     *
     * @var string
     */
    public $database;

    /**
     * @description The tables on which you want to grant permissions. This parameter must be specified when the PrivilegeType parameter is set to Table or Column.
     *
     * @example table1
     *
     * @var string
     */
    public $table;
    protected $_name = [
        'column'   => 'Column',
        'database' => 'Database',
        'table'    => 'Table',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->column) {
            $res['Column'] = $this->column;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->table) {
            $res['Table'] = $this->table;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privilegeObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Column'])) {
            $model->column = $map['Column'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }

        return $model;
    }
}
