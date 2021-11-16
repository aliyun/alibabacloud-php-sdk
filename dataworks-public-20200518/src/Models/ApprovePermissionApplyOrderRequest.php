<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ApprovePermissionApplyOrderRequest extends Model
{
    /**
     * @var int
     */
    public $approveAction;

    /**
     * @var string
     */
    public $approveComment;

    /**
     * @var string
     */
    public $flowId;
    protected $_name = [
        'approveAction'  => 'ApproveAction',
        'approveComment' => 'ApproveComment',
        'flowId'         => 'FlowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approveAction) {
            $res['ApproveAction'] = $this->approveAction;
        }
        if (null !== $this->approveComment) {
            $res['ApproveComment'] = $this->approveComment;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApprovePermissionApplyOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApproveAction'])) {
            $model->approveAction = $map['ApproveAction'];
        }
        if (isset($map['ApproveComment'])) {
            $model->approveComment = $map['ApproveComment'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        return $model;
    }
}
