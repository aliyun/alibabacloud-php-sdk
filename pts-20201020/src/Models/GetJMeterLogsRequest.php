<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Tea\Model;

class GetJMeterLogsRequest extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $agentIndex;

    /**
     * @example 1637115306000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @example 1637115309000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example test
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
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example KS2YE3J2
     *
     * @var string
     */
    public $reportId;

    /**
     * @example main
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
