<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBClusterConfigRequest extends Model
{
    /**
     * @var string
     */
    public $configKey;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var bool
     */
    public $parallelOperation;
    /**
     * @var string
     */
    public $parameters;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $switchTimeMode;
    protected $_name = [
        'configKey'         => 'ConfigKey',
        'DBClusterId'       => 'DBClusterId',
        'DBInstanceId'      => 'DBInstanceId',
        'parallelOperation' => 'ParallelOperation',
        'parameters'        => 'Parameters',
        'regionId'          => 'RegionId',
        'switchTimeMode'    => 'SwitchTimeMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configKey) {
            $res['ConfigKey'] = $this->configKey;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->parallelOperation) {
            $res['ParallelOperation'] = $this->parallelOperation;
        }

        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->switchTimeMode) {
            $res['SwitchTimeMode'] = $this->switchTimeMode;
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
        if (isset($map['ConfigKey'])) {
            $model->configKey = $map['ConfigKey'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['ParallelOperation'])) {
            $model->parallelOperation = $map['ParallelOperation'];
        }

        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SwitchTimeMode'])) {
            $model->switchTimeMode = $map['SwitchTimeMode'];
        }

        return $model;
    }
}
