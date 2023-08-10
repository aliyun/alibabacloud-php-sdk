<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionTaskResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The timestamp that indicates the end time of the task. Unit: milliseconds.
     *
     * @example 1647213406267
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The extended information, which is a JSON string.
     *
     * @example {\"recall\":91,\"errors\":[]}
     *
     * @var string
     */
    public $extendInfo;

    /**
     * @description The name of the feature.
     *
     * @example ctr
     *
     * @var string
     */
    public $functionName;

    /**
     * @description The number of iterations.
     *
     * @example 1
     *
     * @var string
     */
    public $generation;

    /**
     * @description The progress. 90 indicates 90%.
     *
     * @example 90
     *
     * @var int
     */
    public $progress;

    /**
     * @description The ID of the task.
     *
     * @example trigger__2021-03-05T12:18:41
     *
     * @var string
     */
    public $runId;

    /**
     * @description The timestamp that indicates the start time of the task. Unit: milliseconds.
     *
     * @example 1647212220000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the task. Valid values:
     *
     *   success
     *   failed
     *   running
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime'      => 'EndTime',
        'extendInfo'   => 'ExtendInfo',
        'functionName' => 'FunctionName',
        'generation'   => 'Generation',
        'progress'     => 'Progress',
        'runId'        => 'RunId',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
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
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->generation) {
            $res['Generation'] = $this->generation;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->runId) {
            $res['RunId'] = $this->runId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['Generation'])) {
            $model->generation = $map['Generation'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RunId'])) {
            $model->runId = $map['RunId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
