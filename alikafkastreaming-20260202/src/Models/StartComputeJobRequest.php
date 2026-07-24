<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models;

use AlibabaCloud\Dara\Model;

class StartComputeJobRequest extends Model
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
     * @var bool
     */
    public $draftSqlStart;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $recoveryMode;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'cuLimit' => 'CuLimit',
        'cuReserved' => 'CuReserved',
        'draftSql' => 'DraftSql',
        'draftSqlStart' => 'DraftSqlStart',
        'instanceId' => 'InstanceId',
        'jobName' => 'JobName',
        'recoveryMode' => 'RecoveryMode',
        'regionId' => 'RegionId',
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

        if (null !== $this->draftSqlStart) {
            $res['DraftSqlStart'] = $this->draftSqlStart;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->recoveryMode) {
            $res['RecoveryMode'] = $this->recoveryMode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['DraftSqlStart'])) {
            $model->draftSqlStart = $map['DraftSqlStart'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['RecoveryMode'])) {
            $model->recoveryMode = $map['RecoveryMode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
