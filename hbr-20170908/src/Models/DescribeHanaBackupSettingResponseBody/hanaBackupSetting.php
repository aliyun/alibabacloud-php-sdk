<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaBackupSettingResponseBody;

use AlibabaCloud\Dara\Model;

class hanaBackupSetting extends Model
{
    /**
     * @var string
     */
    public $catalogBackupParameterFile;
    /**
     * @var bool
     */
    public $catalogBackupUsingBackint;
    /**
     * @var string
     */
    public $dataBackupParameterFile;
    /**
     * @var string
     */
    public $databaseName;
    /**
     * @var bool
     */
    public $enableAutoLogBackup;
    /**
     * @var string
     */
    public $logBackupParameterFile;
    /**
     * @var int
     */
    public $logBackupTimeout;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
