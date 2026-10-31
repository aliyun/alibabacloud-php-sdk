<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateScheduleMonitorRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateScheduleMonitorRequest\createCommand\monitoredItemConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateScheduleMonitorRequest\createCommand\monitoredRuleConfigList;

class createCommand extends Model
{
    /**
     * @var monitoredItemConfig
     */
    public $monitoredItemConfig;

    /**
     * @var monitoredRuleConfigList[]
     */
    public $monitoredRuleConfigList;
    protected $_name = [
        'monitoredItemConfig' => 'MonitoredItemConfig',
        'monitoredRuleConfigList' => 'MonitoredRuleConfigList',
    ];

    public function validate()
    {
        if (null !== $this->monitoredItemConfig) {
            $this->monitoredItemConfig->validate();
        }
        if (\is_array($this->monitoredRuleConfigList)) {
            Model::validateArray($this->monitoredRuleConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->monitoredItemConfig) {
            $res['MonitoredItemConfig'] = null !== $this->monitoredItemConfig ? $this->monitoredItemConfig->toArray($noStream) : $this->monitoredItemConfig;
        }

        if (null !== $this->monitoredRuleConfigList) {
            if (\is_array($this->monitoredRuleConfigList)) {
                $res['MonitoredRuleConfigList'] = [];
                $n1 = 0;
                foreach ($this->monitoredRuleConfigList as $item1) {
                    $res['MonitoredRuleConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MonitoredItemConfig'])) {
            $model->monitoredItemConfig = monitoredItemConfig::fromMap($map['MonitoredItemConfig']);
        }

        if (isset($map['MonitoredRuleConfigList'])) {
            if (!empty($map['MonitoredRuleConfigList'])) {
                $model->monitoredRuleConfigList = [];
                $n1 = 0;
                foreach ($map['MonitoredRuleConfigList'] as $item1) {
                    $model->monitoredRuleConfigList[$n1] = monitoredRuleConfigList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
