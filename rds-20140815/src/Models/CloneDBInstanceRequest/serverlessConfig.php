<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\CloneDBInstanceRequest;

use AlibabaCloud\Tea\Model;

class serverlessConfig extends Model
{
    /**
     * @description Specifies whether to enable the automatic start and stop feature for the serverless instance. After the automatic start and stop feature is enabled, if no connections to the instance are established within 10 minutes, the instance is suspended. After a connection is established to the instance, the instance is automatically resumed. Valid values:
     *
     *   true: enables the feature.
     *   false (default): disables the feature.
     *
     * @example true
     *
     * @var bool
     */
    public $autoPause;

    /**
     * @description The maximum number of RDS Capacity Units (RCUs).
     *
     * @example 8
     *
     * @var float
     */
    public $maxCapacity;

    /**
     * @description The minimum number of RCUs.
     *
     * @example 0.5
     *
     * @var float
     */
    public $minCapacity;

    /**
     * @description Specifies whether to enable the forced scaling feature for the serverless instance. In most cases, ApsaraDB RDS automatically scales in or out the RCUs of a serverless instance based on business requirements in real time. In rare cases, the scaling does not take effect in real time. You can enable the forced scaling feature to forcefully scales in or out the RCUs of the instance. Valid values:
     *
     *   true: enables the feature.
     *   false (default): disables the feature.
     *
     * @example false
     *
     * @var bool
     */
    public $switchForce;
    protected $_name = [
        'autoPause'   => 'AutoPause',
        'maxCapacity' => 'MaxCapacity',
        'minCapacity' => 'MinCapacity',
        'switchForce' => 'SwitchForce',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPause) {
            $res['AutoPause'] = $this->autoPause;
        }
        if (null !== $this->maxCapacity) {
            $res['MaxCapacity'] = $this->maxCapacity;
        }
        if (null !== $this->minCapacity) {
            $res['MinCapacity'] = $this->minCapacity;
        }
        if (null !== $this->switchForce) {
            $res['SwitchForce'] = $this->switchForce;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverlessConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPause'])) {
            $model->autoPause = $map['AutoPause'];
        }
        if (isset($map['MaxCapacity'])) {
            $model->maxCapacity = $map['MaxCapacity'];
        }
        if (isset($map['MinCapacity'])) {
            $model->minCapacity = $map['MinCapacity'];
        }
        if (isset($map['SwitchForce'])) {
            $model->switchForce = $map['SwitchForce'];
        }

        return $model;
    }
}
