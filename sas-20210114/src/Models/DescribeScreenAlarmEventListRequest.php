<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Tea\Model;

class DescribeScreenAlarmEventListRequest extends Model
{
    /**
     * @var string
     */
    public $alarmEventName;

    /**
     * @var string
     */
    public $alarmEventType;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example Y
     *
     * @var string
     */
    public $dealed;

    /**
     * @description This parameter is required.
     *
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example serious
     *
     * @var string
     */
    public $levels;

    /**
     * @description This parameter is required.
     *
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example 222.185.XX.XX
     *
     * @var string
     */
    public $remark;

    /**
     * @example 1683862286000
     *
     * @var string
     */
    public $timeEnd;

    /**
     * @example 1687104000000
     *
     * @var string
     */
    public $timeStart;
    protected $_name = [
        'alarmEventName' => 'AlarmEventName',
        'alarmEventType' => 'AlarmEventType',
        'currentPage' => 'CurrentPage',
        'dealed' => 'Dealed',
        'from' => 'From',
        'lang' => 'Lang',
        'levels' => 'Levels',
        'pageSize' => 'PageSize',
        'remark' => 'Remark',
        'timeEnd' => 'TimeEnd',
        'timeStart' => 'TimeStart',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmEventName) {
            $res['AlarmEventName'] = $this->alarmEventName;
        }
        if (null !== $this->alarmEventType) {
            $res['AlarmEventType'] = $this->alarmEventType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->levels) {
            $res['Levels'] = $this->levels;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->timeEnd) {
            $res['TimeEnd'] = $this->timeEnd;
        }
        if (null !== $this->timeStart) {
            $res['TimeStart'] = $this->timeStart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScreenAlarmEventListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmEventName'])) {
            $model->alarmEventName = $map['AlarmEventName'];
        }
        if (isset($map['AlarmEventType'])) {
            $model->alarmEventType = $map['AlarmEventType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Levels'])) {
            $model->levels = $map['Levels'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['TimeEnd'])) {
            $model->timeEnd = $map['TimeEnd'];
        }
        if (isset($map['TimeStart'])) {
            $model->timeStart = $map['TimeStart'];
        }

        return $model;
    }
}
