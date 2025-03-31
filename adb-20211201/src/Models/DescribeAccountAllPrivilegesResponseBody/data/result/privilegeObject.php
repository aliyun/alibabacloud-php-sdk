<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountAllPrivilegesResponseBody\data\result;

use AlibabaCloud\Dara\Model;

class privilegeObject extends Model
{
    /**
     * @var string
     */
    public $column;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $table;
    protected $_name = [
        'column' => 'Column',
        'database' => 'Database',
        'description' => 'Description',
        'table' => 'Table',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
