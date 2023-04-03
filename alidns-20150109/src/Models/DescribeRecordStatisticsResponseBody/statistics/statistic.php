<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordStatisticsResponseBody\statistics;

use AlibabaCloud\Tea\Model;

class statistic extends Model
{
    /**
     * @description The number of queries.
     *
     * @example 15292887
     *
     * @var int
     */
    public $count;

    /**
     * @description The UNIX timestamp representing the collection time.
     *
     * @example 1556640000000
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'count'     => 'Count',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
