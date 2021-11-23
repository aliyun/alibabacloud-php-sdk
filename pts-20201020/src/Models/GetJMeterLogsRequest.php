<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Tea\Model;

class GetJMeterLogsRequest extends Model
{
    /**
     * @description 第几台引擎，起始为0
     *
     * @var int
     */
    public $agentIndex;

    /**
     * @description 开始时间
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description 结束时间
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 关键字
     *
     * @var string
     */
    public $keyword;

    /**
     * @description 日志等级
     *
     * @var string
     */
    public $level;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @description 报告ID
     *
     * @var string
     */
    public $reportId;

    /**
     * @description 线程名
     *
     * @var string
     */
    public $thread;
    protected $_name = [
        'agentIndex' => 'AgentIndex',
        'beginTime'  => 'BeginTime',
        'endTime'    => 'EndTime',
        'keyword'    => 'Keyword',
        'level'      => 'Level',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'reportId'   => 'ReportId',
        'thread'     => 'Thread',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentIndex) {
            $res['AgentIndex'] = $this->agentIndex;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->thread) {
            $res['Thread'] = $this->thread;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJMeterLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentIndex'])) {
            $model->agentIndex = $map['AgentIndex'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['Thread'])) {
            $model->thread = $map['Thread'];
        }

        return $model;
    }
}
