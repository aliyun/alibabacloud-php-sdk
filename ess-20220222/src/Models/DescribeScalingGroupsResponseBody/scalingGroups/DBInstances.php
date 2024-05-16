<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups;

use AlibabaCloud\Tea\Model;

class DBInstances extends Model
{
    /**
     * @description The database ID.
     *
     * @example rm-m5eqju85s45mu0***
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The IDs of the security groups added to the security group whitelist of the attached database.
     *
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @description The type of the database. Valid values:
     *
     *   RDS
     *   Redis
     *   MongoDB
     *
     * @example RDS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'DBInstanceId'     => 'DBInstanceId',
        'securityGroupIds' => 'SecurityGroupIds',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
