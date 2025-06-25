<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyApprovalConfigRequest\approvalConfig;

class SetPolicyApprovalConfigRequest extends Model
{
    /**
     * @var approvalConfig
     */
    public $approvalConfig;

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
        'approvalConfig' => 'ApprovalConfig',
        'instanceId' => 'InstanceId',
        'policyId' => 'PolicyId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (null !== $this->approvalConfig) {
            $this->approvalConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalConfig) {
            $res['ApprovalConfig'] = null !== $this->approvalConfig ? $this->approvalConfig->toArray($noStream) : $this->approvalConfig;
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
            $model->approvalConfig = approvalConfig::fromMap($map['ApprovalConfig']);
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
