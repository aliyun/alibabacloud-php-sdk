<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateFileProtectRuleRequest extends Model
{
    /**
     * @description The severity of alerts. Valid values:
     *
     *   0: does not generate alerts
     *   1: sends notifications
     *   2: suspicious
     *   3: high-risk
     *
     * @example 0
     *
     * @var int
     */
    public $alertLevel;

    /**
     * @description The operations that you want to perform on the files.
     *
     * This parameter is required.
     * @var string[]
     */
    public $fileOps;

    /**
     * @description The paths to the files that you want to monitor. Wildcard characters are supported.
     *
     * This parameter is required.
     * @var string[]
     */
    public $filePaths;

    /**
     * @description The paths to the processes that you want to monitor. Wildcard characters are supported.
     *
     * This parameter is required.
     * @var string[]
     */
    public $procPaths;

    /**
     * @description The handling method of the rule. Valid values:
     *
     *   pass: allow
     *   alert
     *
     * This parameter is required.
     * @example pass
     *
     * @var string
     */
    public $ruleAction;

    /**
     * @description The name of the rule.
     *
     * This parameter is required.
     * @example tetsRule
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Specifies whether to enable the rule. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The switch ID of the rule.
     *
     * @example FILE_PROTECT_RULE_SWITCH_TYPE_0000
     *
     * @var string
     */
    public $switchId;
    protected $_name = [
        'alertLevel' => 'AlertLevel',
        'fileOps'    => 'FileOps',
        'filePaths'  => 'FilePaths',
        'procPaths'  => 'ProcPaths',
        'ruleAction' => 'RuleAction',
        'ruleName'   => 'RuleName',
        'status'     => 'Status',
        'switchId'   => 'SwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertLevel) {
            $res['AlertLevel'] = $this->alertLevel;
        }
        if (null !== $this->fileOps) {
            $res['FileOps'] = $this->fileOps;
        }
        if (null !== $this->filePaths) {
            $res['FilePaths'] = $this->filePaths;
        }
        if (null !== $this->procPaths) {
            $res['ProcPaths'] = $this->procPaths;
        }
        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->switchId) {
            $res['SwitchId'] = $this->switchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileProtectRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertLevel'])) {
            $model->alertLevel = $map['AlertLevel'];
        }
        if (isset($map['FileOps'])) {
            if (!empty($map['FileOps'])) {
                $model->fileOps = $map['FileOps'];
            }
        }
        if (isset($map['FilePaths'])) {
            if (!empty($map['FilePaths'])) {
                $model->filePaths = $map['FilePaths'];
            }
        }
        if (isset($map['ProcPaths'])) {
            if (!empty($map['ProcPaths'])) {
                $model->procPaths = $map['ProcPaths'];
            }
        }
        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SwitchId'])) {
            $model->switchId = $map['SwitchId'];
        }

        return $model;
    }
}
