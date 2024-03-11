<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeIceDurPeriodByDaySubTypeRequest extends Model
{
    /**
     * @var int
     */
    public $endTs;

    /**
     * @example Smart,Edit
     *
     * @var string
     */
    public $jobType;

    /**
     * @var int
     */
    public $startTs;

    /**
     * @example GMT+08:00
     *
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'endTs'    => 'EndTs',
        'jobType'  => 'JobType',
        'startTs'  => 'StartTs',
        'timeZone' => 'TimeZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIceDurPeriodByDaySubTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}
