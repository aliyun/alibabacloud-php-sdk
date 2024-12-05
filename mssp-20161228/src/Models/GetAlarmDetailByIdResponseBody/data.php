<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetAlarmDetailByIdResponseBody;

use AlibabaCloud\SDK\Mssp\V20161228\Models\GetAlarmDetailByIdResponseBody\data\eventDetails;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $alarmEventType;

    /**
     * @var string
     */
    public $alarmEventTypeDisplay;

    /**
     * @var int
     */
    public $alarmId;

    /**
     * @var string
     */
    public $alarmName;

    /**
     * @var string
     */
    public $alarmSource;

    /**
     * @var string
     */
    public $alarmTime;

    /**
     * @var string
     */
    public $analysisResult;

    /**
     * @var bool
     */
    public $containHwMode;

    /**
     * @var string
     */
    public $dealTime;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var eventDetails[]
     */
    public $eventDetails;

    /**
     * @var string
     */
    public $eventLevel;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $occurrenceTime;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tacticDisplayName;
    protected $_name = [
        'alarmEventType'        => 'AlarmEventType',
        'alarmEventTypeDisplay' => 'AlarmEventTypeDisplay',
        'alarmId'               => 'AlarmId',
        'alarmName'             => 'AlarmName',
        'alarmSource'           => 'AlarmSource',
        'alarmTime'             => 'AlarmTime',
        'analysisResult'        => 'AnalysisResult',
        'containHwMode'         => 'ContainHwMode',
        'dealTime'              => 'DealTime',
        'desc'                  => 'Desc',
        'eventDetails'          => 'EventDetails',
        'eventLevel'            => 'EventLevel',
        'id'                    => 'Id',
        'instanceName'          => 'InstanceName',
        'internetIp'            => 'InternetIp',
        'intranetIp'            => 'IntranetIp',
        'occurrenceTime'        => 'OccurrenceTime',
        'ownerId'               => 'OwnerId',
        'remark'                => 'Remark',
        'status'                => 'Status',
        'tacticDisplayName'     => 'TacticDisplayName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmEventType) {
            $res['AlarmEventType'] = $this->alarmEventType;
        }
        if (null !== $this->alarmEventTypeDisplay) {
            $res['AlarmEventTypeDisplay'] = $this->alarmEventTypeDisplay;
        }
        if (null !== $this->alarmId) {
            $res['AlarmId'] = $this->alarmId;
        }
        if (null !== $this->alarmName) {
            $res['AlarmName'] = $this->alarmName;
        }
        if (null !== $this->alarmSource) {
            $res['AlarmSource'] = $this->alarmSource;
        }
        if (null !== $this->alarmTime) {
            $res['AlarmTime'] = $this->alarmTime;
        }
        if (null !== $this->analysisResult) {
            $res['AnalysisResult'] = $this->analysisResult;
        }
        if (null !== $this->containHwMode) {
            $res['ContainHwMode'] = $this->containHwMode;
        }
        if (null !== $this->dealTime) {
            $res['DealTime'] = $this->dealTime;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->eventDetails) {
            $res['EventDetails'] = [];
            if (null !== $this->eventDetails && \is_array($this->eventDetails)) {
                $n = 0;
                foreach ($this->eventDetails as $item) {
                    $res['EventDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->occurrenceTime) {
            $res['OccurrenceTime'] = $this->occurrenceTime;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tacticDisplayName) {
            $res['TacticDisplayName'] = $this->tacticDisplayName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmEventType'])) {
            $model->alarmEventType = $map['AlarmEventType'];
        }
        if (isset($map['AlarmEventTypeDisplay'])) {
            $model->alarmEventTypeDisplay = $map['AlarmEventTypeDisplay'];
        }
        if (isset($map['AlarmId'])) {
            $model->alarmId = $map['AlarmId'];
        }
        if (isset($map['AlarmName'])) {
            $model->alarmName = $map['AlarmName'];
        }
        if (isset($map['AlarmSource'])) {
            $model->alarmSource = $map['AlarmSource'];
        }
        if (isset($map['AlarmTime'])) {
            $model->alarmTime = $map['AlarmTime'];
        }
        if (isset($map['AnalysisResult'])) {
            $model->analysisResult = $map['AnalysisResult'];
        }
        if (isset($map['ContainHwMode'])) {
            $model->containHwMode = $map['ContainHwMode'];
        }
        if (isset($map['DealTime'])) {
            $model->dealTime = $map['DealTime'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['EventDetails'])) {
            if (!empty($map['EventDetails'])) {
                $model->eventDetails = [];
                $n                   = 0;
                foreach ($map['EventDetails'] as $item) {
                    $model->eventDetails[$n++] = null !== $item ? eventDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['OccurrenceTime'])) {
            $model->occurrenceTime = $map['OccurrenceTime'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TacticDisplayName'])) {
            $model->tacticDisplayName = $map['TacticDisplayName'];
        }

        return $model;
    }
}
