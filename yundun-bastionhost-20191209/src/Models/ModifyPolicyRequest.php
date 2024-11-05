<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyPolicyRequest extends Model
{
    /**
     * @description The new remarks of the control policy.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the bastion host to which the control policy to modify belongs.
     *
     * This parameter is required.
     * @example bastionhost-cn-09k1u8mv501
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the control policy that you want to modify.
     *
     * This parameter is required.
     * @example 7
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The new name of the control policy.
     *
     * @example test
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The priority of the modified control policy. Valid values: 1 to 100. The smaller the value, the higher the priority. Default value: 1.
     *
     * @example 3
     *
     * @var string
     */
    public $priority;

    /**
     * @description The region ID of the bastion host to which the control policy to modify belongs.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'comment'    => 'Comment',
        'instanceId' => 'InstanceId',
        'policyId'   => 'PolicyId',
        'policyName' => 'PolicyName',
        'priority'   => 'Priority',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
