<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\ModifyAdvancedBackupPolicyRequest;

use AlibabaCloud\Dara\Model;

class advancedBackupDataPolicies extends Model
{
    /**
     * @var string
     */
    public $actionType;

    /**
     * @var string
     */
    public $backupPolicy;

    /**
     * @var string
     */
    public $destRegion;

    /**
     * @var string
     */
    public $destType;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @var bool
     */
    public $preserveOneEachHour;

    /**
     * @var int
     */
    public $retentionPeriod;

    /**
     * @var string
     */
    public $retentionType;

    /**
     * @var string
     */
    public $srcRegion;

    /**
     * @var string
     */
    public $srcType;
    protected $_name = [
        'actionType' => 'ActionType',
        'backupPolicy' => 'BackupPolicy',
        'destRegion' => 'DestRegion',
        'destType' => 'DestType',
        'policyId' => 'PolicyId',
        'preferredBackupPeriod' => 'PreferredBackupPeriod',
        'preserveOneEachHour' => 'PreserveOneEachHour',
        'retentionPeriod' => 'RetentionPeriod',
        'retentionType' => 'RetentionType',
        'srcRegion' => 'SrcRegion',
        'srcType' => 'SrcType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        if (null !== $this->backupPolicy) {
            $res['BackupPolicy'] = $this->backupPolicy;
        }

        if (null !== $this->destRegion) {
            $res['DestRegion'] = $this->destRegion;
        }

        if (null !== $this->destType) {
            $res['DestType'] = $this->destType;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }

        if (null !== $this->preserveOneEachHour) {
            $res['PreserveOneEachHour'] = $this->preserveOneEachHour;
        }

        if (null !== $this->retentionPeriod) {
            $res['RetentionPeriod'] = $this->retentionPeriod;
        }

        if (null !== $this->retentionType) {
            $res['RetentionType'] = $this->retentionType;
        }

        if (null !== $this->srcRegion) {
            $res['SrcRegion'] = $this->srcRegion;
        }

        if (null !== $this->srcType) {
            $res['SrcType'] = $this->srcType;
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
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        if (isset($map['BackupPolicy'])) {
            $model->backupPolicy = $map['BackupPolicy'];
        }

        if (isset($map['DestRegion'])) {
            $model->destRegion = $map['DestRegion'];
        }

        if (isset($map['DestType'])) {
            $model->destType = $map['DestType'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }

        if (isset($map['PreserveOneEachHour'])) {
            $model->preserveOneEachHour = $map['PreserveOneEachHour'];
        }

        if (isset($map['RetentionPeriod'])) {
            $model->retentionPeriod = $map['RetentionPeriod'];
        }

        if (isset($map['RetentionType'])) {
            $model->retentionType = $map['RetentionType'];
        }

        if (isset($map['SrcRegion'])) {
            $model->srcRegion = $map['SrcRegion'];
        }

        if (isset($map['SrcType'])) {
            $model->srcType = $map['SrcType'];
        }

        return $model;
    }
}
