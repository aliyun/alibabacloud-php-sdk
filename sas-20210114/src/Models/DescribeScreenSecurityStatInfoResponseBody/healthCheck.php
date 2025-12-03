<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenSecurityStatInfoResponseBody;

use AlibabaCloud\Dara\Model;

class healthCheck extends Model
{
    /**
     * @var string[]
     */
    public $dateArray;

    /**
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
     * @var int
     */
    public $lowCount;

    /**
     * @var string[]
     */
    public $lowList;

    /**
     * @var int
     */
    public $mediumCount;

    /**
     * @var string[]
     */
    public $mediumList;

    /**
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

    public function validate()
    {
        if (\is_array($this->dateArray)) {
            Model::validateArray($this->dateArray);
        }
        if (\is_array($this->highList)) {
            Model::validateArray($this->highList);
        }
        if (\is_array($this->levelsOn)) {
            Model::validateArray($this->levelsOn);
        }
        if (\is_array($this->lowList)) {
            Model::validateArray($this->lowList);
        }
        if (\is_array($this->mediumList)) {
            Model::validateArray($this->mediumList);
        }
        if (\is_array($this->valueArray)) {
            Model::validateArray($this->valueArray);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dateArray) {
            if (\is_array($this->dateArray)) {
                $res['DateArray'] = [];
                $n1 = 0;
                foreach ($this->dateArray as $item1) {
                    $res['DateArray'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->highCount) {
            $res['HighCount'] = $this->highCount;
        }

        if (null !== $this->highList) {
            if (\is_array($this->highList)) {
                $res['HighList'] = [];
                $n1 = 0;
                foreach ($this->highList as $item1) {
                    $res['HighList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->levelsOn) {
            if (\is_array($this->levelsOn)) {
                $res['LevelsOn'] = [];
                $n1 = 0;
                foreach ($this->levelsOn as $item1) {
                    $res['LevelsOn'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lowCount) {
            $res['LowCount'] = $this->lowCount;
        }

        if (null !== $this->lowList) {
            if (\is_array($this->lowList)) {
                $res['LowList'] = [];
                $n1 = 0;
                foreach ($this->lowList as $item1) {
                    $res['LowList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mediumCount) {
            $res['MediumCount'] = $this->mediumCount;
        }

        if (null !== $this->mediumList) {
            if (\is_array($this->mediumList)) {
                $res['MediumList'] = [];
                $n1 = 0;
                foreach ($this->mediumList as $item1) {
                    $res['MediumList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->valueArray) {
            if (\is_array($this->valueArray)) {
                $res['ValueArray'] = [];
                $n1 = 0;
                foreach ($this->valueArray as $item1) {
                    $res['ValueArray'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DateArray'])) {
            if (!empty($map['DateArray'])) {
                $model->dateArray = [];
                $n1 = 0;
                foreach ($map['DateArray'] as $item1) {
                    $model->dateArray[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HighCount'])) {
            $model->highCount = $map['HighCount'];
        }

        if (isset($map['HighList'])) {
            if (!empty($map['HighList'])) {
                $model->highList = [];
                $n1 = 0;
                foreach ($map['HighList'] as $item1) {
                    $model->highList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LevelsOn'])) {
            if (!empty($map['LevelsOn'])) {
                $model->levelsOn = [];
                $n1 = 0;
                foreach ($map['LevelsOn'] as $item1) {
                    $model->levelsOn[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LowCount'])) {
            $model->lowCount = $map['LowCount'];
        }

        if (isset($map['LowList'])) {
            if (!empty($map['LowList'])) {
                $model->lowList = [];
                $n1 = 0;
                foreach ($map['LowList'] as $item1) {
                    $model->lowList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MediumCount'])) {
            $model->mediumCount = $map['MediumCount'];
        }

        if (isset($map['MediumList'])) {
            if (!empty($map['MediumList'])) {
                $model->mediumList = [];
                $n1 = 0;
                foreach ($map['MediumList'] as $item1) {
                    $model->mediumList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['ValueArray'])) {
            if (!empty($map['ValueArray'])) {
                $model->valueArray = [];
                $n1 = 0;
                foreach ($map['ValueArray'] as $item1) {
                    $model->valueArray[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
