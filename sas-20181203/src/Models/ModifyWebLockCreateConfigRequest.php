<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebLockCreateConfigRequest extends Model
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
     * @description The directory that you want to protect.
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
     * @example /home/admin/test
     *
     * @var string
     */
    public $exclusiveDir;

    /**
     * @description The file for which you want to disable web tamper proofing.
     *
     * > If you set **Mode** to **blacklist**, you must specify this parameter.
     * @example /home/admin/apache.log
     *
     * @var string
     */
    public $exclusiveFile;

    /**
     * @description The type of file for which you want to disable web tamper proofing. Separate multiple types with semicolons (;). Valid values:
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
     * @description The file for which you want to enable web tamper proofing.
     *
     * > If you set **Mode** to **whitelist**, you must specify this parameter.
     * @example /home/admin/test.log
     *
     * @var string
     */
    public $inclusiveFile;

    /**
     * @description The type of file for which you want to enable web tamper proofing. Separate multiple types with semicolons (;). Valid values:
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
     * @example jpg
     *
     * @var string
     */
    public $inclusiveFileType;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The local path to the backup files of the protected directory.
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
     *   **blacklist**: In this mode, web tamper proofing is enabled for the unspecified sub-directories, file types, and files in the protected directories.
     *
     * @example whitelist
     *
     * @var string
     */
    public $mode;

    /**
     * @description The source IP address of the request.
     *
     * @example 39.170.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The UUID of the server for which you want to add a directory to protect.
     *
     * This parameter is required.
     * @example inet-12345****
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
