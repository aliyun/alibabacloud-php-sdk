<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;

class SetPolicyApprovalConfigShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $approvalConfigShrink;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'approvalConfigShrink' => 'ApprovalConfig',
        'instanceId' => 'InstanceId',
        'policyId' => 'PolicyId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalConfigShrink) {
            $res['ApprovalConfig'] = $this->approvalConfigShrink;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ApprovalConfig'])) {
            $model->approvalConfigShrink = $map['ApprovalConfig'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
