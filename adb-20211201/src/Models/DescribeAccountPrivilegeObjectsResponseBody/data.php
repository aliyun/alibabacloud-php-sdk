<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountPrivilegeObjectsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the column. This parameter is returned when PrivilegeType is set to Column.
     *
     * @example column1
     *
     * @var string
     */
    public $column;

    /**
     * @description The name of the database. This parameter is returned when PrivilegeType is set to Database, Table, or Column.
     *
     * @example tdb1
     *
     * @var string
     */
    public $database;

    /**
     * @description The description that is specified when you create a table or column. This parameter is returned only when PrivilegeType is set to Database or Table, indicating the database description or table description.
     *
     * @example a test db
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the table. This parameter is returned when PrivilegeType is set to Table or Column.
     *
     * @example table1
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
     * @return data
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
