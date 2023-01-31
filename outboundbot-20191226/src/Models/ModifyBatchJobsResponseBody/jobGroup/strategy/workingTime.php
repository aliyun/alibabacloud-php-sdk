<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyBatchJobsResponseBody\jobGroup\strategy;

use AlibabaCloud\Tea\Model;

class workingTime extends Model
{
    /**
     * @example 1581937093000
     *
     * @var string
     */
    public $beginTime;

    /**
     * @example 1581997093000
     *
     * @var string
     */
    public $endTime;
    protected $_name = [
        'beginTime' => 'BeginTime',
        'endTime'   => 'EndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workingTime
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}
