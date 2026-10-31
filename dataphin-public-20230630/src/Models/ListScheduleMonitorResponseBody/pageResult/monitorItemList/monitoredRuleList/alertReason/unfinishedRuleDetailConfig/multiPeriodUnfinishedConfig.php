<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList\monitoredRuleList\alertReason\unfinishedRuleDetailConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList\monitoredRuleList\alertReason\unfinishedRuleDetailConfig\multiPeriodUnfinishedConfig\customPeriodList;

class multiPeriodUnfinishedConfig extends Model
{
    /**
     * @var customPeriodList[]
     */
    public $customPeriodList;

    /**
     * @var int
     */
    public $intervalAfterDueTime;

    /**
     * @var string
     */
    public $intervalUnit;

    /**
     * @var string
     */
    public $monitorPeriodType;

    /**
     * @var string
     */
    public $triggerRuleType;
    protected $_name = [
        'customPeriodList' => 'CustomPeriodList',
        'intervalAfterDueTime' => 'IntervalAfterDueTime',
        'intervalUnit' => 'IntervalUnit',
        'monitorPeriodType' => 'MonitorPeriodType',
        'triggerRuleType' => 'TriggerRuleType',
    ];

    public function validate()
    {
        if (\is_array($this->customPeriodList)) {
            Model::validateArray($this->customPeriodList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customPeriodList) {
            if (\is_array($this->customPeriodList)) {
                $res['CustomPeriodList'] = [];
                $n1 = 0;
                foreach ($this->customPeriodList as $item1) {
                    $res['CustomPeriodList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->intervalAfterDueTime) {
            $res['IntervalAfterDueTime'] = $this->intervalAfterDueTime;
        }

        if (null !== $this->intervalUnit) {
            $res['IntervalUnit'] = $this->intervalUnit;
        }

        if (null !== $this->monitorPeriodType) {
            $res['MonitorPeriodType'] = $this->monitorPeriodType;
        }

        if (null !== $this->triggerRuleType) {
            $res['TriggerRuleType'] = $this->triggerRuleType;
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
        if (isset($map['CustomPeriodList'])) {
            if (!empty($map['CustomPeriodList'])) {
                $model->customPeriodList = [];
                $n1 = 0;
                foreach ($map['CustomPeriodList'] as $item1) {
                    $model->customPeriodList[$n1] = customPeriodList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IntervalAfterDueTime'])) {
            $model->intervalAfterDueTime = $map['IntervalAfterDueTime'];
        }

        if (isset($map['IntervalUnit'])) {
            $model->intervalUnit = $map['IntervalUnit'];
        }

        if (isset($map['MonitorPeriodType'])) {
            $model->monitorPeriodType = $map['MonitorPeriodType'];
        }

        if (isset($map['TriggerRuleType'])) {
            $model->triggerRuleType = $map['TriggerRuleType'];
        }

        return $model;
    }
}
