<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class GrantTablePermissionRequest extends Model
{
    /**
     * @var bool
     */
    public $allTable;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string[]
     */
    public $privileges;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'allTable' => 'allTable',
        'databaseName' => 'databaseName',
        'privileges' => 'privileges',
        'schemaName' => 'schemaName',
        'tableName' => 'tableName',
        'userName' => 'userName',
    ];

    public function validate()
    {
        if (\is_array($this->privileges)) {
            Model::validateArray($this->privileges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allTable) {
            $res['allTable'] = $this->allTable;
        }

        if (null !== $this->databaseName) {
            $res['databaseName'] = $this->databaseName;
        }

        if (null !== $this->privileges) {
            if (\is_array($this->privileges)) {
                $res['privileges'] = [];
                $n1 = 0;
                foreach ($this->privileges as $item1) {
                    $res['privileges'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->schemaName) {
            $res['schemaName'] = $this->schemaName;
        }

        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }

        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
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
        if (isset($map['allTable'])) {
            $model->allTable = $map['allTable'];
        }

        if (isset($map['databaseName'])) {
            $model->databaseName = $map['databaseName'];
        }

        if (isset($map['privileges'])) {
            if (!empty($map['privileges'])) {
                $model->privileges = [];
                $n1 = 0;
                foreach ($map['privileges'] as $item1) {
                    $model->privileges[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['schemaName'])) {
            $model->schemaName = $map['schemaName'];
        }

        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }

        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
