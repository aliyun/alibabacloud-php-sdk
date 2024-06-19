<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class UpdateBackupPolicyRequest extends Model
{
    /**
     * @example 1001000
     *
     * @var string
     */
    public $backupPeriod;

    /**
     * @example 03:00Z
     *
     * @var string
     */
    public $backupPlanBegin;

    /**
     * @example 30
     *
     * @var int
     */
    public $backupSetRetention;

    /**
     * @example 0
     *
     * @var string
     */
    public $backupType;

    /**
     * @example P
     *
     * @var string
     */
    public $backupWay;

    /**
     * @example 30
     *
     * @var int
     */
    public $coldDataBackupInterval;

    /**
     * @example 30
     *
     * @var int
     */
    public $coldDataBackupRetention;

    /**
     * @var int
     */
    public $crossRegionDataBackupRetention;

    /**
     * @var int
     */
    public $crossRegionLogBackupRetention;

    /**
     * @description This parameter is required.
     *
     * @example pxc-hzjasdyuoo
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $destCrossRegion;

    /**
     * @example 1
     *
     * @var int
     */
    public $forceCleanOnHighSpaceUsage;

    /**
     * @var bool
     */
    public $isCrossRegionDataBackupEnabled;

    /**
     * @var bool
     */
    public $isCrossRegionLogBackupEnabled;

    /**
     * @example 1
     *
     * @var int
     */
    public $isEnabled;

    /**
     * @example 7
     *
     * @var int
     */
    public $localLogRetention;

    /**
     * @var int
     */
    public $localLogRetentionNumber;

    /**
     * @example 30
     *
     * @var int
     */
    public $logLocalRetentionSpace;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 7
     *
     * @var int
     */
    public $removeLogRetention;
    protected $_name = [
        'backupPeriod'                   => 'BackupPeriod',
        'backupPlanBegin'                => 'BackupPlanBegin',
        'backupSetRetention'             => 'BackupSetRetention',
        'backupType'                     => 'BackupType',
        'backupWay'                      => 'BackupWay',
        'coldDataBackupInterval'         => 'ColdDataBackupInterval',
        'coldDataBackupRetention'        => 'ColdDataBackupRetention',
        'crossRegionDataBackupRetention' => 'CrossRegionDataBackupRetention',
        'crossRegionLogBackupRetention'  => 'CrossRegionLogBackupRetention',
        'DBInstanceName'                 => 'DBInstanceName',
        'destCrossRegion'                => 'DestCrossRegion',
        'forceCleanOnHighSpaceUsage'     => 'ForceCleanOnHighSpaceUsage',
        'isCrossRegionDataBackupEnabled' => 'IsCrossRegionDataBackupEnabled',
        'isCrossRegionLogBackupEnabled'  => 'IsCrossRegionLogBackupEnabled',
        'isEnabled'                      => 'IsEnabled',
        'localLogRetention'              => 'LocalLogRetention',
        'localLogRetentionNumber'        => 'LocalLogRetentionNumber',
        'logLocalRetentionSpace'         => 'LogLocalRetentionSpace',
        'regionId'                       => 'RegionId',
        'removeLogRetention'             => 'RemoveLogRetention',
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
        if (null !== $this->coldDataBackupInterval) {
            $res['ColdDataBackupInterval'] = $this->coldDataBackupInterval;
        }
        if (null !== $this->coldDataBackupRetention) {
            $res['ColdDataBackupRetention'] = $this->coldDataBackupRetention;
        }
        if (null !== $this->crossRegionDataBackupRetention) {
            $res['CrossRegionDataBackupRetention'] = $this->crossRegionDataBackupRetention;
        }
        if (null !== $this->crossRegionLogBackupRetention) {
            $res['CrossRegionLogBackupRetention'] = $this->crossRegionLogBackupRetention;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->destCrossRegion) {
            $res['DestCrossRegion'] = $this->destCrossRegion;
        }
        if (null !== $this->forceCleanOnHighSpaceUsage) {
            $res['ForceCleanOnHighSpaceUsage'] = $this->forceCleanOnHighSpaceUsage;
        }
        if (null !== $this->isCrossRegionDataBackupEnabled) {
            $res['IsCrossRegionDataBackupEnabled'] = $this->isCrossRegionDataBackupEnabled;
        }
        if (null !== $this->isCrossRegionLogBackupEnabled) {
            $res['IsCrossRegionLogBackupEnabled'] = $this->isCrossRegionLogBackupEnabled;
        }
        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
        }
        if (null !== $this->localLogRetention) {
            $res['LocalLogRetention'] = $this->localLogRetention;
        }
        if (null !== $this->localLogRetentionNumber) {
            $res['LocalLogRetentionNumber'] = $this->localLogRetentionNumber;
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
        if (isset($map['ColdDataBackupInterval'])) {
            $model->coldDataBackupInterval = $map['ColdDataBackupInterval'];
        }
        if (isset($map['ColdDataBackupRetention'])) {
            $model->coldDataBackupRetention = $map['ColdDataBackupRetention'];
        }
        if (isset($map['CrossRegionDataBackupRetention'])) {
            $model->crossRegionDataBackupRetention = $map['CrossRegionDataBackupRetention'];
        }
        if (isset($map['CrossRegionLogBackupRetention'])) {
            $model->crossRegionLogBackupRetention = $map['CrossRegionLogBackupRetention'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['DestCrossRegion'])) {
            $model->destCrossRegion = $map['DestCrossRegion'];
        }
        if (isset($map['ForceCleanOnHighSpaceUsage'])) {
            $model->forceCleanOnHighSpaceUsage = $map['ForceCleanOnHighSpaceUsage'];
        }
        if (isset($map['IsCrossRegionDataBackupEnabled'])) {
            $model->isCrossRegionDataBackupEnabled = $map['IsCrossRegionDataBackupEnabled'];
        }
        if (isset($map['IsCrossRegionLogBackupEnabled'])) {
            $model->isCrossRegionLogBackupEnabled = $map['IsCrossRegionLogBackupEnabled'];
        }
        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
        }
        if (isset($map['LocalLogRetention'])) {
            $model->localLogRetention = $map['LocalLogRetention'];
        }
        if (isset($map['LocalLogRetentionNumber'])) {
            $model->localLogRetentionNumber = $map['LocalLogRetentionNumber'];
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
