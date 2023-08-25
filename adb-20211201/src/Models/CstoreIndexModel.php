<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CstoreIndexModel extends Model
{
    /**
     * @var string[]
     */
    public $columnOrds;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var FieldSchemaModel[]
     */
    public $indexColumns;

    /**
     * @var string
     */
    public $indexName;

    /**
     * @var string
     */
    public $indexType;

    /**
     * @var string[]
     */
    public $options;

    /**
     * @var string
     */
    public $physicalTableName;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'columnOrds'        => 'ColumnOrds',
        'createTime'        => 'CreateTime',
        'databaseName'      => 'DatabaseName',
        'indexColumns'      => 'IndexColumns',
        'indexName'         => 'IndexName',
        'indexType'         => 'IndexType',
        'options'           => 'Options',
        'physicalTableName' => 'PhysicalTableName',
        'updateTime'        => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnOrds) {
            $res['ColumnOrds'] = $this->columnOrds;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->indexColumns) {
            $res['IndexColumns'] = [];
            if (null !== $this->indexColumns && \is_array($this->indexColumns)) {
                $n = 0;
                foreach ($this->indexColumns as $item) {
                    $res['IndexColumns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->indexName) {
            $res['IndexName'] = $this->indexName;
        }
        if (null !== $this->indexType) {
            $res['IndexType'] = $this->indexType;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->physicalTableName) {
            $res['PhysicalTableName'] = $this->physicalTableName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CstoreIndexModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnOrds'])) {
            if (!empty($map['ColumnOrds'])) {
                $model->columnOrds = $map['ColumnOrds'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['IndexColumns'])) {
            if (!empty($map['IndexColumns'])) {
                $model->indexColumns = [];
                $n                   = 0;
                foreach ($map['IndexColumns'] as $item) {
                    $model->indexColumns[$n++] = null !== $item ? FieldSchemaModel::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IndexName'])) {
            $model->indexName = $map['IndexName'];
        }
        if (isset($map['IndexType'])) {
            $model->indexType = $map['IndexType'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['PhysicalTableName'])) {
            $model->physicalTableName = $map['PhysicalTableName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
