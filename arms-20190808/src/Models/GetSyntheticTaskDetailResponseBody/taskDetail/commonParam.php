<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\commonParam\alertList;

class commonParam extends Model
{
    /**
     * @var int
     */
    public $alarmFlag;

    /**
     * @var alertList[]
     */
    public $alertList;

    /**
     * @var string
     */
    public $alertNotifierId;

    /**
     * @var string
     */
    public $alertPolicyId;

    /**
     * @var string
     */
    public $monitorSamples;

    /**
     * @var string
     */
    public $startExecutionTime;
    protected $_name = [
        'alarmFlag' => 'AlarmFlag',
        'alertList' => 'AlertList',
        'alertNotifierId' => 'AlertNotifierId',
        'alertPolicyId' => 'AlertPolicyId',
        'monitorSamples' => 'MonitorSamples',
        'startExecutionTime' => 'StartExecutionTime',
    ];

    public function validate()
    {
        if (\is_array($this->alertList)) {
            Model::validateArray($this->alertList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmFlag) {
            $res['AlarmFlag'] = $this->alarmFlag;
        }

        if (null !== $this->alertList) {
            if (\is_array($this->alertList)) {
                $res['AlertList'] = [];
                $n1 = 0;
                foreach ($this->alertList as $item1) {
                    $res['AlertList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->alertNotifierId) {
            $res['AlertNotifierId'] = $this->alertNotifierId;
        }

        if (null !== $this->alertPolicyId) {
            $res['AlertPolicyId'] = $this->alertPolicyId;
        }

        if (null !== $this->monitorSamples) {
            $res['MonitorSamples'] = $this->monitorSamples;
        }

        if (null !== $this->startExecutionTime) {
            $res['StartExecutionTime'] = $this->startExecutionTime;
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
        if (isset($map['AlarmFlag'])) {
            $model->alarmFlag = $map['AlarmFlag'];
        }

        if (isset($map['AlertList'])) {
            if (!empty($map['AlertList'])) {
                $model->alertList = [];
                $n1 = 0;
                foreach ($map['AlertList'] as $item1) {
                    $model->alertList[$n1] = alertList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AlertNotifierId'])) {
            $model->alertNotifierId = $map['AlertNotifierId'];
        }

        if (isset($map['AlertPolicyId'])) {
            $model->alertPolicyId = $map['AlertPolicyId'];
        }

        if (isset($map['MonitorSamples'])) {
            $model->monitorSamples = $map['MonitorSamples'];
        }

        if (isset($map['StartExecutionTime'])) {
            $model->startExecutionTime = $map['StartExecutionTime'];
        }

        return $model;
    }
}
