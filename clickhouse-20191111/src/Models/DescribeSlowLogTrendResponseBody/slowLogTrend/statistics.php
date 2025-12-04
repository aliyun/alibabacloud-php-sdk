<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogTrendResponseBody\slowLogTrend;

use AlibabaCloud\Dara\Model;

class statistics extends Model
{
    /**
     * @var int
     */
    public $bytesRead;

    /**
     * @var float
     */
    public $elapsedTime;

    /**
     * @var int
     */
    public $rowsRead;
    protected $_name = [
        'bytesRead' => 'BytesRead',
        'elapsedTime' => 'ElapsedTime',
        'rowsRead' => 'RowsRead',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
