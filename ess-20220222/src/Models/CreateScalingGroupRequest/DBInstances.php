<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest;

use AlibabaCloud\Tea\Model;

class DBInstances extends Model
{
    /**
     * @description The mode in which you want to attach the database to the scaling group. Valid values:
     *
     *   SecurityIp: the mode in which Auto Scaling automatically adds the private IP addresses of ECS instances to the IP address whitelist of the database during scale-out events. You can set the value to SecurityIp only if you set Type to RDS.
     *   SecurityGroup: the mode in which Auto Scaling adds the security group of the applied scaling configuration to the security group whitelist of the database. This setting allows ECS instances created from the scaling configuration to access the database.
     *
     * @example SecurityIp
     *
     * @var string
     */
    public $attachMode;

    /**
     * @description The database ID.
     *
     * @example rm-m5eqju85s45mu0***
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The database type. Valid values:
     *
     *   RDS
     *   Redis
     *   MongoDB
     *
     * Default value: RDS.
     * @example RDS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'attachMode'   => 'AttachMode',
        'DBInstanceId' => 'DBInstanceId',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachMode) {
            $res['AttachMode'] = $this->attachMode;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachMode'])) {
            $model->attachMode = $map['AttachMode'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
