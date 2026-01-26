<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\management;

use AlibabaCloud\Dara\Model;

class autoRepairPolicy extends Model
{
    /**
     * @var bool
     */
    public $approvalRequired;

    /**
     * @var string
     */
    public $autoRepairPolicyId;

    /**
     * @var bool
     */
    public $restartNode;
    protected $_name = [
        'approvalRequired' => 'approval_required',
        'autoRepairPolicyId' => 'auto_repair_policy_id',
        'restartNode' => 'restart_node',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalRequired) {
            $res['approval_required'] = $this->approvalRequired;
        }

        if (null !== $this->autoRepairPolicyId) {
            $res['auto_repair_policy_id'] = $this->autoRepairPolicyId;
        }

        if (null !== $this->restartNode) {
            $res['restart_node'] = $this->restartNode;
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
        if (isset($map['approval_required'])) {
            $model->approvalRequired = $map['approval_required'];
        }

        if (isset($map['auto_repair_policy_id'])) {
            $model->autoRepairPolicyId = $map['auto_repair_policy_id'];
        }

        if (isset($map['restart_node'])) {
            $model->restartNode = $map['restart_node'];
        }

        return $model;
    }
}
