<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetAlarmDetailByIdResponseBody;

use AlibabaCloud\SDK\Mssp\V20161228\Models\GetAlarmDetailByIdResponseBody\data\eventDetails;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Alarm event type.
     *
     * @example Unusual Logon
     *
     * @var string
     */
    public $alarmEventType;

    /**
     * @description Alarm event type.
     *
     * @example Login with unusual location
     *
     * @var string
     */
    public $alarmEventTypeDisplay;

    /**
     * @description Alarm ID.
     *
     * @example 202427220
     *
     * @var int
     */
    public $alarmId;

    /**
     * @description Alarm name.
     *
     * @example 负载均衡可挂载服务器数量告警
     *
     * @var string
     */
    public $alarmName;

    /**
     * @description Alarm source.
     *
     * @example SUSP_EVENT
     *
     * @var string
     */
    public $alarmSource;

    /**
     * @description Latest alarm time.
     *
     * @example 2018-09-26 01:51:01
     *
     * @var string
     */
    public $alarmTime;

    /**
     * @description Analysis process.
     *
     * @example [{"value":"服务器可能已被黑客攻击，存在恶意进程在运行。 分析过程：告警显示，服务端存在一个名为”dns.exe”的进程在访问”polling.burpcollaborator.net”，这是一个被黑名单列出的恶意域名。在正常情况下,”dns.exe”不应该单独存在于系统的路径下，并且也不应该访问这类恶意域名。因此，这个进程可能是黑客留下的恶意进程。","key":"结论"},{"value":"尽快对服务器进行全面扫描，清除恶意进程。同时，联系网络安全专家进行深入调查，以确定是否有其他潜在的安全威胁。","key":"处置建议"}]
     *
     * @var string
     */
    public $analysisResult;

    /**
     * @description Whether high-protection mode is enabled. true means enabled, false means not enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $containHwMode;

    /**
     * @description Alarm handling time.
     *
     * @example 2018-09-26 01:51:01
     *
     * @var string
     */
    public $dealTime;

    /**
     * @description Description.
     *
     * @example webshell
     *
     * @var string
     */
    public $desc;

    /**
     * @description Event details information.
     *
     * @var eventDetails[]
     */
    public $eventDetails;

    /**
     * @description Alarm level.
     *
     * @example suspicious
     *
     * @var string
     */
    public $eventLevel;

    /**
     * @description Primary key ID of the work order.
     *
     * @example 9772
     *
     * @var int
     */
    public $id;

    /**
     * @description Affected asset.
     *
     * @example nginx
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Public IP.
     *
     * @example 47.116.126.79
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description Private IP.
     *
     * @example 172.19.195.176
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description First occurrence time
     *
     * @example 2018-09-26 01:51:01
     *
     * @var string
     */
    public $occurrenceTime;

    /**
     * @description Owner.
     *
     * @example 324546
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description Disposal method.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $remark;

    /**
     * @description Handling status.
     *
     * @example 要查询的告警事件状态。取值：
     *
     * 513：自动拦截完毕
     * @var string
     */
    public $status;

    /**
     * @description ATT&CK tactic name.
     *
     * @example Malicious scripts-Malicious script code execution
     *
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
