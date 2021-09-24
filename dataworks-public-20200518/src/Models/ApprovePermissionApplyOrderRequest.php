<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ApprovePermissionApplyOrderRequest extends Model
{
    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $approveComment;

    /**
     * @var int
     */
    public $approveAction;
    protected $_name = [
        'flowId'         => 'FlowId',
        'approveComment' => 'ApproveComment',
        'approveAction'  => 'ApproveAction',
    ];

    public function validate()
    {
        Model::validateRequired('flowId', $this->flowId, true);
        Model::validateRequired('approveComment', $this->approveComment, true);
        Model::validateRequired('approveAction', $this->approveAction, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->approveComment) {
            $res['ApproveComment'] = $this->approveComment;
        }
        if (null !== $this->approveAction) {
            $res['ApproveAction'] = $this->approveAction;
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
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['ApproveComment'])) {
            $model->approveComment = $map['ApproveComment'];
        }
        if (isset($map['ApproveAction'])) {
            $model->approveAction = $map['ApproveAction'];
        }

        return $model;
    }
}
