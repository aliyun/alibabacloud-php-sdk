<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\planDetail\approvalDetail;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\planDetail\approvalDetail\operationRecords\operator;
use AlibabaCloud\Tea\Model;

class operationRecords extends Model
{
    /**
     * @description The operation that is performed by the operator on the plan. Valid values:
     *
     *   Submit: submits the plan.
     *   Cancel: cancels the plan.
     *   Approve: approves the plan.
     *   reject: rejectes the plan.
     *
     * @example Approve
     *
     * @var string
     */
    public $approvalAction;

    /**
     * @description The review comment of the operator.
     *
     * @example Agreed.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The time when the operation was performed.
     *
     * @example 2022-03-22T05:56:14Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The operator who performs operations on the plan.
     *
     * @var operator
     */
    public $operator;
    protected $_name = [
        'approvalAction' => 'ApprovalAction',
        'comment'        => 'Comment',
        'createTime'     => 'CreateTime',
        'operator'       => 'Operator',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->operator) {
            $res['Operator'] = null !== $this->operator ? $this->operator->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationRecords
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Operator'])) {
            $model->operator = operator::fromMap($map['Operator']);
        }

        return $model;
    }
}
