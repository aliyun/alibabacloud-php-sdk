<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebLockStartRequest extends Model
{
    /**
     * @description The prevention mode. Valid values:
     *
     *   **block**: Interception Mode
     *   **audit**: Alert Mode
     *
     * This parameter is required.
     * @example block
     *
     * @var string
     */
    public $defenceMode;

    /**
     * @description The directory for which you want to enable web tamper proofing. Separate multiple directories with commas (,).
     *
     * This parameter is required.
     * @example /home/admin/tomcat
     *
     * @var string
     */
    public $dir;

    /**
     * @description The directory for which you want to disable web tamper proofing.
     *
     * > If you set **Mode** to **blacklist**, you must specify this parameter.
     * @example /home/admin/java
     *
     * @var string
     */
    public $exclusiveDir;

    /**
     * @description The file for which you want to disable web tamper proofing.
     *
     * > If you set **Mode** to **blacklist**, you must specify this parameter.
     * @example /home/admin/tomcat/localhost.log
     *
     * @var string
     */
    public $exclusiveFile;

    /**
     * @description The type of the file for which you want to disable web tamper proofing. Separate multiple types with semicolons (;). Valid values:
     *
     *   php
     *   jsp
     *   asp
     *   aspx
     *   js
     *   cgi
     *   html
     *   htm
     *   xml
     *   shtml
     *   shtm
     *   jpg
     *   gif
     *   png
     *
     * > If you set **Mode** to **blacklist**, you must specify this parameter.
     * @example jpg
     *
     * @var string
     */
    public $exclusiveFileType;

    /**
     * @description The type of the file for which you want to enable web tamper proofing. Separate multiple types with semicolons (;). Valid values:
     *
     *   php
     *   jsp
     *   asp
     *   aspx
     *   js
     *   cgi
     *   html
     *   htm
     *   xml
     *   shtml
     *   shtm
     *   jpg
     *   gif
     *   png
     *
     * > If you set **Mode** to **whitelist**, you must specify this parameter.
     * @example php
     *
     * @var string
     */
    public $inclusiveFileType;

    /**
     * @description The local path to the backup files of the protected directory.\\
     * The directory format of a Linux server is different from that of a Windows server. You must enter the directory in the required format based on your operating system. Examples:
     *
     *   Linux server: /usr/local/aegis/bak
     *   Windows server: C:\\Program Files (x86)\\Alibaba\\Aegis\\bak
     *
     * This parameter is required.
     * @example /usr/local/backup
     *
     * @var string
     */
    public $localBackupDir;

    /**
     * @description The protection mode of web tamper proofing. Valid values:
     *
     *   **whitelist**: In this mode, web tamper proofing is enabled for the specified directories and file types.
     *   **blacklist**: In this mode, web tamper proofing is enabled for the unspecified subdirectories, file types, and files in the protected directory.
     *
     * This parameter is required.
     * @example whitelist
     *
     * @var string
     */
    public $mode;

    /**
     * @description The UUID of the server for which you want to enable web tamper proofing.
     *
     * This parameter is required.
     * @example 80d2f7d6-31a9-4d7f-8ff4-7ecc42f89ca****
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
     * @return ModifyWebLockStartRequest
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
