<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebLockStartRequest extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $localBackupDir;

    /**
     * @var string
     */
    public $exclusiveFile;

    /**
     * @var string
     */
    public $dir;

    /**
     * @var string
     */
    public $inclusiveFileType;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $exclusiveFileType;

    /**
     * @var string
     */
    public $exclusiveDir;

    /**
     * @var string
     */
    public $defenceMode;
    protected $_name = [
        'mode'              => 'Mode',
        'localBackupDir'    => 'LocalBackupDir',
        'exclusiveFile'     => 'ExclusiveFile',
        'dir'               => 'Dir',
        'inclusiveFileType' => 'InclusiveFileType',
        'uuid'              => 'Uuid',
        'exclusiveFileType' => 'ExclusiveFileType',
        'exclusiveDir'      => 'ExclusiveDir',
        'defenceMode'       => 'DefenceMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->localBackupDir) {
            $res['LocalBackupDir'] = $this->localBackupDir;
        }
        if (null !== $this->exclusiveFile) {
            $res['ExclusiveFile'] = $this->exclusiveFile;
        }
        if (null !== $this->dir) {
            $res['Dir'] = $this->dir;
        }
        if (null !== $this->inclusiveFileType) {
            $res['InclusiveFileType'] = $this->inclusiveFileType;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->exclusiveFileType) {
            $res['ExclusiveFileType'] = $this->exclusiveFileType;
        }
        if (null !== $this->exclusiveDir) {
            $res['ExclusiveDir'] = $this->exclusiveDir;
        }
        if (null !== $this->defenceMode) {
            $res['DefenceMode'] = $this->defenceMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyWebLockStartRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['LocalBackupDir'])) {
            $model->localBackupDir = $map['LocalBackupDir'];
        }
        if (isset($map['ExclusiveFile'])) {
            $model->exclusiveFile = $map['ExclusiveFile'];
        }
        if (isset($map['Dir'])) {
            $model->dir = $map['Dir'];
        }
        if (isset($map['InclusiveFileType'])) {
            $model->inclusiveFileType = $map['InclusiveFileType'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['ExclusiveFileType'])) {
            $model->exclusiveFileType = $map['ExclusiveFileType'];
        }
        if (isset($map['ExclusiveDir'])) {
            $model->exclusiveDir = $map['ExclusiveDir'];
        }
        if (isset($map['DefenceMode'])) {
            $model->defenceMode = $map['DefenceMode'];
        }

        return $model;
    }
}
