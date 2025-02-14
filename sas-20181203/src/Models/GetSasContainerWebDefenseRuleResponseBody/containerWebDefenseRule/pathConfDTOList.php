<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSasContainerWebDefenseRuleResponseBody\containerWebDefenseRule;

use AlibabaCloud\Dara\Model;

class pathConfDTOList extends Model
{
    /**
     * @var string
     */
    public $backupPath;
    /**
     * @var string
     */
    public $defenseMode;
    /**
     * @var string
     */
    public $defensePath;
    /**
     * @var string
     */
    public $excludeFile;
    /**
     * @var string
     */
    public $excludeFilePath;
    /**
     * @var string
     */
    public $excludeFileType;
    /**
     * @var int
     */
    public $guardType;
    /**
     * @var string
     */
    public $includeFile;
    /**
     * @var string
     */
    public $includeFileType;
    /**
     * @var string[]
     */
    public $processPathList;
    protected $_name = [
        'backupPath'      => 'BackupPath',
        'defenseMode'     => 'DefenseMode',
        'defensePath'     => 'DefensePath',
        'excludeFile'     => 'ExcludeFile',
        'excludeFilePath' => 'ExcludeFilePath',
        'excludeFileType' => 'ExcludeFileType',
        'guardType'       => 'GuardType',
        'includeFile'     => 'IncludeFile',
        'includeFileType' => 'IncludeFileType',
        'processPathList' => 'ProcessPathList',
    ];

    public function validate()
    {
        if (\is_array($this->processPathList)) {
            Model::validateArray($this->processPathList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupPath) {
            $res['BackupPath'] = $this->backupPath;
        }

        if (null !== $this->defenseMode) {
            $res['DefenseMode'] = $this->defenseMode;
        }

        if (null !== $this->defensePath) {
            $res['DefensePath'] = $this->defensePath;
        }

        if (null !== $this->excludeFile) {
            $res['ExcludeFile'] = $this->excludeFile;
        }

        if (null !== $this->excludeFilePath) {
            $res['ExcludeFilePath'] = $this->excludeFilePath;
        }

        if (null !== $this->excludeFileType) {
            $res['ExcludeFileType'] = $this->excludeFileType;
        }

        if (null !== $this->guardType) {
            $res['GuardType'] = $this->guardType;
        }

        if (null !== $this->includeFile) {
            $res['IncludeFile'] = $this->includeFile;
        }

        if (null !== $this->includeFileType) {
            $res['IncludeFileType'] = $this->includeFileType;
        }

        if (null !== $this->processPathList) {
            if (\is_array($this->processPathList)) {
                $res['ProcessPathList'] = [];
                $n1                     = 0;
                foreach ($this->processPathList as $item1) {
                    $res['ProcessPathList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['BackupPath'])) {
            $model->backupPath = $map['BackupPath'];
        }

        if (isset($map['DefenseMode'])) {
            $model->defenseMode = $map['DefenseMode'];
        }

        if (isset($map['DefensePath'])) {
            $model->defensePath = $map['DefensePath'];
        }

        if (isset($map['ExcludeFile'])) {
            $model->excludeFile = $map['ExcludeFile'];
        }

        if (isset($map['ExcludeFilePath'])) {
            $model->excludeFilePath = $map['ExcludeFilePath'];
        }

        if (isset($map['ExcludeFileType'])) {
            $model->excludeFileType = $map['ExcludeFileType'];
        }

        if (isset($map['GuardType'])) {
            $model->guardType = $map['GuardType'];
        }

        if (isset($map['IncludeFile'])) {
            $model->includeFile = $map['IncludeFile'];
        }

        if (isset($map['IncludeFileType'])) {
            $model->includeFileType = $map['IncludeFileType'];
        }

        if (isset($map['ProcessPathList'])) {
            if (!empty($map['ProcessPathList'])) {
                $model->processPathList = [];
                $n1                     = 0;
                foreach ($map['ProcessPathList'] as $item1) {
                    $model->processPathList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
