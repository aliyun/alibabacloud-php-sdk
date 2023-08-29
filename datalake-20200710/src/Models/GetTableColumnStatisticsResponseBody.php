<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class GetTableColumnStatisticsResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @var ColumnStatisticsObj[]
     */
    public $columnStatisticsObjList;

    /**
     * @example .
     *
     * @var string
     */
    public $message;

    /**
     * @example B7F4B621-E41E-4C84-B97F-42B5380A32BB
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'                    => 'Code',
        'columnStatisticsObjList' => 'ColumnStatisticsObjList',
        'message'                 => 'Message',
        'requestId'               => 'RequestId',
        'success'                 => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->columnStatisticsObjList) {
            $res['ColumnStatisticsObjList'] = [];
            if (null !== $this->columnStatisticsObjList && \is_array($this->columnStatisticsObjList)) {
                $n = 0;
                foreach ($this->columnStatisticsObjList as $item) {
                    $res['ColumnStatisticsObjList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTableColumnStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ColumnStatisticsObjList'])) {
            if (!empty($map['ColumnStatisticsObjList'])) {
                $model->columnStatisticsObjList = [];
                $n                              = 0;
                foreach ($map['ColumnStatisticsObjList'] as $item) {
                    $model->columnStatisticsObjList[$n++] = null !== $item ? ColumnStatisticsObj::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
