<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenSecurityStatInfoResponseBody;

use AlibabaCloud\Tea\Model;

class healthCheck extends Model
{
    /**
     * @var string[]
     */
    public $dateArray;

    /**
     * @example 10
     *
     * @var int
     */
    public $highCount;

    /**
     * @var string[]
     */
    public $highList;

    /**
     * @var string[]
     */
    public $levelsOn;

    /**
     * @example 0
     *
     * @var int
     */
    public $lowCount;

    /**
     * @var string[]
     */
    public $lowList;

    /**
     * @example 21
     *
     * @var int
     */
    public $mediumCount;

    /**
     * @var string[]
     */
    public $mediumList;

    /**
     * @example 32
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
        'highCount' => 'HighCount',
        'highList' => 'HighList',
        'levelsOn' => 'LevelsOn',
        'lowCount' => 'LowCount',
        'lowList' => 'LowList',
        'mediumCount' => 'MediumCount',
        'mediumList' => 'MediumList',
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
        if (null !== $this->highCount) {
            $res['HighCount'] = $this->highCount;
        }
        if (null !== $this->highList) {
            $res['HighList'] = $this->highList;
        }
        if (null !== $this->levelsOn) {
            $res['LevelsOn'] = $this->levelsOn;
        }
        if (null !== $this->lowCount) {
            $res['LowCount'] = $this->lowCount;
        }
        if (null !== $this->lowList) {
            $res['LowList'] = $this->lowList;
        }
        if (null !== $this->mediumCount) {
            $res['MediumCount'] = $this->mediumCount;
        }
        if (null !== $this->mediumList) {
            $res['MediumList'] = $this->mediumList;
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
     * @return healthCheck
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DateArray'])) {
            if (!empty($map['DateArray'])) {
                $model->dateArray = $map['DateArray'];
            }
        }
        if (isset($map['HighCount'])) {
            $model->highCount = $map['HighCount'];
        }
        if (isset($map['HighList'])) {
            if (!empty($map['HighList'])) {
                $model->highList = $map['HighList'];
            }
        }
        if (isset($map['LevelsOn'])) {
            if (!empty($map['LevelsOn'])) {
                $model->levelsOn = $map['LevelsOn'];
            }
        }
        if (isset($map['LowCount'])) {
            $model->lowCount = $map['LowCount'];
        }
        if (isset($map['LowList'])) {
            if (!empty($map['LowList'])) {
                $model->lowList = $map['LowList'];
            }
        }
        if (isset($map['MediumCount'])) {
            $model->mediumCount = $map['MediumCount'];
        }
        if (isset($map['MediumList'])) {
            if (!empty($map['MediumList'])) {
                $model->mediumList = $map['MediumList'];
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
