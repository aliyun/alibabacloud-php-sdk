<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateScheduleMonitorRequest\updateCommand\monitoredRuleConfigList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateScheduleMonitorRequest\updateCommand\monitoredRuleConfigList\alertStrategy\monitoredTimeRange;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateScheduleMonitorRequest\updateCommand\monitoredRuleConfigList\alertStrategy\receiverConfigList;

class alertStrategy extends Model
{
    /**
     * @var int
     */
    public $alertFrequency;

    /**
     * @var monitoredTimeRange
     */
    public $monitoredTimeRange;

    /**
     * @var receiverConfigList[]
     */
    public $receiverConfigList;

    /**
     * @var int
     */
    public $sendTimes;
    protected $_name = [
        'alertFrequency' => 'AlertFrequency',
        'monitoredTimeRange' => 'MonitoredTimeRange',
        'receiverConfigList' => 'ReceiverConfigList',
        'sendTimes' => 'SendTimes',
    ];

    public function validate()
    {
        if (null !== $this->monitoredTimeRange) {
            $this->monitoredTimeRange->validate();
        }
        if (\is_array($this->receiverConfigList)) {
            Model::validateArray($this->receiverConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertFrequency) {
            $res['AlertFrequency'] = $this->alertFrequency;
        }

        if (null !== $this->monitoredTimeRange) {
            $res['MonitoredTimeRange'] = null !== $this->monitoredTimeRange ? $this->monitoredTimeRange->toArray($noStream) : $this->monitoredTimeRange;
        }

        if (null !== $this->receiverConfigList) {
            if (\is_array($this->receiverConfigList)) {
                $res['ReceiverConfigList'] = [];
                $n1 = 0;
                foreach ($this->receiverConfigList as $item1) {
                    $res['ReceiverConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sendTimes) {
            $res['SendTimes'] = $this->sendTimes;
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
        if (isset($map['AlertFrequency'])) {
            $model->alertFrequency = $map['AlertFrequency'];
        }

        if (isset($map['MonitoredTimeRange'])) {
            $model->monitoredTimeRange = monitoredTimeRange::fromMap($map['MonitoredTimeRange']);
        }

        if (isset($map['ReceiverConfigList'])) {
            if (!empty($map['ReceiverConfigList'])) {
                $model->receiverConfigList = [];
                $n1 = 0;
                foreach ($map['ReceiverConfigList'] as $item1) {
                    $model->receiverConfigList[$n1] = receiverConfigList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SendTimes'])) {
            $model->sendTimes = $map['SendTimes'];
        }

        return $model;
    }
}
