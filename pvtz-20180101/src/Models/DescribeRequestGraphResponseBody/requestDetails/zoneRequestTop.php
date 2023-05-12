<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeRequestGraphResponseBody\requestDetails;

use AlibabaCloud\Tea\Model;

class zoneRequestTop extends Model
{
    /**
     * @example 103
     *
     * @var int
     */
    public $requestCount;

    /**
     * @example 2019-10-21T10:00Z
     *
     * @var string
     */
    public $time;

    /**
     * @example 1571652000000
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'requestCount' => 'RequestCount',
        'time'         => 'Time',
        'timestamp'    => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestCount) {
            $res['RequestCount'] = $this->requestCount;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zoneRequestTop
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestCount'])) {
            $model->requestCount = $map['RequestCount'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
