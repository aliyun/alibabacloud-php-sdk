<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateScheduleMonitorRequest\createCommand\monitoredRuleConfigList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateScheduleMonitorRequest\createCommand\monitoredRuleConfigList\unfinishedRuleDetailConfig\dailyUnfinishedConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateScheduleMonitorRequest\createCommand\monitoredRuleConfigList\unfinishedRuleDetailConfig\multiPeriodUnfinishedConfig;

class unfinishedRuleDetailConfig extends Model
{
    /**
     * @var dailyUnfinishedConfig
     */
    public $dailyUnfinishedConfig;

    /**
     * @var multiPeriodUnfinishedConfig
     */
    public $multiPeriodUnfinishedConfig;
    protected $_name = [
        'dailyUnfinishedConfig' => 'DailyUnfinishedConfig',
        'multiPeriodUnfinishedConfig' => 'MultiPeriodUnfinishedConfig',
    ];

    public function validate()
    {
        if (null !== $this->dailyUnfinishedConfig) {
            $this->dailyUnfinishedConfig->validate();
        }
        if (null !== $this->multiPeriodUnfinishedConfig) {
            $this->multiPeriodUnfinishedConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dailyUnfinishedConfig) {
            $res['DailyUnfinishedConfig'] = null !== $this->dailyUnfinishedConfig ? $this->dailyUnfinishedConfig->toArray($noStream) : $this->dailyUnfinishedConfig;
        }

        if (null !== $this->multiPeriodUnfinishedConfig) {
            $res['MultiPeriodUnfinishedConfig'] = null !== $this->multiPeriodUnfinishedConfig ? $this->multiPeriodUnfinishedConfig->toArray($noStream) : $this->multiPeriodUnfinishedConfig;
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
        if (isset($map['DailyUnfinishedConfig'])) {
            $model->dailyUnfinishedConfig = dailyUnfinishedConfig::fromMap($map['DailyUnfinishedConfig']);
        }

        if (isset($map['MultiPeriodUnfinishedConfig'])) {
            $model->multiPeriodUnfinishedConfig = multiPeriodUnfinishedConfig::fromMap($map['MultiPeriodUnfinishedConfig']);
        }

        return $model;
    }
}
