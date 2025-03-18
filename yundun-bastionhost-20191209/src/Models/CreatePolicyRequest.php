<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class CreatePolicyRequest extends Model
{
    /**
     * @description The remarks of the control policy. The remarks can be up to 500 characters in length.
     *
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the bastion host for which you want to create a control policy.
     *
     * > You can call the [DescribeInstances](https://help.aliyun.com/document_detail/153281.html) operation to query the ID of the bastion host.
     *
     * This parameter is required.
     *
     * @example bastionhost-cn-20p364c1w0g
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the control policy. The name can be up to 128 characters in length.
     *
     * This parameter is required.
     *
     * @example policytest
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The priority of the control policy.
     *
     *   Valid values: 1 to 100. The default value is 1, which indicates the highest priority.
     *   You can configure the same priority for different control policies. If multiple control policies have the same priority, the control policy that is created at the latest point in time has the highest priority. If a command control policy and a command approval policy contain the same commands, the commands are prioritized in descending order: reject, allow, and approve. In access control policies, a blacklist has a higher priority than a whitelist.
     *
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @description The region ID of the bastion host for which you want to create a control policy.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'comment' => 'Comment',
        'instanceId' => 'InstanceId',
        'policyName' => 'PolicyName',
        'priority' => 'Priority',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
     * @return CreatePolicyRequest
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
