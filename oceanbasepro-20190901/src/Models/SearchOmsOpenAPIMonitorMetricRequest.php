<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class SearchOmsOpenAPIMonitorMetricRequest extends Model
{
    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $maxPointNum;

    /**
     * @var string
     */
    public $metric;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $workerGradeId;
    protected $_name = [
        'beginTime'     => 'BeginTime',
        'endTime'       => 'EndTime',
        'maxPointNum'   => 'MaxPointNum',
        'metric'        => 'Metric',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'projectId'     => 'ProjectId',
        'workerGradeId' => 'WorkerGradeId',
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
        if (null !== $this->maxPointNum) {
            $res['MaxPointNum'] = $this->maxPointNum;
        }
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->workerGradeId) {
            $res['WorkerGradeId'] = $this->workerGradeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchOmsOpenAPIMonitorMetricRequest
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
        if (isset($map['MaxPointNum'])) {
            $model->maxPointNum = $map['MaxPointNum'];
        }
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['WorkerGradeId'])) {
            $model->workerGradeId = $map['WorkerGradeId'];
        }

        return $model;
    }
}
