<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaBackupSettingResponseBody;

use AlibabaCloud\Tea\Model;

class hanaBackupSetting extends Model
{
    /**
     * @description The configuration file for catalog backup.
     *
     * @example /usr/sap/SID/SYS/global/hdb/opt/hdbconfig/param
     *
     * @var string
     */
    public $catalogBackupParameterFile;

    /**
     * @description Indicates whether Backint is used to back up catalogs. Valid values:
     *
     *   true: Backint is used to back up catalogs.
     *   false: Backint is not used to back up catalogs.
     *
     * @example false
     *
     * @var bool
     */
    public $catalogBackupUsingBackint;

    /**
     * @description The configuration file for data backup.
     *
     * @example /usr/sap/SID/SYS/global/hdb/opt/hdbconfig/param
     *
     * @var string
     */
    public $dataBackupParameterFile;

    /**
     * @description The name of the database.
     *
     * @example SYSTEMDB
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description Indicates whether automatic log backup is enabled. Valid values:
     *
     *   **true**: Automatic log backup is enabled.
     *   **false**: Automatic log backup is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enableAutoLogBackup;

    /**
     * @description The configuration file for log backup.
     *
     * @example /usr/sap/SID/SYS/global/hdb/opt/hdbconfig/param
     *
     * @var string
     */
    public $logBackupParameterFile;

    /**
     * @description The interval at which logs are backed up. Unit: seconds.
     *
     * @example 900
     *
     * @var int
     */
    public $logBackupTimeout;

    /**
     * @description Indicates whether Backint is used to back up logs. Valid values:
     *
     *   true: Backint is used to back up logs.
     *   false: Backint is not used to back up logs.
     *
     * @example true
     *
     * @var bool
     */
    public $logBackupUsingBackint;
    protected $_name = [
        'catalogBackupParameterFile' => 'CatalogBackupParameterFile',
        'catalogBackupUsingBackint'  => 'CatalogBackupUsingBackint',
        'dataBackupParameterFile'    => 'DataBackupParameterFile',
        'databaseName'               => 'DatabaseName',
        'enableAutoLogBackup'        => 'EnableAutoLogBackup',
        'logBackupParameterFile'     => 'LogBackupParameterFile',
        'logBackupTimeout'           => 'LogBackupTimeout',
        'logBackupUsingBackint'      => 'LogBackupUsingBackint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogBackupParameterFile) {
            $res['CatalogBackupParameterFile'] = $this->catalogBackupParameterFile;
        }
        if (null !== $this->catalogBackupUsingBackint) {
            $res['CatalogBackupUsingBackint'] = $this->catalogBackupUsingBackint;
        }
        if (null !== $this->dataBackupParameterFile) {
            $res['DataBackupParameterFile'] = $this->dataBackupParameterFile;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->enableAutoLogBackup) {
            $res['EnableAutoLogBackup'] = $this->enableAutoLogBackup;
        }
        if (null !== $this->logBackupParameterFile) {
            $res['LogBackupParameterFile'] = $this->logBackupParameterFile;
        }
        if (null !== $this->logBackupTimeout) {
            $res['LogBackupTimeout'] = $this->logBackupTimeout;
        }
        if (null !== $this->logBackupUsingBackint) {
            $res['LogBackupUsingBackint'] = $this->logBackupUsingBackint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hanaBackupSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogBackupParameterFile'])) {
            $model->catalogBackupParameterFile = $map['CatalogBackupParameterFile'];
        }
        if (isset($map['CatalogBackupUsingBackint'])) {
            $model->catalogBackupUsingBackint = $map['CatalogBackupUsingBackint'];
        }
        if (isset($map['DataBackupParameterFile'])) {
            $model->dataBackupParameterFile = $map['DataBackupParameterFile'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['EnableAutoLogBackup'])) {
            $model->enableAutoLogBackup = $map['EnableAutoLogBackup'];
        }
        if (isset($map['LogBackupParameterFile'])) {
            $model->logBackupParameterFile = $map['LogBackupParameterFile'];
        }
        if (isset($map['LogBackupTimeout'])) {
            $model->logBackupTimeout = $map['LogBackupTimeout'];
        }
        if (isset($map['LogBackupUsingBackint'])) {
            $model->logBackupUsingBackint = $map['LogBackupUsingBackint'];
        }

        return $model;
    }
}
