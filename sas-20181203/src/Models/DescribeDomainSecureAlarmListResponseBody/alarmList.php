<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainSecureAlarmListResponseBody;

use AlibabaCloud\Tea\Model;

class alarmList extends Model
{
    /**
     * @example Trojan
     *
     * @var string
     */
    public $alarmEventName;

    /**
     * @var string
     */
    public $alarmEventNameOriginal;

    /**
     * @example Malicious Software
     *
     * @var string
     */
    public $alarmEventType;

    /**
     * @example 8df914418f4211fbf756efe7a6f4****
     *
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoBreaking;

    /**
     * @example true
     *
     * @var bool
     */
    public $canBeDealOnLine;

    /**
     * @example false
     *
     * @var bool
     */
    public $canCancelFault;

    /**
     * @example true
     *
     * @var bool
     */
    public $containHwMode;

    /**
     * @example aegis_****
     *
     * @var string
     */
    public $dataSource;

    /**
     * @example y
     *
     * @var bool
     */
    public $dealed;

    /**
     * @example The detection model finds that there is a Trojan horse program on your server. The Trojan horse program is a program specially used to invade the user\\"s host. Generally, it will download and release another malicious program after being implanted into the system through disguise.
     *
     * @var string
     */
    public $description;

    /**
     * @example 1543740301000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1656901794000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasTraceInfo;

    /**
     * @example i-e****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example TestInstance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 95.214.*.*
     *
     * @var string
     */
    public $internetIp;

    /**
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @example serious
     *
     * @var string
     */
    public $level;

    /**
     * @example kill_and_quara.Success
     *
     * @var string
     */
    public $operateErrorCode;

    /**
     * @example 1631699497000
     *
     * @var int
     */
    public $operateTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $saleVersion;

    /**
     * @example 270789
     *
     * @var string
     */
    public $securityEventIds;

    /**
     * @example A malicious program implanted by hacker after intrusion will occupy your bandwidth and attack other servers, and may affect you own service. The malicious process may also have self-deleting behavior or disguise as a system service to evade detection.
     *
     * @var string
     */
    public $solution;

    /**
     * @example [\\"authority_maintenance\\"]
     *
     * @var string
     */
    public $stages;

    /**
     * @example 1543740301000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $suspiciousEventCount;

    /**
     * @example 47900178-885d-4fa4-9d77-****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alarmEventName'         => 'AlarmEventName',
        'alarmEventNameOriginal' => 'AlarmEventNameOriginal',
        'alarmEventType'         => 'AlarmEventType',
        'alarmUniqueInfo'        => 'AlarmUniqueInfo',
        'autoBreaking'           => 'AutoBreaking',
        'canBeDealOnLine'        => 'CanBeDealOnLine',
        'canCancelFault'         => 'CanCancelFault',
        'containHwMode'          => 'ContainHwMode',
        'dataSource'             => 'DataSource',
        'dealed'                 => 'Dealed',
        'description'            => 'Description',
        'endTime'                => 'EndTime',
        'gmtModified'            => 'GmtModified',
        'hasTraceInfo'           => 'HasTraceInfo',
        'instanceId'             => 'InstanceId',
        'instanceName'           => 'InstanceName',
        'internetIp'             => 'InternetIp',
        'intranetIp'             => 'IntranetIp',
        'level'                  => 'Level',
        'operateErrorCode'       => 'OperateErrorCode',
        'operateTime'            => 'OperateTime',
        'saleVersion'            => 'SaleVersion',
        'securityEventIds'       => 'SecurityEventIds',
        'solution'               => 'Solution',
        'stages'                 => 'Stages',
        'startTime'              => 'StartTime',
        'suspiciousEventCount'   => 'SuspiciousEventCount',
        'uuid'                   => 'Uuid',
    ];

    public function validate()
    {
    }

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
