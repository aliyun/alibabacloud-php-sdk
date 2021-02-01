<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogTrendResponseBody;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogTrendResponseBody\slowLogTrend\data;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogTrendResponseBody\slowLogTrend\statistics;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogTrendResponseBody\slowLogTrend\tableSchema;
use AlibabaCloud\Tea\Model;

class slowLogTrend extends Model
{
    /**
     * @var tableSchema
     */
    public $tableSchema;

    /**
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $rows;

    /**
     * @var string
     */
    public $rowsBeforeLimitAtLeast;

    /**
     * @var statistics
     */
    public $statistics;
    protected $_name = [
        'tableSchema'            => 'TableSchema',
        'data'                   => 'Data',
        'rows'                   => 'Rows',
        'rowsBeforeLimitAtLeast' => 'RowsBeforeLimitAtLeast',
        'statistics'             => 'Statistics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableSchema) {
            $res['TableSchema'] = null !== $this->tableSchema ? $this->tableSchema->toMap() : null;
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slowLogTrend
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableSchema'])) {
            $model->tableSchema = tableSchema::fromMap($map['TableSchema']);
        }
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

        return $model;
    }
}
