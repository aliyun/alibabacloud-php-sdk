<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ApprovePermissionApplyOrderRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $approveAction;

    /**
     * @example agree
     *
     * @var string
     */
    public $approveComment;

    /**
     * @example 48f36729-05f9-4a40-9286-933fd940f30a
     *
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
