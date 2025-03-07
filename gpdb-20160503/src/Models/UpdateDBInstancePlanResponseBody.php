<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class UpdateDBInstancePlanResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The error message returned.
     *
     * This parameter is returned only when the operation fails.
     * @example ****
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the plan.
     *
     * @example 1234
     *
     * @var string
     */
    public $planId;

    /**
     * @description The ID of the request.
     *
     * @example 34b32a0a-08ef-4a87-b6be-cdd9f56fc3ad
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The state of the operation.
     *
     * If the operation is successful, **success** is returned. If the operation fails, this parameter is not returned.
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'errorMessage' => 'ErrorMessage',
        'planId'       => 'PlanId',
        'requestId'    => 'RequestId',
        'status'       => 'Status',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDBInstancePlanResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
