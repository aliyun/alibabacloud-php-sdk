<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\CloneDBInstanceRequest;

use AlibabaCloud\Tea\Model;

class serverlessConfig extends Model
{
    /**
     * @description Specifies whether to enable the automatic start and stop feature for the serverless ApsaraDB RDS for MySQL instance. After the automatic start and stop feature is enabled, if no connections to the instance are established within 10 minutes, the instance is suspended. After a connection is established to the instance, the instance is automatically resumed. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * > *   This parameter is supported only for serverless ApsaraDB RDS for MySQL instances.
     * > *   This parameter is available only on the China site (aliyun.com).
     * @example true
     *
     * @var bool
     */
    public $autoPause;

    /**
     * @description The maximum number of RDS Capacity Units (RCUs). Valid values:
     *
     *   Serverless ApsaraDB RDS for MySQL instances: **1 to 8**
     *   Serverless ApsaraDB RDS for SQL Server instances: **2 to 8**
     *   Serverless ApsaraDB RDS for PostgreSQL instances: **1 to 12**
     *
     * >
     *
     *   The value of this parameter must be greater than or equal to the value of **MinCapacity** and can be specified only to an **integer**.
     *
     *   This parameter is available only on the China site (aliyun.com).
     *
     * @example 8
     *
     * @var float
     */
    public $maxCapacity;

    /**
     * @description The minimum number of RCUs. Valid values:
     *
     *   Serverless ApsaraDB RDS for MySQL instances: **0.5 to 8**.
     *   Serverless ApsaraDB RDS for SQL Server instances: **2 to 8**. Only integers are supported.
     *   Serverless ApsaraDB RDS for PostgreSQL instances: **0.5 to 12**.
     *
     * >
     *
     *   The value of this parameter must be less than or equal to the value of **MaxCapacity**.
     *
     *   This parameter is available only on the China site (aliyun.com).
     *
     * @example 0.5
     *
     * @var float
     */
    public $minCapacity;

    /**
     * @description Specifies whether to enable the forced scaling feature for the serverless ApsaraDB RDS for MySQL instance. In most cases, ApsaraDB RDS automatically scales in or out the RCUs of a serverless instance based on business requirements in real time. In rare cases, the scaling does not take effect in real time. You can enable the forced scaling feature to forcefully scales in or out the RCUs of the instance. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * >
     *
     *   This parameter is supported only for serverless ApsaraDB RDS for MySQL instances.
     *
     *   This parameter is available only on the China site (aliyun.com).
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
