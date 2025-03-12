<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSasContainerWebDefenseRuleResponseBody\containerWebDefenseRule;

use AlibabaCloud\Tea\Model;

class pathConfDTOList extends Model
{
    /**
     * @description Backup path.
     *
     * @example /usr/path/
     *
     * @var string
     */
    public $backupPath;

    /**
     * @description Action to be executed.
     * - **block** : Block
     * - **audit** : Alert
     * @example audit
     *
     * @var string
     */
    public $defenseMode;

    /**
     * @description Defense path
     *
     * @example /test11*
     *
     * @var string
     */
    public $defensePath;

    /**
     * @description Excluded files.
     *
     * @example file1
     *
     * @var string
     */
    public $excludeFile;

    /**
     * @description Excluded file path.
     *
     * @example /test2/sub1,/test2/sub2
     *
     * @var string
     */
    public $excludeFilePath;

    /**
     * @description Exclude file types.
     *
     * @example doc
     *
     * @var string
     */
    public $excludeFileType;

    /**
     * @description Protection mode.
     * - **0**: Basic mode (whitelist)
     * - **1**: Advanced mode (blacklist)
     * @example 0
     *
     * @var int
     */
    public $guardType;

    /**
     * @description Included files.
     *
     * @example webapp
     *
     * @var string
     */
    public $includeFile;

    /**
     * @description Type of included files.
     *
     * @example doc
     *
     * @var string
     */
    public $includeFileType;

    /**
     * @description Whitelist process list.
     *
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
    }

    public function toMap()
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
            $res['ProcessPathList'] = $this->processPathList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pathConfDTOList
     */
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
                $model->processPathList = $map['ProcessPathList'];
            }
        }

        return $model;
    }
}
