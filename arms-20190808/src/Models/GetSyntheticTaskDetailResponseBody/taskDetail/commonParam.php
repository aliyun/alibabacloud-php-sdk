<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail\commonParam\alertList;
use AlibabaCloud\Tea\Model;

class commonParam extends Model
{
    /**
     * @description The identifier of the alert.
     *
     * @example 1
     *
     * @var int
     */
    public $alarmFlag;

    /**
     * @description The list of alerts.
     *
     * @var alertList[]
     */
    public $alertList;

    /**
     * @description The ID of the alert identifier.
     *
     * @example 1
     *
     * @var string
     */
    public $alertNotifierId;

    /**
     * @description The ID of the alert policy.
     *
     * @example 1
     *
     * @var string
     */
    public $alertPolicyId;

    /**
     * @description The monitoring samples.
     *
     * @example 1
     *
     * @var string
     */
    public $monitorSamples;

    /**
     * @description The start time of the execution.
     *
     * @example 1664427128
     *
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
