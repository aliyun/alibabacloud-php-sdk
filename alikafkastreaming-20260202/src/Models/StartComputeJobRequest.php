<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models;

use AlibabaCloud\Dara\Model;

class StartComputeJobRequest extends Model
{
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
        'cuLimit' => 'CuLimit',
        'cuReserved' => 'CuReserved',
        'draftSql' => 'DraftSql',
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
