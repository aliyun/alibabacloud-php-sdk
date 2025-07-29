<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\management;

use AlibabaCloud\Tea\Model;

class autoRepairPolicy extends Model
{
    /**
     * @var bool
     */
    public $approvalRequired;

    /**
     * @description Whether to allow restarting nodes.
     *
     * @example true
     *
     * @var bool
     */
    public $restartNode;
    protected $_name = [
        'approvalRequired' => 'approval_required',
        'restartNode' => 'restart_node',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvalRequired) {
            $res['approval_required'] = $this->approvalRequired;
        }
        if (null !== $this->restartNode) {
            $res['restart_node'] = $this->restartNode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoRepairPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['approval_required'])) {
            $model->approvalRequired = $map['approval_required'];
        }
        if (isset($map['restart_node'])) {
            $model->restartNode = $map['restart_node'];
        }

        return $model;
    }
}
