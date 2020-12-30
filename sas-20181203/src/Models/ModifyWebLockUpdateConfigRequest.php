<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebLockUpdateConfigRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $uuid;

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
    public $exclusiveFileType;

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
    public $inclusiveFileType;

    /**
     * @var string
     */
    public $exclusiveFile;

    /**
     * @var string
     */
    public $inclusiveFile;

    /**
     * @var string
     */
    public $defenceMode;
    protected $_name = [
        'sourceIp'          => 'SourceIp',
        'lang'              => 'Lang',
        'id'                => 'Id',
        'uuid'              => 'Uuid',
        'dir'               => 'Dir',
        'exclusiveDir'      => 'ExclusiveDir',
        'exclusiveFileType' => 'ExclusiveFileType',
        'localBackupDir'    => 'LocalBackupDir',
        'mode'              => 'Mode',
        'inclusiveFileType' => 'InclusiveFileType',
        'exclusiveFile'     => 'ExclusiveFile',
        'inclusiveFile'     => 'InclusiveFile',
        'defenceMode'       => 'DefenceMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->dir) {
            $res['Dir'] = $this->dir;
        }
        if (null !== $this->exclusiveDir) {
            $res['ExclusiveDir'] = $this->exclusiveDir;
        }
        if (null !== $this->exclusiveFileType) {
            $res['ExclusiveFileType'] = $this->exclusiveFileType;
        }
        if (null !== $this->localBackupDir) {
            $res['LocalBackupDir'] = $this->localBackupDir;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->inclusiveFileType) {
            $res['InclusiveFileType'] = $this->inclusiveFileType;
        }
        if (null !== $this->exclusiveFile) {
            $res['ExclusiveFile'] = $this->exclusiveFile;
        }
        if (null !== $this->inclusiveFile) {
            $res['InclusiveFile'] = $this->inclusiveFile;
        }
        if (null !== $this->defenceMode) {
            $res['DefenceMode'] = $this->defenceMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyWebLockUpdateConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Dir'])) {
            $model->dir = $map['Dir'];
        }
        if (isset($map['ExclusiveDir'])) {
            $model->exclusiveDir = $map['ExclusiveDir'];
        }
        if (isset($map['ExclusiveFileType'])) {
            $model->exclusiveFileType = $map['ExclusiveFileType'];
        }
        if (isset($map['LocalBackupDir'])) {
            $model->localBackupDir = $map['LocalBackupDir'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['InclusiveFileType'])) {
            $model->inclusiveFileType = $map['InclusiveFileType'];
        }
        if (isset($map['ExclusiveFile'])) {
            $model->exclusiveFile = $map['ExclusiveFile'];
        }
        if (isset($map['InclusiveFile'])) {
            $model->inclusiveFile = $map['InclusiveFile'];
        }
        if (isset($map['DefenceMode'])) {
            $model->defenceMode = $map['DefenceMode'];
        }

        return $model;
    }
}
