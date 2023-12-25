<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeProcessListResponseBody\processList;

use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @description The size of the data that was scanned. Unit: bytes.
     *
     * @example 9141300000
     *
     * @var int
     */
    public $bytesRead;

    /**
     * @description The average response time.
     *
     * @example 4156
     *
     * @var float
     */
    public $elapsedTime;

    /**
     * @description The number of scanned rows.
     *
     * @example 1000000
     *
     * @var int
     */
    public $rowsRead;
    protected $_name = [
        'bytesRead'   => 'BytesRead',
        'elapsedTime' => 'ElapsedTime',
        'rowsRead'    => 'RowsRead',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bytesRead) {
            $res['BytesRead'] = $this->bytesRead;
        }
        if (null !== $this->elapsedTime) {
            $res['ElapsedTime'] = $this->elapsedTime;
        }
        if (null !== $this->rowsRead) {
            $res['RowsRead'] = $this->rowsRead;
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
        if (isset($map['BytesRead'])) {
            $model->bytesRead = $map['BytesRead'];
        }
        if (isset($map['ElapsedTime'])) {
            $model->elapsedTime = $map['ElapsedTime'];
        }
        if (isset($map['RowsRead'])) {
            $model->rowsRead = $map['RowsRead'];
        }

        return $model;
    }
}
