<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeIceDurSummaryOverviewResponseBody;

use AlibabaCloud\Tea\Model;

class jobInfoList extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @example Edit,Smart
     *
     * @var string
     */
    public $jobType;

    /**
     * @example Yesterday,ThisMonth
     *
     * @var string
     */
    public $timeRange;
    protected $_name = [
        'duration'  => 'Duration',
        'jobType'   => 'JobType',
        'timeRange' => 'TimeRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->timeRange) {
            $res['TimeRange'] = $this->timeRange;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['TimeRange'])) {
            $model->timeRange = $map['TimeRange'];
        }

        return $model;
    }
}
