<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeCreditUsageInfoResponseBody\usageInfoList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeCreditUsageInfoResponseBody\usageInfoList\usageInfo\creditTrendList;

class usageInfo extends Model
{
    /**
     * @var creditTrendList[]
     */
    public $creditTrendList;

    /**
     * @var string
     */
    public $currentInstanceId;

    /**
     * @var int
     */
    public $currentRemainCredit;

    /**
     * @var int
     */
    public $currentTotalCredit;

    /**
     * @var int
     */
    public $currentUsedCredit;

    /**
     * @var int
     */
    public $dayUsedCredit;

    /**
     * @var int
     */
    public $periodTotalCredit;

    /**
     * @var int
     */
    public $periodUsedCredit;

    /**
     * @var int
     */
    public $remainCredit;

    /**
     * @var int
     */
    public $totalCredit;

    /**
     * @var int
     */
    public $totalUsedCredit;

    /**
     * @var int
     */
    public $warnPercent;

    /**
     * @var int
     */
    public $weekUsedCredit;
    protected $_name = [
        'creditTrendList' => 'CreditTrendList',
        'currentInstanceId' => 'CurrentInstanceId',
        'currentRemainCredit' => 'CurrentRemainCredit',
        'currentTotalCredit' => 'CurrentTotalCredit',
        'currentUsedCredit' => 'CurrentUsedCredit',
        'dayUsedCredit' => 'DayUsedCredit',
        'periodTotalCredit' => 'PeriodTotalCredit',
        'periodUsedCredit' => 'PeriodUsedCredit',
        'remainCredit' => 'RemainCredit',
        'totalCredit' => 'TotalCredit',
        'totalUsedCredit' => 'TotalUsedCredit',
        'warnPercent' => 'WarnPercent',
        'weekUsedCredit' => 'WeekUsedCredit',
    ];

    public function validate()
    {
        if (\is_array($this->creditTrendList)) {
            Model::validateArray($this->creditTrendList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creditTrendList) {
            if (\is_array($this->creditTrendList)) {
                $res['CreditTrendList'] = [];
                $n1 = 0;
                foreach ($this->creditTrendList as $item1) {
                    $res['CreditTrendList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->currentInstanceId) {
            $res['CurrentInstanceId'] = $this->currentInstanceId;
        }

        if (null !== $this->currentRemainCredit) {
            $res['CurrentRemainCredit'] = $this->currentRemainCredit;
        }

        if (null !== $this->currentTotalCredit) {
            $res['CurrentTotalCredit'] = $this->currentTotalCredit;
        }

        if (null !== $this->currentUsedCredit) {
            $res['CurrentUsedCredit'] = $this->currentUsedCredit;
        }

        if (null !== $this->dayUsedCredit) {
            $res['DayUsedCredit'] = $this->dayUsedCredit;
        }

        if (null !== $this->periodTotalCredit) {
            $res['PeriodTotalCredit'] = $this->periodTotalCredit;
        }

        if (null !== $this->periodUsedCredit) {
            $res['PeriodUsedCredit'] = $this->periodUsedCredit;
        }

        if (null !== $this->remainCredit) {
            $res['RemainCredit'] = $this->remainCredit;
        }

        if (null !== $this->totalCredit) {
            $res['TotalCredit'] = $this->totalCredit;
        }

        if (null !== $this->totalUsedCredit) {
            $res['TotalUsedCredit'] = $this->totalUsedCredit;
        }

        if (null !== $this->warnPercent) {
            $res['WarnPercent'] = $this->warnPercent;
        }

        if (null !== $this->weekUsedCredit) {
            $res['WeekUsedCredit'] = $this->weekUsedCredit;
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
        if (isset($map['CreditTrendList'])) {
            if (!empty($map['CreditTrendList'])) {
                $model->creditTrendList = [];
                $n1 = 0;
                foreach ($map['CreditTrendList'] as $item1) {
                    $model->creditTrendList[$n1] = creditTrendList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CurrentInstanceId'])) {
            $model->currentInstanceId = $map['CurrentInstanceId'];
        }

        if (isset($map['CurrentRemainCredit'])) {
            $model->currentRemainCredit = $map['CurrentRemainCredit'];
        }

        if (isset($map['CurrentTotalCredit'])) {
            $model->currentTotalCredit = $map['CurrentTotalCredit'];
        }

        if (isset($map['CurrentUsedCredit'])) {
            $model->currentUsedCredit = $map['CurrentUsedCredit'];
        }

        if (isset($map['DayUsedCredit'])) {
            $model->dayUsedCredit = $map['DayUsedCredit'];
        }

        if (isset($map['PeriodTotalCredit'])) {
            $model->periodTotalCredit = $map['PeriodTotalCredit'];
        }

        if (isset($map['PeriodUsedCredit'])) {
            $model->periodUsedCredit = $map['PeriodUsedCredit'];
        }

        if (isset($map['RemainCredit'])) {
            $model->remainCredit = $map['RemainCredit'];
        }

        if (isset($map['TotalCredit'])) {
            $model->totalCredit = $map['TotalCredit'];
        }

        if (isset($map['TotalUsedCredit'])) {
            $model->totalUsedCredit = $map['TotalUsedCredit'];
        }

        if (isset($map['WarnPercent'])) {
            $model->warnPercent = $map['WarnPercent'];
        }

        if (isset($map['WeekUsedCredit'])) {
            $model->weekUsedCredit = $map['WeekUsedCredit'];
        }

        return $model;
    }
}
