<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenSecurityStatInfoResponseBody;

use AlibabaCloud\Tea\Model;

class securityEvent extends Model
{
    /**
     * @var string[]
     */
    public $dateArray;

    /**
     * @var string[]
     */
    public $levelsOn;

    /**
     * @example 0
     *
     * @var int
     */
    public $remindCount;

    /**
     * @var string[]
     */
    public $remindList;

    /**
     * @example 2
     *
     * @var int
     */
    public $seriousCount;

    /**
     * @var string[]
     */
    public $seriousList;

    /**
     * @example 10
     *
     * @var int
     */
    public $suspiciousCount;

    /**
     * @var string[]
     */
    public $suspiciousList;

    /**
     * @example 8
     *
     * @var int
     */
    public $totalCount;

    /**
     * @var string[]
     */
    public $valueArray;
    protected $_name = [
        'dateArray' => 'DateArray',
        'levelsOn' => 'LevelsOn',
        'remindCount' => 'RemindCount',
        'remindList' => 'RemindList',
        'seriousCount' => 'SeriousCount',
        'seriousList' => 'SeriousList',
        'suspiciousCount' => 'SuspiciousCount',
        'suspiciousList' => 'SuspiciousList',
        'totalCount' => 'TotalCount',
        'valueArray' => 'ValueArray',
    ];

    public function validate() {}

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
