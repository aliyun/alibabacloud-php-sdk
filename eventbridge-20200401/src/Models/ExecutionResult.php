<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class ExecutionResult extends Model
{
    /**
     * @var bool
     */
    public $isTruncated;

    /**
     * @var int
     */
    public $rowCount;

    /**
     * @var string
     */
    public $rows;

    /**
     * @var SchemaColumn[]
     */
    public $schema;

    /**
     * @var int
     */
    public $totalRows;
    protected $_name = [
        'isTruncated' => 'IsTruncated',
        'rowCount' => 'RowCount',
        'rows' => 'Rows',
        'schema' => 'Schema',
        'totalRows' => 'TotalRows',
    ];

    public function validate()
    {
        if (\is_array($this->schema)) {
            Model::validateArray($this->schema);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }

        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }

        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }

        if (null !== $this->schema) {
            if (\is_array($this->schema)) {
                $res['Schema'] = [];
                $n1 = 0;
                foreach ($this->schema as $item1) {
                    $res['Schema'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalRows) {
            $res['TotalRows'] = $this->totalRows;
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
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }

        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }

        if (isset($map['Rows'])) {
            $model->rows = $map['Rows'];
        }

        if (isset($map['Schema'])) {
            if (!empty($map['Schema'])) {
                $model->schema = [];
                $n1 = 0;
                foreach ($map['Schema'] as $item1) {
                    $model->schema[$n1] = SchemaColumn::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalRows'])) {
            $model->totalRows = $map['TotalRows'];
        }

        return $model;
    }
}
