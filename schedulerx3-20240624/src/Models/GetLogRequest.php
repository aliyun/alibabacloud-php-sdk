<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Tea\Model;

class GetLogRequest extends Model
{
    /**
     * @example test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description This parameter is required.
     *
     * @example xxljob-b6ec1xxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 1721636220
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1310630367761285120
     *
     * @var string
     */
    public $jobExecutionId;

    /**
     * @example hello word
     *
     * @var string
     */
    public $keyword;

    /**
     * @example INFO
     *
     * @var string
     */
    public $level;

    /**
     * @description LineNum
     *
     * @example 2
     *
     * @var int
     */
    public $lineNum;

    /**
     * @example 344008
     *
     * @var int
     */
    public $logId;

    /**
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @example true
     *
     * @var bool
     */
    public $reverse;

    /**
     * @example 1721636220
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'endTime' => 'EndTime',
        'jobExecutionId' => 'JobExecutionId',
        'keyword' => 'Keyword',
        'level' => 'Level',
        'lineNum' => 'LineNum',
        'logId' => 'LogId',
        'offset' => 'Offset',
        'reverse' => 'Reverse',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->jobExecutionId) {
            $res['JobExecutionId'] = $this->jobExecutionId;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->lineNum) {
            $res['LineNum'] = $this->lineNum;
        }
        if (null !== $this->logId) {
            $res['LogId'] = $this->logId;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['JobExecutionId'])) {
            $model->jobExecutionId = $map['JobExecutionId'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['LineNum'])) {
            $model->lineNum = $map['LineNum'];
        }
        if (isset($map['LogId'])) {
            $model->logId = $map['LogId'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
