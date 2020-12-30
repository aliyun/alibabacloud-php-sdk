<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteScriptResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var string[]
     */
    public $columnNames;

    /**
     * @var mixed[][]
     */
    public $rows;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $rowCount;
    protected $_name = [
        'columnNames' => 'ColumnNames',
        'rows'        => 'Rows',
        'success'     => 'Success',
        'message'     => 'Message',
        'rowCount'    => 'RowCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnNames) {
            $res['ColumnNames'] = $this->columnNames;
        }
        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnNames'])) {
            if (!empty($map['ColumnNames'])) {
                $model->columnNames = $map['ColumnNames'];
            }
        }
        if (isset($map['Rows'])) {
            if (!empty($map['Rows'])) {
                $model->rows = $map['Rows'];
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }

        return $model;
    }
}
