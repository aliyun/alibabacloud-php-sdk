<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute;

use AlibabaCloud\Tea\Model;

class serverlessConfig extends Model
{
    /**
     * @description Indicates whether the automatic start and stop feature is enabled for the serverless instance. Valid values:
     *
     *   **true**: The feature is enabled.
     *   **false** (default): The feature is disabled.
     *
     * >  After the automatic suspension feature is enabled, if no connections to the instance are established within 10 minutes, the instance is suspended. After a connection to the instance is established, the instance is automatically resumed.
     * @example true
     *
     * @var bool
     */
    public $autoPause;

    /**
     * @description The maximum number of RCUs.
     *
     * @example 8
     *
     * @var float
     */
    public $scaleMax;

    /**
     * @description The minimum number of RDS Capacity Units (RCUs).
     *
     * @example 0.5
     *
     * @var float
     */
    public $scaleMin;

    /**
     * @description Indicates whether the forced scaling feature is enabled for the serverless instance.
     *
     *   **true**: The feature is enabled.
     *   **false** (default): The feature is disabled.
     *
     * >  In most cases, ApsaraDB RDS automatically scales in or out the RCUs of a serverless instance based on business requirements in real time. In rare cases, the scaling does not take effect in real time. You can enable the forced scaling feature to forcefully scales in or out the RCUs of the instance.
     * @example false
     *
     * @var bool
     */
    public $switchForce;
    protected $_name = [
        'autoPause'   => 'AutoPause',
        'scaleMax'    => 'ScaleMax',
        'scaleMin'    => 'ScaleMin',
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
        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }
        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
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
        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }
        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }
        if (isset($map['SwitchForce'])) {
            $model->switchForce = $map['SwitchForce'];
        }

        return $model;
    }
}
