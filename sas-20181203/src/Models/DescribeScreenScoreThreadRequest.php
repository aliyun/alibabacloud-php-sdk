<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeScreenScoreThreadRequest extends Model
{
    /**
     * @description The end of the time range to query. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * This parameter is required.
     * @example 1668064495000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The beginning of the time range to query. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * This parameter is required.
     * @example 1651290987000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'   => 'EndTime',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScreenScoreThreadRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
