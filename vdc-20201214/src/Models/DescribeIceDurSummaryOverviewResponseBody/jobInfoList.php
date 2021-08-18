<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeIceDurSummaryOverviewResponseBody;

use AlibabaCloud\Tea\Model;

class jobInfoList extends Model
{
    /**
     * @description 作业类型
     *
     * @var string
     */
    public $jobType;

    /**
     * @description 时间维度
     *
     * @var string
     */
    public $timeRange;

    /**
     * @description 任务时长
     *
     * @var int
     */
    public $duration;
    protected $_name = [
        'jobType'   => 'JobType',
        'timeRange' => 'TimeRange',
        'duration'  => 'Duration',
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
        if (null !== $this->timeRange) {
            $res['TimeRange'] = $this->timeRange;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['TimeRange'])) {
            $model->timeRange = $map['TimeRange'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}
