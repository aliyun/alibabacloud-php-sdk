<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainSecureAlarmListResponseBody;

use AlibabaCloud\Tea\Model;

class alarmList extends Model
{
    /**
     * @description The name of the alert event.
     *
     * @example Trojan
     *
     * @var string
     */
    public $alarmEventName;

    /**
     * @description The original parent name of the alert event.
     *
     * @example login_common_location
     *
     * @var string
     */
    public $alarmEventNameOriginal;

    /**
     * @description The type of the alert event.
     *
     * @example Malicious Software
     *
     * @var string
     */
    public $alarmEventType;

    /**
     * @description The unique ID of the alert event.
     *
     * @example 8df914418f4211fbf756efe7a6f4****
     *
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @description Indicates whether automatic defense is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $autoBreaking;

    /**
     * @description Indicates whether the alert event can be handled online, such as quarantining the source file of the malicious process, adding the alert event to the whitelist, and ignoring the alert event. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $canBeDealOnLine;

    /**
     * @description Indicates whether you can cancel marking the alert event as a false positive. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $canCancelFault;

    /**
     * @description Indicates whether the safeguard mode for major activities is supported.
     *
     * @example true
     *
     * @var bool
     */
    public $containHwMode;

    /**
     * @description The data source of the alert event.
     *
     * @example aegis_****
     *
     * @var string
     */
    public $dataSource;

    /**
     * @description Indicates whether the alert event is handled. Valid values:
     *
     *   **N**: unhandled
     *   **Y**: handled
     *
     * @example y
     *
     * @var bool
     */
    public $dealed;

    /**
     * @description The description of the alert event.
     *
     * @example The detection model finds that there is a Trojan horse program on your server. The Trojan horse program is a program specially used to invade the user\\"s host. Generally, it will download and release another malicious program after being implanted into the system through disguise.
     *
     * @var string
     */
    public $description;

    /**
     * @description The timestamp generated when the alert event was last detected. Unit: milliseconds.
     *
     * @example 1543740301000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The time of the last modification.
     *
     * @example 1656901794000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description Indicates whether the alert event has tracing information. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $hasTraceInfo;

    /**
     * @description The instance ID of the affected asset.
     *
     * @example i-e****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name of the affected asset.
     *
     * @example TestInstance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 95.214.*.*
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the affected instance.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The risk level of the alert event. Valid values:
     *
     *   **serious**
     *   **suspicious**
     *   **remind**
     *
     * @example serious
     *
     * @var string
     */
    public $level;

    /**
     * @description The handling result code of the alert event.
     *
     * @example kill_and_quara.Success
     *
     * @var string
     */
    public $operateErrorCode;

    /**
     * @description The timestamp generated when the alert event was handled. Unit: milliseconds.
     *
     * @example 1631699497000
     *
     * @var int
     */
    public $operateTime;

    /**
     * @description The edition of Security Center in which the alert event can be detected. Valid values:
     *
     *   **0**: Basic edition.
     *   **1**: Advanced edition.
     *   **2**: Enterprise edition.
     *
     * @example 1
     *
     * @var string
     */
    public $saleVersion;

    /**
     * @description The ID of the associated alert event.
     *
     * @example 270789
     *
     * @var string
     */
    public $securityEventIds;

    /**
     * @description The solution to the alert event.
     *
     * @example A malicious program implanted by hacker after intrusion will occupy your bandwidth and attack other servers, and may affect you own service. The malicious process may also have self-deleting behavior or disguise as a system service to evade detection.
     *
     * @var string
     */
    public $solution;

    /**
     * @description The stage at which the attack or intrusion is detected.
     *
     * @example [\\"authority_maintenance\\"]
     *
     * @var string
     */
    public $stages;

    /**
     * @description The timestamp generated when the alert event was first detected. Unit: milliseconds.
     *
     * @example 1543740301000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The total number of security alerts in your website assets.
     *
     * @example 1
     *
     * @var int
     */
    public $suspiciousEventCount;

