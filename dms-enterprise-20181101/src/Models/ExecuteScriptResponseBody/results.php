<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteScriptResponseBody;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var string[]
     */
    public $columnNames;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $rowCount;

    /**
     * @var mixed[][]
     */
    public $rows;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'columnNames' => 'ColumnNames',
        'message' => 'Message',
        'rowCount' => 'RowCount',
        'rows' => 'Rows',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->columnNames)) {
            Model::validateArray($this->columnNames);
        }
        if (\is_array($this->rows)) {
            Model::validateArray($this->rows);
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

        if (null !== $this->message) {
            $res['Message'] = $this->message;
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

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
