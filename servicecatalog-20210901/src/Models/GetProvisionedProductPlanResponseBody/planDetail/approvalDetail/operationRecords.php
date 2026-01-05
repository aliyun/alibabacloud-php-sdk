<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\planDetail\approvalDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponseBody\planDetail\approvalDetail\operationRecords\operator;

class operationRecords extends Model
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
    public $createTime;

    /**
     * @var operator
     */
    public $operator;
    protected $_name = [
        'approvalAction' => 'ApprovalAction',
        'comment' => 'Comment',
        'createTime' => 'CreateTime',
        'operator' => 'Operator',
    ];

    public function validate()
    {
        if (null !== $this->operator) {
            $this->operator->validate();
        }
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

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->operator) {
            $res['Operator'] = null !== $this->operator ? $this->operator->toArray($noStream) : $this->operator;
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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Operator'])) {
            $model->operator = operator::fromMap($map['Operator']);
        }

        return $model;
    }
}
