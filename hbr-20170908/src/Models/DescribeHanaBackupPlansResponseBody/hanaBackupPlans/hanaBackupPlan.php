<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaBackupPlansResponseBody\hanaBackupPlans;

use AlibabaCloud\Dara\Model;

class hanaBackupPlan extends Model
{
    /**
     * @var string
     */
    public $backupPrefix;
    /**
     * @var string
     */
    public $backupType;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $databaseName;
    /**
     * @var bool
     */
    public $disabled;
    /**
     * @var string
     */
    public $planId;
    /**
     * @var string
     */
    public $planName;
    /**
     * @var string
     */
    public $schedule;
    /**
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'backupPrefix' => 'BackupPrefix',
        'backupType'   => 'BackupType',
        'clusterId'    => 'ClusterId',
        'databaseName' => 'DatabaseName',
        'disabled'     => 'Disabled',
        'planId'       => 'PlanId',
        'planName'     => 'PlanName',
        'schedule'     => 'Schedule',
        'vaultId'      => 'VaultId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupPrefix) {
            $res['BackupPrefix'] = $this->backupPrefix;
        }

        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }

        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }

        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }

        if (null !== $this->schedule) {
            $res['Schedule'] = $this->schedule;
        }

        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
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
        if (isset($map['BackupPrefix'])) {
            $model->backupPrefix = $map['BackupPrefix'];
        }

        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }

        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }

        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }

        if (isset($map['Schedule'])) {
            $model->schedule = $map['Schedule'];
        }

        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
