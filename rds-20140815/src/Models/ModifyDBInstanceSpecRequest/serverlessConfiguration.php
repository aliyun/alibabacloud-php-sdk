<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceSpecRequest;

use AlibabaCloud\Tea\Model;

class serverlessConfiguration extends Model
{
    /**
     * @description Specifies whether to enable the automatic start and stop feature for the serverless instance. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * >  This parameter is required only for serverless instances that run MySQL and PostgreSQL. After the automatic start and stop feature is enabled, if no connections to the instance are established within 10 minutes, the instance is suspended. After a connection to the instance is established, the instance is resumed.
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
     * >  The value of this parameter must be greater than or equal to the value of **MinCapacity** and can be specified only to an **integer**.
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
     * >  The value of this parameter must be less than or equal to the value of **MaxCapacity**.
     * @example 0.5
     *
     * @var float
     */
    public $minCapacity;

    /**
     * @description Specifies whether to enable the forced scaling feature for the serverless instance.
     *
     *   **true**
     *   **false** (default)
     *
     * >
     *
     *   This parameter is required only for serverless instances that run MySQL and PostgreSQL. If you set this parameter to true, a transient connection that lasts approximately 1 minute occurs during forced scaling. Process with caution.
     *
     *   The RCU scaling for a serverless instance immediately takes effect. In some cases, such as the execution of large transactions, the scaling does not immediately take effect. In this case, you can enable this feature to forcefully scale the RCUs of the instance.
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
     * @return serverlessConfiguration
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
