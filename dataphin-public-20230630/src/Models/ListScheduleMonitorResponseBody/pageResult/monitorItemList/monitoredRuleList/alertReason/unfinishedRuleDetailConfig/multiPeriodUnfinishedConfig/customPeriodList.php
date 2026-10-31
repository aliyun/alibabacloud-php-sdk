<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList\monitoredRuleList\alertReason\unfinishedRuleDetailConfig\multiPeriodUnfinishedConfig;

use AlibabaCloud\Dara\Model;

class customPeriodList extends Model
{
    /**
     * @var string
     */
    public $fixedUnfinishedTime;

    /**
     * @var int
     */
    public $periodNum;
    protected $_name = [
        'fixedUnfinishedTime' => 'FixedUnfinishedTime',
        'periodNum' => 'PeriodNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fixedUnfinishedTime) {
            $res['FixedUnfinishedTime'] = $this->fixedUnfinishedTime;
        }

        if (null !== $this->periodNum) {
            $res['PeriodNum'] = $this->periodNum;
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
        if (isset($map['FixedUnfinishedTime'])) {
            $model->fixedUnfinishedTime = $map['FixedUnfinishedTime'];
        }

        if (isset($map['PeriodNum'])) {
            $model->periodNum = $map['PeriodNum'];
        }

        return $model;
    }
}
