<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class UpdateBackupPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $backupPeriod;

    /**
     * @var string
     */
    public $backupPlanBegin;

    /**
     * @var int
     */
    public $backupSetRetention;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var string
     */
    public $backupWay;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var int
     */
    public $forceCleanOnHighSpaceUsage;

    /**
     * @var int
     */
    public $isEnabled;

    /**
     * @var int
     */
    public $localLogRetention;

    /**
     * @var int
     */
    public $logLocalRetentionSpace;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $removeLogRetention;
    protected $_name = [
        'backupPeriod'               => 'BackupPeriod',
        'backupPlanBegin'            => 'BackupPlanBegin',
        'backupSetRetention'         => 'BackupSetRetention',
        'backupType'                 => 'BackupType',
        'backupWay'                  => 'BackupWay',
        'DBInstanceName'             => 'DBInstanceName',
        'forceCleanOnHighSpaceUsage' => 'ForceCleanOnHighSpaceUsage',
        'isEnabled'                  => 'IsEnabled',
        'localLogRetention'          => 'LocalLogRetention',
        'logLocalRetentionSpace'     => 'LogLocalRetentionSpace',
        'regionId'                   => 'RegionId',
        'removeLogRetention'         => 'RemoveLogRetention',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupPeriod) {
            $res['BackupPeriod'] = $this->backupPeriod;
        }
        if (null !== $this->backupPlanBegin) {
            $res['BackupPlanBegin'] = $this->backupPlanBegin;
        }
        if (null !== $this->backupSetRetention) {
            $res['BackupSetRetention'] = $this->backupSetRetention;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->backupWay) {
            $res['BackupWay'] = $this->backupWay;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->forceCleanOnHighSpaceUsage) {
            $res['ForceCleanOnHighSpaceUsage'] = $this->forceCleanOnHighSpaceUsage;
        }
        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
        }
        if (null !== $this->localLogRetention) {
            $res['LocalLogRetention'] = $this->localLogRetention;
        }
        if (null !== $this->logLocalRetentionSpace) {
            $res['LogLocalRetentionSpace'] = $this->logLocalRetentionSpace;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->removeLogRetention) {
            $res['RemoveLogRetention'] = $this->removeLogRetention;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBackupPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPeriod'])) {
            $model->backupPeriod = $map['BackupPeriod'];
        }
        if (isset($map['BackupPlanBegin'])) {
            $model->backupPlanBegin = $map['BackupPlanBegin'];
        }
        if (isset($map['BackupSetRetention'])) {
            $model->backupSetRetention = $map['BackupSetRetention'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['BackupWay'])) {
            $model->backupWay = $map['BackupWay'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['ForceCleanOnHighSpaceUsage'])) {
            $model->forceCleanOnHighSpaceUsage = $map['ForceCleanOnHighSpaceUsage'];
        }
        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
        }
        if (isset($map['LocalLogRetention'])) {
            $model->localLogRetention = $map['LocalLogRetention'];
        }
        if (isset($map['LogLocalRetentionSpace'])) {
            $model->logLocalRetentionSpace = $map['LogLocalRetentionSpace'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemoveLogRetention'])) {
            $model->removeLogRetention = $map['RemoveLogRetention'];
        }

        return $model;
    }
}
