<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenSecurityStatInfoResponseBody;

use AlibabaCloud\Dara\Model;

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
     * @var int
     */
    public $remindCount;

    /**
     * @var string[]
     */
    public $remindList;

    /**
     * @var int
     */
    public $seriousCount;

    /**
     * @var string[]
     */
    public $seriousList;

    /**
     * @var int
     */
    public $suspiciousCount;

    /**
     * @var string[]
     */
    public $suspiciousList;

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

    public function validate()
    {
        if (\is_array($this->dateArray)) {
            Model::validateArray($this->dateArray);
        }
        if (\is_array($this->levelsOn)) {
            Model::validateArray($this->levelsOn);
        }
        if (\is_array($this->remindList)) {
            Model::validateArray($this->remindList);
        }
        if (\is_array($this->seriousList)) {
            Model::validateArray($this->seriousList);
        }
        if (\is_array($this->suspiciousList)) {
            Model::validateArray($this->suspiciousList);
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

        if (null !== $this->remindCount) {
            $res['RemindCount'] = $this->remindCount;
        }

        if (null !== $this->remindList) {
            if (\is_array($this->remindList)) {
                $res['RemindList'] = [];
                $n1 = 0;
                foreach ($this->remindList as $item1) {
                    $res['RemindList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->seriousCount) {
            $res['SeriousCount'] = $this->seriousCount;
        }

        if (null !== $this->seriousList) {
            if (\is_array($this->seriousList)) {
                $res['SeriousList'] = [];
                $n1 = 0;
                foreach ($this->seriousList as $item1) {
                    $res['SeriousList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->suspiciousCount) {
            $res['SuspiciousCount'] = $this->suspiciousCount;
        }

        if (null !== $this->suspiciousList) {
            if (\is_array($this->suspiciousList)) {
                $res['SuspiciousList'] = [];
                $n1 = 0;
                foreach ($this->suspiciousList as $item1) {
                    $res['SuspiciousList'][$n1] = $item1;
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

        if (isset($map['RemindCount'])) {
            $model->remindCount = $map['RemindCount'];
        }

        if (isset($map['RemindList'])) {
            if (!empty($map['RemindList'])) {
                $model->remindList = [];
                $n1 = 0;
                foreach ($map['RemindList'] as $item1) {
                    $model->remindList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SeriousCount'])) {
            $model->seriousCount = $map['SeriousCount'];
        }

        if (isset($map['SeriousList'])) {
            if (!empty($map['SeriousList'])) {
                $model->seriousList = [];
                $n1 = 0;
                foreach ($map['SeriousList'] as $item1) {
                    $model->seriousList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SuspiciousCount'])) {
            $model->suspiciousCount = $map['SuspiciousCount'];
        }

        if (isset($map['SuspiciousList'])) {
            if (!empty($map['SuspiciousList'])) {
                $model->suspiciousList = [];
                $n1 = 0;
                foreach ($map['SuspiciousList'] as $item1) {
                    $model->suspiciousList[$n1] = $item1;
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
