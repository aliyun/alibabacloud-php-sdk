<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventPageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $alarmEventType;

    /**
     * @example 5b1eeebe4f22daa2b177298234214fa3
     *
     * @var int
     */
    public $alarmId;

    /**
     * @var string
     */
    public $alarmName;

    /**
     * @example SUSP_EVENT
     *
     * @var string
     */
    public $alarmSource;

    /**
     * @example 1722515522000
     *
     * @var string
     */
    public $alarmTime;

    /**
     * @var string
     */
    public $analysisResult;

    /**
     * @example 1732515522000
     *
     * @var string
     */
    public $dealTime;

    /**
     * @example suspicious
     *
     * @var string
     */
    public $eventLevel;

    /**
     * @example 9947
     *
     * @var int
     */
    public $id;

    /**
     * @example shells-azhou
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 47.99.188.31
     *
     * @var string
     */
    public $internetIp;

    /**
     * @example 172.16.109.130
     *
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
    protected $_name = [
        'alarmEventType' => 'AlarmEventType',
        'alarmId'        => 'AlarmId',
        'alarmName'      => 'AlarmName',
        'alarmSource'    => 'AlarmSource',
        'alarmTime'      => 'AlarmTime',
        'analysisResult' => 'AnalysisResult',
        'dealTime'       => 'DealTime',
        'eventLevel'     => 'EventLevel',
        'id'             => 'Id',
        'instanceName'   => 'InstanceName',
        'internetIp'     => 'InternetIp',
        'intranetIp'     => 'IntranetIp',
        'occurrenceTime' => 'OccurrenceTime',
        'ownerId'        => 'OwnerId',
        'remark'         => 'Remark',
        'status'         => 'Status',
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
        if (null !== $this->dealTime) {
            $res['DealTime'] = $this->dealTime;
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
        if (isset($map['DealTime'])) {
            $model->dealTime = $map['DealTime'];
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

        return $model;
    }
}
