<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class DebuggerJobIssue extends Model
{
    /**
     * @description 规则报告的具体json描述
     *
     * @var string
     */
    public $debuggerJobIssue;

    /**
     * @description 创建时间（UTC）
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description event的全局唯一ID
     *
     * @var string
     */
    public $jobDebuggerIssueId;

    /**
     * @description 作业ID
     *
     * @var string
     */
    public $jobId;

    /**
     * @description 规则触发原因的编码
     *
     * @var string
     */
    public $reasonCode;

    /**
     * @description 规则触发的原因
     *
     * @var string
     */
    public $reasonMessage;

    /**
     * @description 规则名称
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'debuggerJobIssue'   => 'DebuggerJobIssue',
        'gmtCreateTime'      => 'GmtCreateTime',
        'jobDebuggerIssueId' => 'JobDebuggerIssueId',
        'jobId'              => 'JobId',
        'reasonCode'         => 'ReasonCode',
        'reasonMessage'      => 'ReasonMessage',
        'ruleName'           => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->debuggerJobIssue) {
            $res['DebuggerJobIssue'] = $this->debuggerJobIssue;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->jobDebuggerIssueId) {
            $res['JobDebuggerIssueId'] = $this->jobDebuggerIssueId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }
        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DebuggerJobIssue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DebuggerJobIssue'])) {
            $model->debuggerJobIssue = $map['DebuggerJobIssue'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['JobDebuggerIssueId'])) {
            $model->jobDebuggerIssueId = $map['JobDebuggerIssueId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }
        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
