<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebLockCreateConfigRequest extends Model
{
    /**
     * @var string
     */
    public $defenceMode;

    /**
     * @var string
     */
    public $dir;

    /**
     * @var string
     */
    public $exclusiveDir;

    /**
     * @var string
     */
    public $exclusiveFile;

    /**
     * @var string
     */
    public $exclusiveFileType;

    /**
     * @var string
     */
    public $inclusiveFile;

    /**
     * @var string
     */
    public $inclusiveFileType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $localBackupDir;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'defenceMode'       => 'DefenceMode',
        'dir'               => 'Dir',
        'exclusiveDir'      => 'ExclusiveDir',
        'exclusiveFile'     => 'ExclusiveFile',
        'exclusiveFileType' => 'ExclusiveFileType',
        'inclusiveFile'     => 'InclusiveFile',
        'inclusiveFileType' => 'InclusiveFileType',
        'lang'              => 'Lang',
        'localBackupDir'    => 'LocalBackupDir',
        'mode'              => 'Mode',
        'sourceIp'          => 'SourceIp',
        'uuid'              => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenceMode) {
            $res['DefenceMode'] = $this->defenceMode;
        }
        if (null !== $this->dir) {
            $res['Dir'] = $this->dir;
        }
        if (null !== $this->exclusiveDir) {
            $res['ExclusiveDir'] = $this->exclusiveDir;
        }
        if (null !== $this->exclusiveFile) {
            $res['ExclusiveFile'] = $this->exclusiveFile;
        }
        if (null !== $this->exclusiveFileType) {
            $res['ExclusiveFileType'] = $this->exclusiveFileType;
        }
        if (null !== $this->inclusiveFile) {
            $res['InclusiveFile'] = $this->inclusiveFile;
        }
        if (null !== $this->inclusiveFileType) {
            $res['InclusiveFileType'] = $this->inclusiveFileType;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->localBackupDir) {
            $res['LocalBackupDir'] = $this->localBackupDir;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyWebLockCreateConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenceMode'])) {
            $model->defenceMode = $map['DefenceMode'];
        }
        if (isset($map['Dir'])) {
            $model->dir = $map['Dir'];
        }
        if (isset($map['ExclusiveDir'])) {
            $model->exclusiveDir = $map['ExclusiveDir'];
        }
        if (isset($map['ExclusiveFile'])) {
            $model->exclusiveFile = $map['ExclusiveFile'];
        }
        if (isset($map['ExclusiveFileType'])) {
            $model->exclusiveFileType = $map['ExclusiveFileType'];
        }
        if (isset($map['InclusiveFile'])) {
            $model->inclusiveFile = $map['InclusiveFile'];
        }
        if (isset($map['InclusiveFileType'])) {
            $model->inclusiveFileType = $map['InclusiveFileType'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['LocalBackupDir'])) {
            $model->localBackupDir = $map['LocalBackupDir'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
