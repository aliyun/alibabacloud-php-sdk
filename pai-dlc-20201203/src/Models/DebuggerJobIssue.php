<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class DebuggerJobIssue extends Model
{
    /**
     * @var string
     */
    public $debuggerJobIssue;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $jobDebuggerIssueId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $reasonMessage;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'debuggerJobIssue' => 'DebuggerJobIssue',
        'gmtCreateTime' => 'GmtCreateTime',
        'jobDebuggerIssueId' => 'JobDebuggerIssueId',
        'jobId' => 'JobId',
        'reasonCode' => 'ReasonCode',
        'reasonMessage' => 'ReasonMessage',
        'ruleName' => 'RuleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
