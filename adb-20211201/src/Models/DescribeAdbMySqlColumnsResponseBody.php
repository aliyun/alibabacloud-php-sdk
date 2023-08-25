<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAdbMySqlColumnsResponseBody\columns;
use AlibabaCloud\Tea\Model;

class DescribeAdbMySqlColumnsResponseBody extends Model
{
    /**
     * @description The total number of columns.
     *
     * @example 1
     *
     * @var int
     */
    public $columnCount;

    /**
     * @description Details of the columns.
     *
     * @var columns[]
     */
    public $columns;

    /**
     * @description The message returned for the operation. Valid values:
     *
     *   **Success** is returned if the operation is successful.
     *   An error message is returned if the operation fails.
     *
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example A9F013CD-0222-595E-8157-445969B97F03
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the database.
     *
     * @example adb_demo
     *
     * @var string
     */
    public $schema;

    /**
     * @description Indicates whether the operation is successful. Valid values:
     *
     *   **true**: The operation is successful.
     *   **false**: The operation fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The name of the table.
     *
     * @example test
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'columnCount' => 'ColumnCount',
        'columns'     => 'Columns',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'schema'      => 'Schema',
        'success'     => 'Success',
        'tableName'   => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnCount) {
            $res['ColumnCount'] = $this->columnCount;
        }
        if (null !== $this->columns) {
            $res['Columns'] = [];
            if (null !== $this->columns && \is_array($this->columns)) {
                $n = 0;
                foreach ($this->columns as $item) {
                    $res['Columns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAdbMySqlColumnsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnCount'])) {
            $model->columnCount = $map['ColumnCount'];
        }
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n              = 0;
                foreach ($map['Columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? columns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
