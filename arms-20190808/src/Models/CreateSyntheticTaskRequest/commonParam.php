<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\commonParam\alertList;
use AlibabaCloud\Tea\Model;

class commonParam extends Model
{
    /**
     * @description Specifies whether to create an alert rule.
     *
     *   1: creates an alert.
     *   0: does not create an alert.
     *
     * @example 1
     *
     * @var string
     */
    public $alarmFlag;

    /**
     * @description The alert parameters.
     *
     * @var alertList[]
     */
    public $alertList;

    /**
     * @description The ID of the alert recipient. Separate multiple recipients with commas (,).
     *
     * @example 123
     *
     * @var string
     */
    public $alertNotifierId;

    /**
     * @description The ID of the notification policy.
     *
     * @example 1234
     *
     * @var string
     */
    public $alertPolicyId;

    /**
     * @description Specifies whether to evenly distribute monitoring samples. Valid values:
     *
     *   0: no
     *   1: yes
     *
     * @example 0
     *
     * @var int
     */
    public $monitorSamples;

    /**
     * @description The time when execution starts.
     *
     * @example 2022-07-20 10
     *
     * @var int
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmFlag) {
            $res['AlarmFlag'] = $this->alarmFlag;
        }
        if (null !== $this->alertList) {
            $res['AlertList'] = [];
            if (null !== $this->alertList && \is_array($this->alertList)) {
                $n = 0;
                foreach ($this->alertList as $item) {
                    $res['AlertList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return commonParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmFlag'])) {
            $model->alarmFlag = $map['AlarmFlag'];
        }
        if (isset($map['AlertList'])) {
            if (!empty($map['AlertList'])) {
                $model->alertList = [];
                $n = 0;
                foreach ($map['AlertList'] as $item) {
                    $model->alertList[$n++] = null !== $item ? alertList::fromMap($item) : $item;
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
