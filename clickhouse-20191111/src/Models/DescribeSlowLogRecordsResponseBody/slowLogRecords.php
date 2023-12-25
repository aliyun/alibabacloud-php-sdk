<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogRecordsResponseBody;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogRecordsResponseBody\slowLogRecords\data;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogRecordsResponseBody\slowLogRecords\statistics;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogRecordsResponseBody\slowLogRecords\tableSchema;
use AlibabaCloud\Tea\Model;

class slowLogRecords extends Model
{
    /**
     * @description Details about the slow query logs.
     *
     * @var data
     */
    public $data;

    /**
     * @description The number of rows in the result set.
     *
     * @example 1
     *
     * @var string
     */
    public $rows;

    /**
     * @description The number of entries per page.
     *
     * @example 1
     *
     * @var string
     */
    public $rowsBeforeLimitAtLeast;

    /**
     * @description The statistics of the results.
     *
     * @var statistics
     */
    public $statistics;

    /**
     * @description The schema of the table in the database.
     *
     * @var tableSchema
     */
    public $tableSchema;
    protected $_name = [
        'data'                   => 'Data',
        'rows'                   => 'Rows',
        'rowsBeforeLimitAtLeast' => 'RowsBeforeLimitAtLeast',
        'statistics'             => 'Statistics',
        'tableSchema'            => 'TableSchema',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }
        if (null !== $this->rowsBeforeLimitAtLeast) {
            $res['RowsBeforeLimitAtLeast'] = $this->rowsBeforeLimitAtLeast;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = null !== $this->statistics ? $this->statistics->toMap() : null;
        }
        if (null !== $this->tableSchema) {
            $res['TableSchema'] = null !== $this->tableSchema ? $this->tableSchema->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slowLogRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Rows'])) {
            $model->rows = $map['Rows'];
        }
        if (isset($map['RowsBeforeLimitAtLeast'])) {
            $model->rowsBeforeLimitAtLeast = $map['RowsBeforeLimitAtLeast'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = statistics::fromMap($map['Statistics']);
        }
        if (isset($map['TableSchema'])) {
            $model->tableSchema = tableSchema::fromMap($map['TableSchema']);
        }

        return $model;
    }
}
