<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class DebuggerResult extends Model
{
    /**
     * @var string
     */
    public $debuggerConfigContent;

    /**
     * @var string
     */
    public $debuggerJobIssues;

    /**
     * @var string
     */
    public $debuggerJobStatus;

    /**
     * @var string
     */
    public $debuggerReportURL;

    /**
     * @var string
     */
    public $jobDisplayName;

    /**
     * @var string
     */
    public $jobId;

    /**
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
