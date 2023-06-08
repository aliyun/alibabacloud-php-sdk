<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserUsageDetailDataExportTaskResponseBody\usageDataPerPage\data\dataItem;

use AlibabaCloud\Tea\Model;

class taskConfig extends Model
{
    /**
     * @description The end of the time range during which data was queried.
     *
     * @example 2018-08-31T15:59:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The start of the time range during which data was queried.
     *
     * @example 2018-07-31T16:00:00Z
     *
     * @var string
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
     * @return taskConfig
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
