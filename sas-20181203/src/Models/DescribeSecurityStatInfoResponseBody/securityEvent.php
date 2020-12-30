<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityStatInfoResponseBody;

use AlibabaCloud\Tea\Model;

class securityEvent extends Model
{
    /**
     * @var int
     */
    public $suspiciousCount;

    /**
     * @var int
     */
    public $remindCount;

    /**
     * @var string[]
     */
    public $valueArray;

    /**
     * @var string[]
     */
    public $timeArray;

    /**
     * @var string[]
     */
    public $remindList;

    /**
     * @var string[]
     */
    public $levelsOn;

    /**
     * @var int
     */
    public $seriousCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string[]
     */
    public $dateArray;

    /**
     * @var string[]
     */
    public $suspiciousList;

    /**
     * @var string[]
     */
    public $seriousList;
    protected $_name = [
        'suspiciousCount' => 'SuspiciousCount',
        'remindCount'     => 'RemindCount',
        'valueArray'      => 'ValueArray',
        'timeArray'       => 'TimeArray',
        'remindList'      => 'RemindList',
        'levelsOn'        => 'LevelsOn',
        'seriousCount'    => 'SeriousCount',
        'totalCount'      => 'TotalCount',
        'dateArray'       => 'DateArray',
        'suspiciousList'  => 'SuspiciousList',
        'seriousList'     => 'SeriousList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->suspiciousCount) {
            $res['SuspiciousCount'] = $this->suspiciousCount;
        }
        if (null !== $this->remindCount) {
            $res['RemindCount'] = $this->remindCount;
        }
        if (null !== $this->valueArray) {
            $res['ValueArray'] = $this->valueArray;
        }
        if (null !== $this->timeArray) {
            $res['TimeArray'] = $this->timeArray;
        }
        if (null !== $this->remindList) {
            $res['RemindList'] = $this->remindList;
        }
        if (null !== $this->levelsOn) {
            $res['LevelsOn'] = $this->levelsOn;
        }
        if (null !== $this->seriousCount) {
            $res['SeriousCount'] = $this->seriousCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->dateArray) {
            $res['DateArray'] = $this->dateArray;
        }
        if (null !== $this->suspiciousList) {
            $res['SuspiciousList'] = $this->suspiciousList;
        }
        if (null !== $this->seriousList) {
            $res['SeriousList'] = $this->seriousList;
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
        if (isset($map['SuspiciousCount'])) {
            $model->suspiciousCount = $map['SuspiciousCount'];
        }
        if (isset($map['RemindCount'])) {
            $model->remindCount = $map['RemindCount'];
        }
        if (isset($map['ValueArray'])) {
            if (!empty($map['ValueArray'])) {
                $model->valueArray = $map['ValueArray'];
            }
        }
        if (isset($map['TimeArray'])) {
            if (!empty($map['TimeArray'])) {
                $model->timeArray = $map['TimeArray'];
            }
        }
        if (isset($map['RemindList'])) {
            if (!empty($map['RemindList'])) {
                $model->remindList = $map['RemindList'];
            }
        }
        if (isset($map['LevelsOn'])) {
            if (!empty($map['LevelsOn'])) {
                $model->levelsOn = $map['LevelsOn'];
            }
        }
        if (isset($map['SeriousCount'])) {
            $model->seriousCount = $map['SeriousCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['DateArray'])) {
            if (!empty($map['DateArray'])) {
                $model->dateArray = $map['DateArray'];
            }
        }
        if (isset($map['SuspiciousList'])) {
            if (!empty($map['SuspiciousList'])) {
                $model->suspiciousList = $map['SuspiciousList'];
            }
        }
        if (isset($map['SeriousList'])) {
            if (!empty($map['SeriousList'])) {
                $model->seriousList = $map['SeriousList'];
            }
        }

        return $model;
    }
}
