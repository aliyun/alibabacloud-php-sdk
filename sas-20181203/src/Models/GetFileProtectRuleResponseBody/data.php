<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetFileProtectRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The handling method of the rule. Valid values:
     *
     * 2.  alert
     * @example pass
     *
     * @var string
     */
    public $action;

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
     * @description The operations performed on the files.
     *
     * @var string[]
     */
    public $fileOps;

    /**
     * @description The paths to the monitored files.
     *
     * @var string[]
     */
    public $filePaths;

    /**
     * @description The ID of the rule.
     *
     * @example 44616
     *
     * @var int
     */
    public $id;

    /**
     * @description The paths to the monitored processes.
     *
     * @var string[]
     */
    public $procPaths;

    /**
     * @description The name of the rule.
     *
     * @example test-000
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The status of the rule. Valid values:
     *
     * 2.  1: enabled
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
        'action'     => 'Action',
        'alertLevel' => 'AlertLevel',
        'fileOps'    => 'FileOps',
        'filePaths'  => 'FilePaths',
        'id'         => 'Id',
        'procPaths'  => 'ProcPaths',
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
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->alertLevel) {
            $res['AlertLevel'] = $this->alertLevel;
        }
        if (null !== $this->fileOps) {
            $res['FileOps'] = $this->fileOps;
        }
        if (null !== $this->filePaths) {
            $res['FilePaths'] = $this->filePaths;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->procPaths) {
            $res['ProcPaths'] = $this->procPaths;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProcPaths'])) {
            if (!empty($map['ProcPaths'])) {
                $model->procPaths = $map['ProcPaths'];
            }
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
