<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotAlarmEventsResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotAlarmEventsResponseBody\honeypotAlarmEvents\mergeFieldList;
use AlibabaCloud\Tea\Model;

class honeypotAlarmEvents extends Model
{
    /**
     * @description The ID of the alert event.
     *
     * @example 940272
     *
     * @var int
     */
    public $alarmEventId;

    /**
     * @description The name of the alert event.
     *
     * @example Attacked honeypot
     *
     * @var string
     */
    public $alarmEventName;

    /**
     * @description The type of the alert event.
     *
     * @example Ingress intrusion
     *
     * @var string
     */
    public $alarmEventType;

    /**
     * @description The unique identifier of the alert event.
     *
     * @example 167e6fc0d931917d2059efcd1d00f6ab
     *
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @description The total number of times that the alert event was generated.
     *
     * @example 11
     *
     * @var int
     */
    public $eventCount;

    /**
     * @description The timestamp when the alert event was first detected.
     *
     * @example 1658193602000
     *
     * @var int
     */
    public $firstTime;

    /**
     * @description The timestamp when the alert event was last detected.
     *
     * @example 1660610772000
     *
     * @var int
     */
    public $lastTime;

    /**
     * @description An array that consists of risk information.
     *
     * @var mergeFieldList[]
     */
    public $mergeFieldList;

    /**
     * @description The handling status of the alert event. Valid values:
     *
     *   **1**: pending handling
     *   **2**: ignored
     *   **4**: confirmed
     *
     * @example 1
     *
     * @var int
     */
    public $operateStatus;

    /**
     * @description The risk level of the alert event. Valid values:
     *
     *   **2**: low
     *   **3**: medium
     *   **4**: high
     *
     * @example 2
     *
     * @var string
     */
    public $riskLevel;
    protected $_name = [
        'alarmEventId'    => 'AlarmEventId',
        'alarmEventName'  => 'AlarmEventName',
        'alarmEventType'  => 'AlarmEventType',
        'alarmUniqueInfo' => 'AlarmUniqueInfo',
        'eventCount'      => 'EventCount',
        'firstTime'       => 'FirstTime',
        'lastTime'        => 'LastTime',
        'mergeFieldList'  => 'MergeFieldList',
        'operateStatus'   => 'OperateStatus',
        'riskLevel'       => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmEventId) {
            $res['AlarmEventId'] = $this->alarmEventId;
        }
        if (null !== $this->alarmEventName) {
            $res['AlarmEventName'] = $this->alarmEventName;
        }
        if (null !== $this->alarmEventType) {
            $res['AlarmEventType'] = $this->alarmEventType;
        }
        if (null !== $this->alarmUniqueInfo) {
            $res['AlarmUniqueInfo'] = $this->alarmUniqueInfo;
        }
        if (null !== $this->eventCount) {
            $res['EventCount'] = $this->eventCount;
        }
        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->mergeFieldList) {
            $res['MergeFieldList'] = [];
            if (null !== $this->mergeFieldList && \is_array($this->mergeFieldList)) {
                $n = 0;
                foreach ($this->mergeFieldList as $item) {
                    $res['MergeFieldList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->operateStatus) {
            $res['OperateStatus'] = $this->operateStatus;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return honeypotAlarmEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmEventId'])) {
            $model->alarmEventId = $map['AlarmEventId'];
        }
        if (isset($map['AlarmEventName'])) {
            $model->alarmEventName = $map['AlarmEventName'];
        }
        if (isset($map['AlarmEventType'])) {
            $model->alarmEventType = $map['AlarmEventType'];
        }
        if (isset($map['AlarmUniqueInfo'])) {
            $model->alarmUniqueInfo = $map['AlarmUniqueInfo'];
        }
        if (isset($map['EventCount'])) {
            $model->eventCount = $map['EventCount'];
        }
        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['MergeFieldList'])) {
            if (!empty($map['MergeFieldList'])) {
                $model->mergeFieldList = [];
                $n                     = 0;
                foreach ($map['MergeFieldList'] as $item) {
                    $model->mergeFieldList[$n++] = null !== $item ? mergeFieldList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OperateStatus'])) {
            $model->operateStatus = $map['OperateStatus'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
