<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountPrivilegesResponseBody\data;

use AlibabaCloud\Tea\Model;

class privilegeObject extends Model
{
    /**
     * @description The name of the column.
     *
     * @example column1
     *
     * @var string
     */
    public $column;

    /**
     * @description The name of the database.
     *
     * @example db1
     *
     * @var string
     */
    public $database;

    /**
     * @description The description of the permission object.
     *
     * @example a test column
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the table.
     *
     * @example tabl1
     *
     * @var string
     */
    public $table;
    protected $_name = [
        'column'      => 'Column',
        'database'    => 'Database',
        'description' => 'Description',
        'table'       => 'Table',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }

        return $model;
    }
}
