<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogTrendResponseBody\slowLogTrend;

use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @var int
     */
    public $rowsRead;

    /**
     * @var float
     */
    public $elapsedTime;

    /**
     * @var int
     */
    public $bytesRead;
    protected $_name = [
        'rowsRead'    => 'RowsRead',
        'elapsedTime' => 'ElapsedTime',
        'bytesRead'   => 'BytesRead',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rowsRead) {
            $res['RowsRead'] = $this->rowsRead;
        }
        if (null !== $this->elapsedTime) {
            $res['ElapsedTime'] = $this->elapsedTime;
        }
        if (null !== $this->bytesRead) {
            $res['BytesRead'] = $this->bytesRead;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RowsRead'])) {
            $model->rowsRead = $map['RowsRead'];
        }
        if (isset($map['ElapsedTime'])) {
            $model->elapsedTime = $map['ElapsedTime'];
        }
        if (isset($map['BytesRead'])) {
            $model->bytesRead = $map['BytesRead'];
        }

        return $model;
    }
}
