<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityStatInfoResponseBody;

use AlibabaCloud\Tea\Model;

class securityEvent extends Model
{
    /**
     * @description The points in time when data of unhandled alerts is collected in the trend chart.
     *
     * @var string[]
     */
    public $dateArray;

    /**
     * @description The risk levels of unhandled alerts.
     *
     * @var string[]
     */
    public $levelsOn;

    /**
     * @description The number of **remind** alerts on the current day.
     *
     * @example 0
     *
     * @var int
     */
    public $remindCount;

    /**
     * @description The numbers of remind alerts at all points in time.
     *
     * @var string[]
     */
    public $remindList;

    /**
     * @description The number of **serious** alerts on the current day.
     *
     * @example 404
     *
     * @var int
     */
    public $seriousCount;

    /**
     * @description The numbers of serious alerts at all points in time.
     *
     * @var string[]
     */
    public $seriousList;

    /**
     * @description The number of **suspicious** alerts on the current day.
     *
     * @example 148
     *
     * @var int
     */
    public $suspiciousCount;

    /**
     * @description The numbers of suspicious alerts at all points in time.
     *
     * @var string[]
     */
    public $suspiciousList;

    /**
     * @description The time periods during which data of the same alert is collected.
     *
     * @var string[]
     */
    public $timeArray;

    /**
     * @description The total number of unhandled alerts on the current day.
     *
     * @example 552
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The numbers of unhandled alerts at all points in time.
     *
     * @var string[]
     */
    public $valueArray;
    protected $_name = [
        'dateArray'       => 'DateArray',
        'levelsOn'        => 'LevelsOn',
        'remindCount'     => 'RemindCount',
        'remindList'      => 'RemindList',
        'seriousCount'    => 'SeriousCount',
        'seriousList'     => 'SeriousList',
        'suspiciousCount' => 'SuspiciousCount',
        'suspiciousList'  => 'SuspiciousList',
        'timeArray'       => 'TimeArray',
        'totalCount'      => 'TotalCount',
        'valueArray'      => 'ValueArray',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dateArray) {
            $res['DateArray'] = $this->dateArray;
        }
        if (null !== $this->levelsOn) {
            $res['LevelsOn'] = $this->levelsOn;
        }
        if (null !== $this->remindCount) {
            $res['RemindCount'] = $this->remindCount;
        }
        if (null !== $this->remindList) {
            $res['RemindList'] = $this->remindList;
        }
        if (null !== $this->seriousCount) {
            $res['SeriousCount'] = $this->seriousCount;
        }
        if (null !== $this->seriousList) {
            $res['SeriousList'] = $this->seriousList;
        }
        if (null !== $this->suspiciousCount) {
            $res['SuspiciousCount'] = $this->suspiciousCount;
        }
        if (null !== $this->suspiciousList) {
            $res['SuspiciousList'] = $this->suspiciousList;
        }
        if (null !== $this->timeArray) {
            $res['TimeArray'] = $this->timeArray;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->valueArray) {
            $res['ValueArray'] = $this->valueArray;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityEvent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DateArray'])) {
            if (!empty($map['DateArray'])) {
                $model->dateArray = $map['DateArray'];
            }
        }
        if (isset($map['LevelsOn'])) {
            if (!empty($map['LevelsOn'])) {
                $model->levelsOn = $map['LevelsOn'];
            }
        }
        if (isset($map['RemindCount'])) {
            $model->remindCount = $map['RemindCount'];
        }
        if (isset($map['RemindList'])) {
            if (!empty($map['RemindList'])) {
                $model->remindList = $map['RemindList'];
            }
        }
        if (isset($map['SeriousCount'])) {
            $model->seriousCount = $map['SeriousCount'];
        }
        if (isset($map['SeriousList'])) {
            if (!empty($map['SeriousList'])) {
                $model->seriousList = $map['SeriousList'];
            }
        }
        if (isset($map['SuspiciousCount'])) {
            $model->suspiciousCount = $map['SuspiciousCount'];
        }
        if (isset($map['SuspiciousList'])) {
            if (!empty($map['SuspiciousList'])) {
                $model->suspiciousList = $map['SuspiciousList'];
            }
        }
        if (isset($map['TimeArray'])) {
            if (!empty($map['TimeArray'])) {
                $model->timeArray = $map['TimeArray'];
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['ValueArray'])) {
            if (!empty($map['ValueArray'])) {
                $model->valueArray = $map['ValueArray'];
            }
        }

        return $model;
    }
}
