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
    protected $_name = [
        'columnNames' => 'ColumnNames',
        'description' => 'Description',
        'indexName' => 'IndexName',
        'indexType' => 'IndexType',
    ];

    public function validate()
    {
        if (\is_array($this->columnNames)) {
            Model::validateArray($this->columnNames);
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

        return $model;
    }
}
