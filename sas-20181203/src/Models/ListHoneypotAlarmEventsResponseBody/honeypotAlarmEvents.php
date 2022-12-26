<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotAlarmEventsResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotAlarmEventsResponseBody\honeypotAlarmEvents\mergeFieldList;
use AlibabaCloud\Tea\Model;

class honeypotAlarmEvents extends Model
{
    /**
     * @var int
     */
    public $alarmEventId;

    /**
     * @var string
     */
    public $alarmEventName;

    /**
     * @var string
     */
    public $alarmEventType;

    /**
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @var int
     */
    public $eventCount;

    /**
     * @var int
     */
    public $firstTime;

    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var mergeFieldList[]
     */
    public $mergeFieldList;

    /**
     * @var int
     */
    public $operateStatus;

    /**
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
