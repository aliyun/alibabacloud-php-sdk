<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class DebuggerResult extends Model
{
    /**
     * @example {\"description\":\"这是一个新的pytorchjob模板\"}
     *
     * @var string
     */
    public $debuggerConfigContent;

    /**
     * @example { "ProfileReport": { "Name": "CPUBottleneck","Triggered": 10,"Violations": 2,"Details": "{}"}, "LowCPU": { "Name": "CPUBottleneck","Triggered": 10,"Violations": 2,"Details": "{}"}}
     *
     * @var string
     */
    public $debuggerJobIssues;

    /**
     * @example {"Running": 1, "Failed": 1, "Succeeded": 2}
     *
     * @var string
     */
    public $debuggerJobStatus;

    /**
     * @example http://xxx.com/debug/report/download/new_xxxx.html
     *
     * @var string
     */
    public $debuggerReportURL;

    /**
     * @example dlc debugger test
     *
     * @var string
     */
    public $jobDisplayName;

    /**
     * @example dlc-20210126170216-mtl37ge7gkvdz
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 12344556
     *
     * @var string
     */
    public $jobUserId;
    protected $_name = [
        'debuggerConfigContent' => 'DebuggerConfigContent',
        'debuggerJobIssues'     => 'DebuggerJobIssues',
        'debuggerJobStatus'     => 'DebuggerJobStatus',
        'debuggerReportURL'     => 'DebuggerReportURL',
        'jobDisplayName'        => 'JobDisplayName',
        'jobId'                 => 'JobId',
        'jobUserId'             => 'JobUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->debuggerConfigContent) {
            $res['DebuggerConfigContent'] = $this->debuggerConfigContent;
        }
        if (null !== $this->debuggerJobIssues) {
            $res['DebuggerJobIssues'] = $this->debuggerJobIssues;
        }
        if (null !== $this->debuggerJobStatus) {
            $res['DebuggerJobStatus'] = $this->debuggerJobStatus;
        }
        if (null !== $this->debuggerReportURL) {
            $res['DebuggerReportURL'] = $this->debuggerReportURL;
        }
        if (null !== $this->jobDisplayName) {
            $res['JobDisplayName'] = $this->jobDisplayName;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobUserId) {
            $res['JobUserId'] = $this->jobUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DebuggerResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DebuggerConfigContent'])) {
            $model->debuggerConfigContent = $map['DebuggerConfigContent'];
        }
        if (isset($map['DebuggerJobIssues'])) {
            $model->debuggerJobIssues = $map['DebuggerJobIssues'];
        }
        if (isset($map['DebuggerJobStatus'])) {
            $model->debuggerJobStatus = $map['DebuggerJobStatus'];
        }
        if (isset($map['DebuggerReportURL'])) {
            $model->debuggerReportURL = $map['DebuggerReportURL'];
        }
        if (isset($map['JobDisplayName'])) {
            $model->jobDisplayName = $map['JobDisplayName'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobUserId'])) {
            $model->jobUserId = $map['JobUserId'];
        }

        return $model;
    }
}
