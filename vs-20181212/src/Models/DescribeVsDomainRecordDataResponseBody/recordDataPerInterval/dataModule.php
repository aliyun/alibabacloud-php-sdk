<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainRecordDataResponseBody\recordDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @example 100
     *
     * @var string
     */
    public $recordValue;

    /**
     * @example 1
     *
     * @var string
     */
    public $streamCountValue;

    /**
     * @example 2021-11-19T15:59:59Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'recordValue'      => 'RecordValue',
        'streamCountValue' => 'StreamCountValue',
        'timeStamp'        => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordValue) {
            $res['RecordValue'] = $this->recordValue;
        }
        if (null !== $this->streamCountValue) {
            $res['StreamCountValue'] = $this->streamCountValue;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordValue'])) {
            $model->recordValue = $map['RecordValue'];
        }
        if (isset($map['StreamCountValue'])) {
            $model->streamCountValue = $map['StreamCountValue'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
