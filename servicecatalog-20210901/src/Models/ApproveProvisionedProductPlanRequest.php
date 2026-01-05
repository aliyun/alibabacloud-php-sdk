<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ApproveProvisionedProductPlanRequest extends Model
{
    /**
     * @var string
     */
    public $approvalAction;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $planId;
    protected $_name = [
        'approvalAction' => 'ApprovalAction',
        'comment' => 'Comment',
        'planId' => 'PlanId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
