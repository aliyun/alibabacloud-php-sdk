<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models;

use AlibabaCloud\Tea\Model;

class QuerySyncReportAggregationRequest extends Model
{
    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;
    protected $_name = [
        'startTime' => 'StartTime',
        'endTime'   => 'EndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySyncReportAggregationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}
