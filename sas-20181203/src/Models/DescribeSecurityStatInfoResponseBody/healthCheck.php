<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityStatInfoResponseBody;

use AlibabaCloud\Tea\Model;

class healthCheck extends Model
{
    /**
     * @var int
     */
    public $highCount;

    /**
     * @var int
     */
    public $lowCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $mediumCount;

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
    public $levelsOn;

    /**
     * @var string[]
     */
    public $lowList;

    /**
     * @var string[]
     */
    public $mediumList;

    /**
     * @var string[]
     */
    public $dateArray;

    /**
     * @var string[]
     */
    public $highList;
    protected $_name = [
        'highCount'   => 'HighCount',
        'lowCount'    => 'LowCount',
        'totalCount'  => 'TotalCount',
        'mediumCount' => 'MediumCount',
        'valueArray'  => 'ValueArray',
        'timeArray'   => 'TimeArray',
        'levelsOn'    => 'LevelsOn',
        'lowList'     => 'LowList',
        'mediumList'  => 'MediumList',
        'dateArray'   => 'DateArray',
        'highList'    => 'HighList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->highCount) {
            $res['HighCount'] = $this->highCount;
        }
        if (null !== $this->lowCount) {
            $res['LowCount'] = $this->lowCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->mediumCount) {
            $res['MediumCount'] = $this->mediumCount;
        }
        if (null !== $this->valueArray) {
            $res['ValueArray'] = $this->valueArray;
        }
        if (null !== $this->timeArray) {
            $res['TimeArray'] = $this->timeArray;
        }
        if (null !== $this->levelsOn) {
            $res['LevelsOn'] = $this->levelsOn;
        }
        if (null !== $this->lowList) {
            $res['LowList'] = $this->lowList;
        }
        if (null !== $this->mediumList) {
            $res['MediumList'] = $this->mediumList;
        }
        if (null !== $this->dateArray) {
            $res['DateArray'] = $this->dateArray;
        }
        if (null !== $this->highList) {
            $res['HighList'] = $this->highList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthCheck
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HighCount'])) {
            $model->highCount = $map['HighCount'];
        }
        if (isset($map['LowCount'])) {
            $model->lowCount = $map['LowCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['MediumCount'])) {
            $model->mediumCount = $map['MediumCount'];
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
        if (isset($map['LevelsOn'])) {
            if (!empty($map['LevelsOn'])) {
                $model->levelsOn = $map['LevelsOn'];
            }
        }
        if (isset($map['LowList'])) {
            if (!empty($map['LowList'])) {
                $model->lowList = $map['LowList'];
            }
        }
        if (isset($map['MediumList'])) {
            if (!empty($map['MediumList'])) {
                $model->mediumList = $map['MediumList'];
            }
        }
        if (isset($map['DateArray'])) {
            if (!empty($map['DateArray'])) {
                $model->dateArray = $map['DateArray'];
            }
        }
        if (isset($map['HighList'])) {
            if (!empty($map['HighList'])) {
                $model->highList = $map['HighList'];
            }
        }

        return $model;
    }
}
