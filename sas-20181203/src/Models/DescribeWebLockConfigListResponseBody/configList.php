<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockConfigListResponseBody;

use AlibabaCloud\Tea\Model;

class configList extends Model
{
    /**
     * @example audit
     *
     * @var string
     */
    public $defenceMode;

    /**
     * @example /www/tmp/
     *
     * @var string
     */
    public $dir;

    /**
     * @example /home/admin/tomcat
     *
     * @var string
     */
    public $exclusiveDir;

    /**
     * @example /home/admin/tomcat/localhost.log
     *
     * @var string
     */
    public $exclusiveFile;

    /**
     * @example *.jpg
     *
     * @var string
     */
    public $exclusiveFileType;

    /**
     * @example 11
     *
     * @var string
     */
    public $id;

    /**
     * @example /home/admin/tomcat/aaa.log
     *
     * @var string
     */
    public $inclusiveFile;

    /**
     * @example jpg
     *
     * @var string
     */
    public $inclusiveFileType;

    /**
     * @example /usr/local/backup
     *
     * @var string
     */
    public $localBackupDir;

    /**
     * @example blacklist
     *
     * @var string
     */
    public $mode;

    /**
     * @example 80d2f7d6-31a9-4d7f-8ff4-7ecc42f8****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'defenceMode'       => 'DefenceMode',
        'dir'               => 'Dir',
        'exclusiveDir'      => 'ExclusiveDir',
        'exclusiveFile'     => 'ExclusiveFile',
        'exclusiveFileType' => 'ExclusiveFileType',
        'id'                => 'Id',
        'inclusiveFile'     => 'InclusiveFile',
        'inclusiveFileType' => 'InclusiveFileType',
        'localBackupDir'    => 'LocalBackupDir',
        'mode'              => 'Mode',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->inclusiveFile) {
            $res['InclusiveFile'] = $this->inclusiveFile;
        }
        if (null !== $this->inclusiveFileType) {
            $res['InclusiveFileType'] = $this->inclusiveFileType;
        }
        if (null !== $this->localBackupDir) {
            $res['LocalBackupDir'] = $this->localBackupDir;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configList
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InclusiveFile'])) {
            $model->inclusiveFile = $map['InclusiveFile'];
        }
        if (isset($map['InclusiveFileType'])) {
            $model->inclusiveFileType = $map['InclusiveFileType'];
        }
        if (isset($map['LocalBackupDir'])) {
            $model->localBackupDir = $map['LocalBackupDir'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
