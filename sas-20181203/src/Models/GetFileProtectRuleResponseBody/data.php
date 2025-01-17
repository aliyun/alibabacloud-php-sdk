<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetFileProtectRuleResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $action;
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
     * @var string
     */
    public $platform;
    /**
     * @var string[]
     */
    public $procPaths;
    /**
     * @var string
     */
    public $ruleName;
    /**
     * @var int
     */
    public $status;
    /**
     * @var string
     */
    public $switchId;
    protected $_name = [
        'action'     => 'Action',
        'alertLevel' => 'AlertLevel',
        'fileOps'    => 'FileOps',
        'filePaths'  => 'FilePaths',
        'id'         => 'Id',
        'platform'   => 'Platform',
        'procPaths'  => 'ProcPaths',
        'ruleName'   => 'RuleName',
        'status'     => 'Status',
        'switchId'   => 'SwitchId',
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
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->alertLevel) {
            $res['AlertLevel'] = $this->alertLevel;
        }

        if (null !== $this->fileOps) {
            if (\is_array($this->fileOps)) {
                $res['FileOps'] = [];
                $n1             = 0;
                foreach ($this->fileOps as $item1) {
                    $res['FileOps'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->filePaths) {
            if (\is_array($this->filePaths)) {
                $res['FilePaths'] = [];
                $n1               = 0;
                foreach ($this->filePaths as $item1) {
                    $res['FilePaths'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->procPaths) {
            if (\is_array($this->procPaths)) {
                $res['ProcPaths'] = [];
                $n1               = 0;
                foreach ($this->procPaths as $item1) {
                    $res['ProcPaths'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->fileOps = [];
                $n1             = 0;
                foreach ($map['FileOps'] as $item1) {
                    $model->fileOps[$n1++] = $item1;
                }
            }
        }

        if (isset($map['FilePaths'])) {
            if (!empty($map['FilePaths'])) {
                $model->filePaths = [];
                $n1               = 0;
                foreach ($map['FilePaths'] as $item1) {
                    $model->filePaths[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['ProcPaths'])) {
            if (!empty($map['ProcPaths'])) {
                $model->procPaths = [];
                $n1               = 0;
                foreach ($map['ProcPaths'] as $item1) {
                    $model->procPaths[$n1++] = $item1;
                }
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
