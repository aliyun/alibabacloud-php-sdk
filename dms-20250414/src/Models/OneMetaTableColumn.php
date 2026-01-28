<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class OneMetaTableColumn extends Model
{
    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $columnType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var OneMetaTableColumnEngineMeta
     */
    public $engineMeta;

    /**
     * @var int
     */
    public $position;
    protected $_name = [
        'columnName' => 'ColumnName',
        'columnType' => 'ColumnType',
        'description' => 'Description',
        'engineMeta' => 'EngineMeta',
        'position' => 'Position',
    ];

    public function validate()
    {
        if (null !== $this->engineMeta) {
            $this->engineMeta->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }

        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->engineMeta) {
            $res['EngineMeta'] = null !== $this->engineMeta ? $this->engineMeta->toArray($noStream) : $this->engineMeta;
        }

        if (null !== $this->position) {
            $res['Position'] = $this->position;
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
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }

        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EngineMeta'])) {
            $model->engineMeta = OneMetaTableColumnEngineMeta::fromMap($map['EngineMeta']);
        }

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        return $model;
    }
}
