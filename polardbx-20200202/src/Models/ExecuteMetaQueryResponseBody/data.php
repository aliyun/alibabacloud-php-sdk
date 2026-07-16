<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\ExecuteMetaQueryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $columns;

    /**
     * @var int
     */
    public $rowCount;

    /**
     * @var mixed[][]
     */
    public $rows;
    protected $_name = [
        'columns' => 'Columns',
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
