<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class GetAlgorithmDefsRequest extends Model
{
    /**
     * @example 1709950208
     *
     * @var string
     */
    public $latestTimestamp;

    /**
     * @example 10
     *
     * @var int
     */
    public $rangeEnd;

    /**
     * @example 1
     *
     * @var int
     */
    public $rangeStart;

    /**
     * @example 1709950208
     *
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'latestTimestamp' => 'LatestTimestamp',
        'rangeEnd'        => 'RangeEnd',
        'rangeStart'      => 'RangeStart',
        'timestamp'       => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->latestTimestamp) {
            $res['LatestTimestamp'] = $this->latestTimestamp;
        }
        if (null !== $this->rangeEnd) {
            $res['RangeEnd'] = $this->rangeEnd;
        }
        if (null !== $this->rangeStart) {
            $res['RangeStart'] = $this->rangeStart;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAlgorithmDefsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LatestTimestamp'])) {
            $model->latestTimestamp = $map['LatestTimestamp'];
        }
        if (isset($map['RangeEnd'])) {
            $model->rangeEnd = $map['RangeEnd'];
        }
        if (isset($map['RangeStart'])) {
            $model->rangeStart = $map['RangeStart'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
