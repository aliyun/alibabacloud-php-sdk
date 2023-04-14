<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListDashboardDetailsFlowsRequest extends Model
{
    /**
     * @example 1588521600
     *
     * @var int
     */
    public $endTime;

    /**
     * @example all
     *
     * @var string
     */
    public $experimentIds;

    /**
     * @example USERACTIONUV_COUNT
     *
     * @var string
     */
    public $metricType;

    /**
     * @example test
     *
     * @var string
     */
    public $sceneIds;

    /**
     * @example 1588521600
     *
     * @var int
     */
    public $startTime;

    /**
     * @description traceId
     *
     * @example Alibaba
     *
     * @var string
     */
    public $traceIds;
    protected $_name = [
        'endTime'       => 'endTime',
        'experimentIds' => 'experimentIds',
        'metricType'    => 'metricType',
        'sceneIds'      => 'sceneIds',
        'startTime'     => 'startTime',
        'traceIds'      => 'traceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->experimentIds) {
            $res['experimentIds'] = $this->experimentIds;
        }
        if (null !== $this->metricType) {
            $res['metricType'] = $this->metricType;
        }
        if (null !== $this->sceneIds) {
            $res['sceneIds'] = $this->sceneIds;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->traceIds) {
            $res['traceIds'] = $this->traceIds;
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['experimentIds'])) {
            $model->experimentIds = $map['experimentIds'];
        }
        if (isset($map['metricType'])) {
            $model->metricType = $map['metricType'];
        }
        if (isset($map['sceneIds'])) {
            $model->sceneIds = $map['sceneIds'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['traceIds'])) {
            $model->traceIds = $map['traceIds'];
        }

        return $model;
    }
}
