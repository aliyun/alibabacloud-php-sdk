<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DeleteDBInstancePlanRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * >  You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/86911.html) operation to query the details of all AnalyticDB for PostgreSQL instances in a specific region, including instance IDs.
     *
     * This parameter is required.
     *
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the plan.
     *
     * >  You can call the [DescribeDBInstancePlans](https://help.aliyun.com/document_detail/449398.html) operation to query the details of plans, including plan IDs.
     *
     * This parameter is required.
     *
     * @example 1234
     *
     * @var string
     */
    public $planId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'ownerId' => 'OwnerId',
        'planId' => 'PlanId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDBInstancePlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }

        return $model;
    }
}
