<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeCreditUsageInfoResponseBody\usageInfoList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeCreditUsageInfoResponseBody\usageInfoList\usageInfo\creditTrendList;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeCreditUsageInfoResponseBody\usageInfoList\usageInfo\remainCreditInfo;

class usageInfo extends Model
{
    /**
     * @var int
     */
    public $availableAmount;

    /**
     * @var string[]
     */
    public $contactGroupNames;

    /**
     * @var creditTrendList[]
     */
    public $creditTrendList;

    /**
     * @var string
     */
    public $currentInstanceExpiredTime;

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
     * @var string
     */
    public $lastTriggeredAt;

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
     * @var remainCreditInfo
     */
    public $remainCreditInfo;

    /**
     * @var string
     */
    public $todayUsed;

    /**
     * @var int
     */
    public $totalCredit;

    /**
     * @var string
     */
    public $totalUsed;

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
        'availableAmount' => 'AvailableAmount',
        'contactGroupNames' => 'ContactGroupNames',
        'creditTrendList' => 'CreditTrendList',
        'currentInstanceExpiredTime' => 'CurrentInstanceExpiredTime',
        'currentInstanceId' => 'CurrentInstanceId',
        'currentRemainCredit' => 'CurrentRemainCredit',
        'currentTotalCredit' => 'CurrentTotalCredit',
        'currentUsedCredit' => 'CurrentUsedCredit',
        'dayUsedCredit' => 'DayUsedCredit',
        'lastTriggeredAt' => 'LastTriggeredAt',
        'periodTotalCredit' => 'PeriodTotalCredit',
        'periodUsedCredit' => 'PeriodUsedCredit',
        'remainCredit' => 'RemainCredit',
        'remainCreditInfo' => 'RemainCreditInfo',
        'todayUsed' => 'TodayUsed',
        'totalCredit' => 'TotalCredit',
        'totalUsed' => 'TotalUsed',
        'totalUsedCredit' => 'TotalUsedCredit',
        'warnPercent' => 'WarnPercent',
        'weekUsedCredit' => 'WeekUsedCredit',
    ];

    public function validate()
    {
        if (\is_array($this->contactGroupNames)) {
            Model::validateArray($this->contactGroupNames);
        }
        if (\is_array($this->creditTrendList)) {
            Model::validateArray($this->creditTrendList);
        }
        if (null !== $this->remainCreditInfo) {
            $this->remainCreditInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableAmount) {
            $res['AvailableAmount'] = $this->availableAmount;
        }

        if (null !== $this->contactGroupNames) {
            if (\is_array($this->contactGroupNames)) {
                $res['ContactGroupNames'] = [];
                $n1 = 0;
                foreach ($this->contactGroupNames as $item1) {
                    $res['ContactGroupNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

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

        if (null !== $this->currentInstanceExpiredTime) {
            $res['CurrentInstanceExpiredTime'] = $this->currentInstanceExpiredTime;
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

        if (null !== $this->lastTriggeredAt) {
            $res['LastTriggeredAt'] = $this->lastTriggeredAt;
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

        if (null !== $this->remainCreditInfo) {
            $res['RemainCreditInfo'] = null !== $this->remainCreditInfo ? $this->remainCreditInfo->toArray($noStream) : $this->remainCreditInfo;
        }

        if (null !== $this->todayUsed) {
            $res['TodayUsed'] = $this->todayUsed;
        }

        if (null !== $this->totalCredit) {
            $res['TotalCredit'] = $this->totalCredit;
        }

        if (null !== $this->totalUsed) {
            $res['TotalUsed'] = $this->totalUsed;
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
        if (isset($map['AvailableAmount'])) {
            $model->availableAmount = $map['AvailableAmount'];
        }

        if (isset($map['ContactGroupNames'])) {
            if (!empty($map['ContactGroupNames'])) {
                $model->contactGroupNames = [];
                $n1 = 0;
                foreach ($map['ContactGroupNames'] as $item1) {
                    $model->contactGroupNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

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

        if (isset($map['CurrentInstanceExpiredTime'])) {
            $model->currentInstanceExpiredTime = $map['CurrentInstanceExpiredTime'];
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

        if (isset($map['LastTriggeredAt'])) {
            $model->lastTriggeredAt = $map['LastTriggeredAt'];
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

        if (isset($map['RemainCreditInfo'])) {
            $model->remainCreditInfo = remainCreditInfo::fromMap($map['RemainCreditInfo']);
        }

        if (isset($map['TodayUsed'])) {
            $model->todayUsed = $map['TodayUsed'];
        }

        if (isset($map['TotalCredit'])) {
            $model->totalCredit = $map['TotalCredit'];
        }

        if (isset($map['TotalUsed'])) {
            $model->totalUsed = $map['TotalUsed'];
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
