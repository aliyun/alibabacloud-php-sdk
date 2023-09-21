<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateFileProtectRuleRequest extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $alertLevel;

    /**
     * @var string[]
     */
    public $fileOps;

    /**
     * @var string[]
     */
    public $filePaths;

    /**
     * @example 1062
     *
     * @var int
     */
    public $id;

    /**
     * @var string[]
     */
    public $procPaths;

    /**
     * @example pass
     *
     * @var string
     */
    public $ruleAction;

    /**
     * @example test-rule-1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'alertLevel' => 'AlertLevel',
        'fileOps'    => 'FileOps',
        'filePaths'  => 'FilePaths',
        'id'         => 'Id',
        'procPaths'  => 'ProcPaths',
        'ruleAction' => 'RuleAction',
        'ruleName'   => 'RuleName',
        'status'     => 'Status',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFileProtectRuleRequest
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

        return $model;
    }
}
