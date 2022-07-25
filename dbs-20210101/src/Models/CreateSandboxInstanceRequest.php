<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models;

use AlibabaCloud\Tea\Model;

class CreateSandboxInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var string
     */
    public $backupSetId;

    /**
     * @var string
     */
    public $restoreTime;

    /**
     * @var string
     */
    public $sandboxInstanceName;

    /**
     * @var string
     */
    public $sandboxPassword;

    /**
     * @var string
     */
    public $sandboxSpecification;

    /**
     * @var string
     */
    public $sandboxType;

    /**
     * @var string
     */
    public $sandboxUser;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcSwitchId;
    protected $_name = [
        'backupPlanId'         => 'BackupPlanId',
        'backupSetId'          => 'BackupSetId',
        'restoreTime'          => 'RestoreTime',
        'sandboxInstanceName'  => 'SandboxInstanceName',
        'sandboxPassword'      => 'SandboxPassword',
        'sandboxSpecification' => 'SandboxSpecification',
        'sandboxType'          => 'SandboxType',
        'sandboxUser'          => 'SandboxUser',
        'vpcId'                => 'VpcId',
        'vpcSwitchId'          => 'VpcSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->sandboxInstanceName) {
            $res['SandboxInstanceName'] = $this->sandboxInstanceName;
        }
        if (null !== $this->sandboxPassword) {
            $res['SandboxPassword'] = $this->sandboxPassword;
        }
        if (null !== $this->sandboxSpecification) {
            $res['SandboxSpecification'] = $this->sandboxSpecification;
        }
        if (null !== $this->sandboxType) {
            $res['SandboxType'] = $this->sandboxType;
        }
        if (null !== $this->sandboxUser) {
            $res['SandboxUser'] = $this->sandboxUser;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcSwitchId) {
            $res['VpcSwitchId'] = $this->vpcSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSandboxInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['SandboxInstanceName'])) {
            $model->sandboxInstanceName = $map['SandboxInstanceName'];
        }
        if (isset($map['SandboxPassword'])) {
            $model->sandboxPassword = $map['SandboxPassword'];
        }
        if (isset($map['SandboxSpecification'])) {
            $model->sandboxSpecification = $map['SandboxSpecification'];
        }
        if (isset($map['SandboxType'])) {
            $model->sandboxType = $map['SandboxType'];
        }
        if (isset($map['SandboxUser'])) {
            $model->sandboxUser = $map['SandboxUser'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcSwitchId'])) {
            $model->vpcSwitchId = $map['VpcSwitchId'];
        }

        return $model;
    }
}