    /**
     * @description The unique ID of the associated instance.
     *
     * @example 47900178-885d-4fa4-9d77-****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alarmEventName' => 'AlarmEventName',
        'alarmEventNameOriginal' => 'AlarmEventNameOriginal',
        'alarmEventType' => 'AlarmEventType',
        'alarmUniqueInfo' => 'AlarmUniqueInfo',
        'autoBreaking' => 'AutoBreaking',
        'canBeDealOnLine' => 'CanBeDealOnLine',
        'canCancelFault' => 'CanCancelFault',
        'containHwMode' => 'ContainHwMode',
        'dataSource' => 'DataSource',
        'dealed' => 'Dealed',
        'description' => 'Description',
        'endTime' => 'EndTime',
        'gmtModified' => 'GmtModified',
        'hasTraceInfo' => 'HasTraceInfo',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'level' => 'Level',
        'operateErrorCode' => 'OperateErrorCode',
        'operateTime' => 'OperateTime',
        'saleVersion' => 'SaleVersion',
        'securityEventIds' => 'SecurityEventIds',
        'solution' => 'Solution',
        'stages' => 'Stages',
        'startTime' => 'StartTime',
        'suspiciousEventCount' => 'SuspiciousEventCount',
        'uuid' => 'Uuid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmEventName) {
            $res['AlarmEventName'] = $this->alarmEventName;
        }
        if (null !== $this->alarmEventNameOriginal) {
            $res['AlarmEventNameOriginal'] = $this->alarmEventNameOriginal;
        }
        if (null !== $this->alarmEventType) {
            $res['AlarmEventType'] = $this->alarmEventType;
        }
        if (null !== $this->alarmUniqueInfo) {
            $res['AlarmUniqueInfo'] = $this->alarmUniqueInfo;
        }
        if (null !== $this->autoBreaking) {
            $res['AutoBreaking'] = $this->autoBreaking;
        }
        if (null !== $this->canBeDealOnLine) {
            $res['CanBeDealOnLine'] = $this->canBeDealOnLine;
        }
        if (null !== $this->canCancelFault) {
            $res['CanCancelFault'] = $this->canCancelFault;
        }
        if (null !== $this->containHwMode) {
            $res['ContainHwMode'] = $this->containHwMode;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->hasTraceInfo) {
            $res['HasTraceInfo'] = $this->hasTraceInfo;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->operateErrorCode) {
            $res['OperateErrorCode'] = $this->operateErrorCode;
        }
        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }
        if (null !== $this->saleVersion) {
            $res['SaleVersion'] = $this->saleVersion;
        }
        if (null !== $this->securityEventIds) {
            $res['SecurityEventIds'] = $this->securityEventIds;
        }
        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }
        if (null !== $this->stages) {
            $res['Stages'] = $this->stages;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->suspiciousEventCount) {
            $res['SuspiciousEventCount'] = $this->suspiciousEventCount;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmEventName'])) {
            $model->alarmEventName = $map['AlarmEventName'];
        }
        if (isset($map['AlarmEventNameOriginal'])) {
            $model->alarmEventNameOriginal = $map['AlarmEventNameOriginal'];
        }
        if (isset($map['AlarmEventType'])) {
            $model->alarmEventType = $map['AlarmEventType'];
        }
        if (isset($map['AlarmUniqueInfo'])) {
            $model->alarmUniqueInfo = $map['AlarmUniqueInfo'];
        }
        if (isset($map['AutoBreaking'])) {
            $model->autoBreaking = $map['AutoBreaking'];
        }
        if (isset($map['CanBeDealOnLine'])) {
            $model->canBeDealOnLine = $map['CanBeDealOnLine'];
        }
        if (isset($map['CanCancelFault'])) {
            $model->canCancelFault = $map['CanCancelFault'];
        }
        if (isset($map['ContainHwMode'])) {
            $model->containHwMode = $map['ContainHwMode'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HasTraceInfo'])) {
            $model->hasTraceInfo = $map['HasTraceInfo'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['OperateErrorCode'])) {
            $model->operateErrorCode = $map['OperateErrorCode'];
        }
        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }
        if (isset($map['SaleVersion'])) {
            $model->saleVersion = $map['SaleVersion'];
        }
        if (isset($map['SecurityEventIds'])) {
            $model->securityEventIds = $map['SecurityEventIds'];
        }
        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }
        if (isset($map['Stages'])) {
            $model->stages = $map['Stages'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SuspiciousEventCount'])) {
            $model->suspiciousEventCount = $map['SuspiciousEventCount'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
