<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\UpdateBackupPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $logLocalRetentionSpace;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $backupWay;

    /**
     * @var string
     */
    public $backupPeriod;

    /**
     * @var int
     */
    public $forceCleanOnHighSpaceUsage;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var int
     */
    public $localLogRetention;

    /**
     * @var int
     */
    public $removeLogRetention;

    /**
     * @var string
     */
    public $backupPlanBegin;

    /**
     * @var int
     */
    public $backupSetRetention;

    /**
     * @var int
     */
    public $isEnabled;
    protected $_name = [
        'logLocalRetentionSpace'     => 'LogLocalRetentionSpace',
        'DBInstanceName'             => 'DBInstanceName',
        'backupWay'                  => 'BackupWay',
        'backupPeriod'               => 'BackupPeriod',
        'forceCleanOnHighSpaceUsage' => 'ForceCleanOnHighSpaceUsage',
        'backupType'                 => 'BackupType',
        'localLogRetention'          => 'LocalLogRetention',
        'removeLogRetention'         => 'RemoveLogRetention',
        'backupPlanBegin'            => 'BackupPlanBegin',
        'backupSetRetention'         => 'BackupSetRetention',
        'isEnabled'                  => 'IsEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logLocalRetentionSpace) {
            $res['LogLocalRetentionSpace'] = $this->logLocalRetentionSpace;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->backupWay) {
            $res['BackupWay'] = $this->backupWay;
        }
        if (null !== $this->backupPeriod) {
            $res['BackupPeriod'] = $this->backupPeriod;
        }
        if (null !== $this->forceCleanOnHighSpaceUsage) {
            $res['ForceCleanOnHighSpaceUsage'] = $this->forceCleanOnHighSpaceUsage;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->localLogRetention) {
            $res['LocalLogRetention'] = $this->localLogRetention;
        }
        if (null !== $this->removeLogRetention) {
            $res['RemoveLogRetention'] = $this->removeLogRetention;
        }
        if (null !== $this->backupPlanBegin) {
            $res['BackupPlanBegin'] = $this->backupPlanBegin;
        }
        if (null !== $this->backupSetRetention) {
            $res['BackupSetRetention'] = $this->backupSetRetention;
        }
        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogLocalRetentionSpace'])) {
            $model->logLocalRetentionSpace = $map['LogLocalRetentionSpace'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['BackupWay'])) {
            $model->backupWay = $map['BackupWay'];
        }
        if (isset($map['BackupPeriod'])) {
            $model->backupPeriod = $map['BackupPeriod'];
        }
        if (isset($map['ForceCleanOnHighSpaceUsage'])) {
            $model->forceCleanOnHighSpaceUsage = $map['ForceCleanOnHighSpaceUsage'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['LocalLogRetention'])) {
            $model->localLogRetention = $map['LocalLogRetention'];
        }
        if (isset($map['RemoveLogRetention'])) {
            $model->removeLogRetention = $map['RemoveLogRetention'];
        }
        if (isset($map['BackupPlanBegin'])) {
            $model->backupPlanBegin = $map['BackupPlanBegin'];
        }
        if (isset($map['BackupSetRetention'])) {
            $model->backupSetRetention = $map['BackupSetRetention'];
        }
        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
        }

        return $model;
    }
}
