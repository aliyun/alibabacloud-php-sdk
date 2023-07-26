<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class SetDBInstancePlanStatusRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * >  You can call the [DescribeDBInstances](~~86911~~) operation to query the details of all AnalyticDB for PostgreSQL instances in a specific region, including instance IDs.
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
     * >  You can call the [DescribeDBInstancePlans](~~449398~~) operation to query the details of plans, including plan IDs.
     * @example 1234
     *
     * @var string
     */
    public $planId;

    /**
     * @description Specifies whether to enable or disable the plan. Valid values:
     *
     *   **disable**: disables the plan.
     *   **enable**: enables the plan.
     *
     * @example disable
     *
     * @var string
     */
    public $planStatus;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'ownerId'      => 'OwnerId',
        'planId'       => 'PlanId',
        'planStatus'   => 'PlanStatus',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->planStatus) {
            $res['PlanStatus'] = $this->planStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDBInstancePlanStatusRequest
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
        if (isset($map['PlanStatus'])) {
            $model->planStatus = $map['PlanStatus'];
        }

        return $model;
    }
}
