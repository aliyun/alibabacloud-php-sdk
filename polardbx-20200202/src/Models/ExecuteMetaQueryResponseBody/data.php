<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\ExecuteMetaQueryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $appliedOffset;

    /**
     * @var int
     */
    public $appliedRowLimit;

    /**
     * @var string[]
     */
    public $columns;

    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var int
     */
    public $recordsSizeBytes;

    /**
     * @var int
     */
    public $returnedRowCount;

    /**
     * @var int
     */
    public $rowCount;

    /**
     * @var mixed[][]
     */
    public $rows;
    protected $_name = [
        'appliedOffset' => 'AppliedOffset',
        'appliedRowLimit' => 'AppliedRowLimit',
        'columns' => 'Columns',
        'hasMore' => 'HasMore',
        'recordsSizeBytes' => 'RecordsSizeBytes',
        'returnedRowCount' => 'ReturnedRowCount',
        'rowCount' => 'RowCount',
        'rows' => 'Rows',
    ];

    public function validate()
    {
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        if (\is_array($this->rows)) {
            Model::validateArray($this->rows);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appliedOffset) {
            $res['AppliedOffset'] = $this->appliedOffset;
        }

        if (null !== $this->appliedRowLimit) {
            $res['AppliedRowLimit'] = $this->appliedRowLimit;
        }

        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['Columns'] = [];
                $n1 = 0;
                foreach ($this->columns as $item1) {
                    $res['Columns'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }

        if (null !== $this->recordsSizeBytes) {
            $res['RecordsSizeBytes'] = $this->recordsSizeBytes;
        }

        if (null !== $this->returnedRowCount) {
            $res['ReturnedRowCount'] = $this->returnedRowCount;
        }

        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }

        if (null !== $this->rows) {
            if (\is_array($this->rows)) {
                $res['Rows'] = [];
                $n1 = 0;
                foreach ($this->rows as $item1) {
                    if (\is_array($item1)) {
                        $res['Rows'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Rows'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
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
        if (isset($map['AppliedOffset'])) {
            $model->appliedOffset = $map['AppliedOffset'];
        }

        if (isset($map['AppliedRowLimit'])) {
            $model->appliedRowLimit = $map['AppliedRowLimit'];
        }

        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n1 = 0;
                foreach ($map['Columns'] as $item1) {
                    $model->columns[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }

        if (isset($map['RecordsSizeBytes'])) {
            $model->recordsSizeBytes = $map['RecordsSizeBytes'];
        }

        if (isset($map['ReturnedRowCount'])) {
            $model->returnedRowCount = $map['ReturnedRowCount'];
        }

        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }

        if (isset($map['Rows'])) {
            if (!empty($map['Rows'])) {
                $model->rows = [];
                $n1 = 0;
                foreach ($map['Rows'] as $item1) {
                    if (!empty($item1)) {
                        $model->rows[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->rows[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
