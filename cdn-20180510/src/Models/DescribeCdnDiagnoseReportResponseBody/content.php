<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDiagnoseReportResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDiagnoseReportResponseBody\content\clientInfo;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDiagnoseReportResponseBody\content\report;

class content extends Model
{
    /**
     * @var string
     */
    public $aliuid;

    /**
     * @var string
     */
    public $clientAddr;

    /**
     * @var clientInfo
     */
    public $clientInfo;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $diagnoseId;

    /**
     * @var string
     */
    public $diagnoseReportLink;

    /**
     * @var string
     */
    public $diagnoseUrl;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $remainDiagnoseTimes;

    /**
     * @var report
     */
    public $report;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $timeConsuming;

    /**
     * @var string
     */
    public $traceDisplayLink;

    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'aliuid' => 'Aliuid',
        'clientAddr' => 'ClientAddr',
        'clientInfo' => 'ClientInfo',
        'clientIp' => 'ClientIp',
        'createTime' => 'CreateTime',
        'diagnoseId' => 'DiagnoseId',
        'diagnoseReportLink' => 'DiagnoseReportLink',
        'diagnoseUrl' => 'DiagnoseUrl',
        'domain' => 'Domain',
        'expireTime' => 'ExpireTime',
        'remainDiagnoseTimes' => 'RemainDiagnoseTimes',
        'report' => 'Report',
        'state' => 'State',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'timeConsuming' => 'TimeConsuming',
        'traceDisplayLink' => 'TraceDisplayLink',
        'traceId' => 'TraceId',
    ];

    public function validate()
    {
        if (null !== $this->clientInfo) {
            $this->clientInfo->validate();
        }
        if (null !== $this->report) {
            $this->report->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }

        if (null !== $this->clientAddr) {
            $res['ClientAddr'] = $this->clientAddr;
        }

        if (null !== $this->clientInfo) {
            $res['ClientInfo'] = null !== $this->clientInfo ? $this->clientInfo->toArray($noStream) : $this->clientInfo;
        }

        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->diagnoseId) {
            $res['DiagnoseId'] = $this->diagnoseId;
        }

        if (null !== $this->diagnoseReportLink) {
            $res['DiagnoseReportLink'] = $this->diagnoseReportLink;
        }

        if (null !== $this->diagnoseUrl) {
            $res['DiagnoseUrl'] = $this->diagnoseUrl;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->remainDiagnoseTimes) {
            $res['RemainDiagnoseTimes'] = $this->remainDiagnoseTimes;
        }

        if (null !== $this->report) {
            $res['Report'] = null !== $this->report ? $this->report->toArray($noStream) : $this->report;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->timeConsuming) {
            $res['TimeConsuming'] = $this->timeConsuming;
        }

        if (null !== $this->traceDisplayLink) {
            $res['TraceDisplayLink'] = $this->traceDisplayLink;
        }

        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }

        if (isset($map['ClientAddr'])) {
            $model->clientAddr = $map['ClientAddr'];
        }

        if (isset($map['ClientInfo'])) {
            $model->clientInfo = clientInfo::fromMap($map['ClientInfo']);
        }

        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DiagnoseId'])) {
            $model->diagnoseId = $map['DiagnoseId'];
        }

        if (isset($map['DiagnoseReportLink'])) {
            $model->diagnoseReportLink = $map['DiagnoseReportLink'];
        }

        if (isset($map['DiagnoseUrl'])) {
            $model->diagnoseUrl = $map['DiagnoseUrl'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['RemainDiagnoseTimes'])) {
            $model->remainDiagnoseTimes = $map['RemainDiagnoseTimes'];
        }

        if (isset($map['Report'])) {
            $model->report = report::fromMap($map['Report']);
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TimeConsuming'])) {
            $model->timeConsuming = $map['TimeConsuming'];
        }

        if (isset($map['TraceDisplayLink'])) {
            $model->traceDisplayLink = $map['TraceDisplayLink'];
        }

        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
