<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class UpdateHanaBackupSettingRequest extends Model
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
     * @description Specifies whether to use Backint to back up catalogs. Valid values:
     *
     *   true: Backint is used to back up catalogs.
     *   false: Backint is not used to back up catalogs.
     *
     * @example true
     *
     * @var bool
     */
    public $catalogBackupUsingBackint;

    /**
     * @description The ID of the SAP HANA instance.
     *
     * @example cl-000ezvg******8znz
     *
     * @var string
     */
    public $clusterId;

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
     * @description Specifies whether to enable automatic log backup. Valid values:
     *
     *   **true**: enables automatic log backup.
     *   **false**: disables automatic log backup.
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
     * @description Specifies whether to use Backint to back up logs. Valid values:
     *
     *   true: Backint is used to back up logs.
     *   false: Backint is not used to back up logs.
     *
     * @example true
     *
     * @var bool
     */
    public $logBackupUsingBackint;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-0005n******rluw5
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'catalogBackupParameterFile' => 'CatalogBackupParameterFile',
        'catalogBackupUsingBackint'  => 'CatalogBackupUsingBackint',
        'clusterId'                  => 'ClusterId',
        'dataBackupParameterFile'    => 'DataBackupParameterFile',
        'databaseName'               => 'DatabaseName',
        'enableAutoLogBackup'        => 'EnableAutoLogBackup',
        'logBackupParameterFile'     => 'LogBackupParameterFile',
        'logBackupTimeout'           => 'LogBackupTimeout',
        'logBackupUsingBackint'      => 'LogBackupUsingBackint',
        'vaultId'                    => 'VaultId',
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
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHanaBackupSettingRequest
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
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
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
