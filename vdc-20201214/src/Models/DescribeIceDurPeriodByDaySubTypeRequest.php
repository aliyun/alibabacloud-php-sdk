<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeIceDurPeriodByDaySubTypeRequest extends Model
{
    /**
     * @description 任务类型
     *
     * @var string
     */
    public $jobType;

    /**
     * @description 起始时间戳
     *
     * @var int
     */
    public $startTs;

    /**
     * @description 结束是时间戳
     *
     * @var int
     */
    public $endTs;

    /**
     * @description 时区
     *
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'jobType'  => 'JobType',
        'startTs'  => 'StartTs',
        'endTs'    => 'EndTs',
        'timeZone' => 'TimeZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
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
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}
