<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models;

use AlibabaCloud\Dara\Model;

class CreateComputeJobRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var float
     */
    public $cuLimit;

    /**
     * @var float
     */
    public $cuReserved;

    /**
     * @var string
     */
    public $draftSql;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobConfig;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $upgradeMode;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'cuLimit' => 'CuLimit',
        'cuReserved' => 'CuReserved',
        'draftSql' => 'DraftSql',
        'instanceId' => 'InstanceId',
        'jobConfig' => 'JobConfig',
        'jobName' => 'JobName',
        'regionId' => 'RegionId',
        'remark' => 'Remark',
        'upgradeMode' => 'UpgradeMode',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->cuLimit) {
            $res['CuLimit'] = $this->cuLimit;
        }

        if (null !== $this->cuReserved) {
            $res['CuReserved'] = $this->cuReserved;
        }

        if (null !== $this->draftSql) {
            $res['DraftSql'] = $this->draftSql;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobConfig) {
            $res['JobConfig'] = $this->jobConfig;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->upgradeMode) {
            $res['UpgradeMode'] = $this->upgradeMode;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CuLimit'])) {
            $model->cuLimit = $map['CuLimit'];
        }

        if (isset($map['CuReserved'])) {
            $model->cuReserved = $map['CuReserved'];
        }

        if (isset($map['DraftSql'])) {
            $model->draftSql = $map['DraftSql'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JobConfig'])) {
            $model->jobConfig = $map['JobConfig'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['UpgradeMode'])) {
            $model->upgradeMode = $map['UpgradeMode'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
