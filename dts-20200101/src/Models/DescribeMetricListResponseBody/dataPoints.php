<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMetricListResponseBody;

use AlibabaCloud\Tea\Model;

class dataPoints extends Model
{
    /**
     * @description The statistical value.
     *
     * @example 15.25
     *
     * @var float
     */
    public $statistics;

    /**
     * @description The timestamp of the record. Unit: milliseconds.
     *
     * @example 1650872310000
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'statistics' => 'Statistics',
        'timestamp'  => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataPoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
