<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class OneMetaTableIndex extends Model
{
    /**
     * @var string[]
     */
    public $columnNames;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $indexName;

    /**
     * @var string
     */
    public $indexType;

    /**
     * @var bool
     */
    public $primary;

    /**
     * @var string[]
     */
    public $realColumnNames;

    /**
     * @var bool
     */
    public $unique;
    protected $_name = [
        'columnNames' => 'ColumnNames',
        'description' => 'Description',
        'indexName' => 'IndexName',
        'indexType' => 'IndexType',
        'primary' => 'Primary',
        'realColumnNames' => 'RealColumnNames',
        'unique' => 'Unique',
    ];

    public function validate()
    {
        if (\is_array($this->columnNames)) {
            Model::validateArray($this->columnNames);
        }
        if (\is_array($this->realColumnNames)) {
            Model::validateArray($this->realColumnNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnNames) {
            if (\is_array($this->columnNames)) {
                $res['ColumnNames'] = [];
                $n1 = 0;
                foreach ($this->columnNames as $item1) {
                    $res['ColumnNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->indexName) {
            $res['IndexName'] = $this->indexName;
        }

        if (null !== $this->indexType) {
            $res['IndexType'] = $this->indexType;
        }

        if (null !== $this->primary) {
            $res['Primary'] = $this->primary;
        }

        if (null !== $this->realColumnNames) {
            if (\is_array($this->realColumnNames)) {
                $res['RealColumnNames'] = [];
                $n1 = 0;
                foreach ($this->realColumnNames as $item1) {
                    $res['RealColumnNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->unique) {
            $res['Unique'] = $this->unique;
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
        if (isset($map['ColumnNames'])) {
            if (!empty($map['ColumnNames'])) {
                $model->columnNames = [];
                $n1 = 0;
                foreach ($map['ColumnNames'] as $item1) {
                    $model->columnNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IndexName'])) {
            $model->indexName = $map['IndexName'];
        }

        if (isset($map['IndexType'])) {
            $model->indexType = $map['IndexType'];
        }

        if (isset($map['Primary'])) {
            $model->primary = $map['Primary'];
        }

        if (isset($map['RealColumnNames'])) {
            if (!empty($map['RealColumnNames'])) {
                $model->realColumnNames = [];
                $n1 = 0;
                foreach ($map['RealColumnNames'] as $item1) {
                    $model->realColumnNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Unique'])) {
            $model->unique = $map['Unique'];
        }

        return $model;
    }
}
