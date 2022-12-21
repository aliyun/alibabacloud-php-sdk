<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ExecuteScriptResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description The fields that are queried after the SQL statement is executed.
     *
     * @var string[]
     */
    public $columnNames;

    /**
     * @description The error message that is returned if the SQL statement fails to be executed. For example, an error message is returned because the SQL statement is invalid.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $message;

    /**
     * @description The total number of entries that are returned.
     *
     * @example 1
     *
     * @var int
     */
    public $rowCount;

    /**
     * @description The rows that are queried after the SQL statement is executed.
     *
     * @var mixed[][]
     */
    public $rows;

    /**
     * @description Indicates whether the SQL statement is executed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'columnNames' => 'ColumnNames',
        'message'     => 'Message',
        'rowCount'    => 'RowCount',
        'rows'        => 'Rows',
        'success'     => 'Success',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }
        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }
        if (isset($map['Rows'])) {
            if (!empty($map['Rows'])) {
                $model->rows = $map['Rows'];
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
