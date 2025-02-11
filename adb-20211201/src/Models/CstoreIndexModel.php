<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->columnOrds)) {
            Model::validateArray($this->columnOrds);
        }
        if (\is_array($this->indexColumns)) {
            Model::validateArray($this->indexColumns);
        }
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnOrds) {
            if (\is_array($this->columnOrds)) {
                $res['ColumnOrds'] = [];
                $n1                = 0;
                foreach ($this->columnOrds as $item1) {
                    $res['ColumnOrds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->indexColumns) {
            if (\is_array($this->indexColumns)) {
                $res['IndexColumns'] = [];
                $n1                  = 0;
                foreach ($this->indexColumns as $item1) {
                    $res['IndexColumns'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->options)) {
                $res['Options'] = [];
                foreach ($this->options as $key1 => $value1) {
                    $res['Options'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->physicalTableName) {
            $res['PhysicalTableName'] = $this->physicalTableName;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ColumnOrds'])) {
            if (!empty($map['ColumnOrds'])) {
                $model->columnOrds = [];
                $n1                = 0;
                foreach ($map['ColumnOrds'] as $item1) {
                    $model->columnOrds[$n1++] = $item1;
                }
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
                $n1                  = 0;
                foreach ($map['IndexColumns'] as $item1) {
                    $model->indexColumns[$n1++] = FieldSchemaModel::fromMap($item1);
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
            if (!empty($map['Options'])) {
                $model->options = [];
                foreach ($map['Options'] as $key1 => $value1) {
                    $model->options[$key1] = $value1;
                }
            }
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
