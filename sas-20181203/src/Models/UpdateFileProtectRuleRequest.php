<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UpdateFileProtectRuleRequest extends Model
{
    /**
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
     * @var int
     */
    public $id;

    /**
     * @var string[]
     */
    public $procPaths;

    /**
     * @var string
     */
    public $ruleAction;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'alertLevel' => 'AlertLevel',
        'fileOps' => 'FileOps',
        'filePaths' => 'FilePaths',
        'id' => 'Id',
        'procPaths' => 'ProcPaths',
        'ruleAction' => 'RuleAction',
        'ruleName' => 'RuleName',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->fileOps)) {
            Model::validateArray($this->fileOps);
        }
        if (\is_array($this->filePaths)) {
            Model::validateArray($this->filePaths);
        }
        if (\is_array($this->procPaths)) {
            Model::validateArray($this->procPaths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertLevel) {
            $res['AlertLevel'] = $this->alertLevel;
        }

        if (null !== $this->fileOps) {
            if (\is_array($this->fileOps)) {
                $res['FileOps'] = [];
                $n1 = 0;
                foreach ($this->fileOps as $item1) {
                    $res['FileOps'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->filePaths) {
            if (\is_array($this->filePaths)) {
                $res['FilePaths'] = [];
                $n1 = 0;
                foreach ($this->filePaths as $item1) {
                    $res['FilePaths'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->procPaths) {
            if (\is_array($this->procPaths)) {
                $res['ProcPaths'] = [];
                $n1 = 0;
                foreach ($this->procPaths as $item1) {
                    $res['ProcPaths'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertLevel'])) {
            $model->alertLevel = $map['AlertLevel'];
        }

        if (isset($map['FileOps'])) {
            if (!empty($map['FileOps'])) {
                $model->fileOps = [];
                $n1 = 0;
                foreach ($map['FileOps'] as $item1) {
                    $model->fileOps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FilePaths'])) {
            if (!empty($map['FilePaths'])) {
                $model->filePaths = [];
                $n1 = 0;
                foreach ($map['FilePaths'] as $item1) {
                    $model->filePaths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ProcPaths'])) {
            if (!empty($map['ProcPaths'])) {
                $model->procPaths = [];
                $n1 = 0;
                foreach ($map['ProcPaths'] as $item1) {
                    $model->procPaths[$n1] = $item1;
                    ++$n1;
                }
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
