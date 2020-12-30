<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models;

use AlibabaCloud\Tea\Model;

class ListDashboardDetailsFlowsRequest extends Model
{
    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $traceIds;

    /**
     * @var string
     */
    public $sceneIds;

    /**
     * @var string
     */
    public $metricType;
    protected $_name = [
        'startTime'  => 'StartTime',
        'endTime'    => 'EndTime',
        'traceIds'   => 'TraceIds',
        'sceneIds'   => 'SceneIds',
        'metricType' => 'MetricType',
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
        if (null !== $this->traceIds) {
            $res['TraceIds'] = $this->traceIds;
        }
        if (null !== $this->sceneIds) {
            $res['SceneIds'] = $this->sceneIds;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDashboardDetailsFlowsRequest
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
        if (isset($map['TraceIds'])) {
            $model->traceIds = $map['TraceIds'];
        }
        if (isset($map['SceneIds'])) {
            $model->sceneIds = $map['SceneIds'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }

        return $model;
    }
}
