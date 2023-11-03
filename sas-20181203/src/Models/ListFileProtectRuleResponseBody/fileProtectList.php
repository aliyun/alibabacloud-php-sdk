<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListFileProtectRuleResponseBody;

use AlibabaCloud\Tea\Model;

class fileProtectList extends Model
{
    /**
     * @description The handling method of the rule. Valid values:
     *
     *   pass: allow
     *   alert
     *
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
     * @var string
     */
    public $alertLevel;

    /**
     * @description The total number of affected assets.
     *
     * @example 12
     *
     * @var int
     */
    public $effectInstanceCount;

    /**
     * @description The operations performed on the files.
     *
     * @var string[]
     */
    public $fileOps;

    /**
     * @description The paths to the monitored files. Wildcard characters are supported.
     *
     * @var string[]
     */
    public $filePaths;

    /**
     * @description The time when the rule was created.
     *
     * @example 1682304179000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The time when the rule was last modified.
     *
     * @example 1682304179000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The ID of the rule.
     *
     * @example 1412511
     *
     * @var int
     */
    public $id;

    /**
     * @description The paths to the monitored processes. Wildcard characters are supported.
     *
     * @var string[]
     */
    public $procPaths;

    /**
     * @description The name of the rule.
     *
     * @example test11
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The status of the rule. Valid values:
     *
     *   0: disabled
     *   1: enabled
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The switch ID of the rule.
     *
     * @example FILE_PROTECT_RULE_SWITCH_TYPE_1693474122927
     *
     * @var string
     */
    public $switchId;
    protected $_name = [
        'action'              => 'Action',
        'alertLevel'          => 'AlertLevel',
        'effectInstanceCount' => 'EffectInstanceCount',
        'fileOps'             => 'FileOps',
        'filePaths'           => 'FilePaths',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
        'id'                  => 'Id',
        'procPaths'           => 'ProcPaths',
        'ruleName'            => 'RuleName',
        'status'              => 'Status',
        'switchId'            => 'SwitchId',
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
        if (null !== $this->effectInstanceCount) {
            $res['EffectInstanceCount'] = $this->effectInstanceCount;
        }
        if (null !== $this->fileOps) {
            $res['FileOps'] = $this->fileOps;
        }
        if (null !== $this->filePaths) {
            $res['FilePaths'] = $this->filePaths;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
     * @return fileProtectList
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
        if (isset($map['EffectInstanceCount'])) {
            $model->effectInstanceCount = $map['EffectInstanceCount'];
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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
