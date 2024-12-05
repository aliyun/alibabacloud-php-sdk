<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventPageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Alarm event type.
     *
     * @example 精准防御
     *
     * @var string
     */
    public $alarmEventType;

    /**
     * @description Alarm ID.
     *
     * @example 5b1eeebe4f22daa2b177298234214fa3
     *
     * @var int
     */
    public $alarmId;

    /**
     * @description Alarm name.
     *
     * @example Web服务漏洞利用
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
     * @example 1722515522000
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
     * @description Alarm handling time.
     *
     * @example 1732515522000
     *
     * @var string
     */
    public $dealTime;

    /**
     * @description Alarm level.
     *
     * @example suspicious
     *
     * @var string
     */
    public $eventLevel;

    /**
     * @description Ticket primary key id.
     *
     * @example 9947
     *
     * @var int
     */
    public $id;

    /**
     * @description Affected asset.
     *
     * @example shells-azhou
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Public IP address.
     *
     * @example 47.99.188.31
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description Private IP address.
     *
     * @example 172.16.109.130
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description First occurrence time.
     *
     * @example 该字段暂未使用，有问题请联系管理员
     *
     * @var string
     */
    public $occurrenceTime;

    /**
     * @description Owner ID.
     *
     * @example 张三
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description Disposal method.
     *
     * @example 处理完成
     *
     * @var string
     */
    public $remark;

    /**
     * @description Handling status.
     *
     * @example 未处理
     *
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
