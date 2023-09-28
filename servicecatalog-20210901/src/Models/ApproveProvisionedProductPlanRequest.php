<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ApproveProvisionedProductPlanRequest extends Model
{
    /**
     * @description The review action. Valid values:
     *
     *   Approve
     *   Reject
     *
     * @example Approve
     *
     * @var string
     */
    public $approvalAction;

    /**
     * @description The review description.
     *
     * @example Approved. You can create a resource.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the plan.
     *
     * @example plan-bp1jvmdk2k****
     *
     * @var string
     */
    public $planId;
    protected $_name = [
        'approvalAction' => 'ApprovalAction',
        'comment'        => 'Comment',
        'planId'         => 'PlanId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvalAction) {
            $res['ApprovalAction'] = $this->approvalAction;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApproveProvisionedProductPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovalAction'])) {
            $model->approvalAction = $map['ApprovalAction'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }

        return $model;
    }
}
