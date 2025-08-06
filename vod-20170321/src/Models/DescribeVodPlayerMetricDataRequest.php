<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DescribeVodPlayerMetricDataRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $filters;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $metrics;

    /**
     * @var string
     */
    public $os;

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
    public $startTime;

    /**
     * @var string
     */
    public $terminalType;

    /**
     * @var int
     */
    public $top;
    protected $_name = [
        'appId' => 'AppId',
        'endTime' => 'EndTime',
        'filters' => 'Filters',
        'interval' => 'Interval',
        'language' => 'Language',
        'metrics' => 'Metrics',
        'os' => 'Os',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'startTime' => 'StartTime',
        'terminalType' => 'TerminalType',
        'top' => 'Top',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->filters) {
            $res['Filters'] = $this->filters;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->metrics) {
            $res['Metrics'] = $this->metrics;
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->terminalType) {
            $res['TerminalType'] = $this->terminalType;
        }

        if (null !== $this->top) {
            $res['Top'] = $this->top;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Filters'])) {
            $model->filters = $map['Filters'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Metrics'])) {
            $model->metrics = $map['Metrics'];
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TerminalType'])) {
            $model->terminalType = $map['TerminalType'];
        }

        if (isset($map['Top'])) {
            $model->top = $map['Top'];
        }

        return $model;
    }
}
