<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponseBody\accountAttributeItems;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponseBody\accountAttributeItems\accountAttributeItem\attributeValues;
use AlibabaCloud\Tea\Model;

class accountAttributeItem extends Model
{
    /**
     * @description The type of the resource quota in the specified region. Valid values:
     *
     * instance-network-type: available network types
     * max-security-groups: the maximum number of security groups
     * max-elastic-network-interfaces: the maximum number of ENIs
     * max-postpaid-instance-vcpu-count: the maximum number of vCPUs for pay-as-you-go instances
     * max-spot-instance-vcpu-count: the maximum number of vCPUs for preemptible instances
     * used-postpaid-instance-vcpu-count: the number of vCPUs that have been allocated to pay-as-you-go instances
     * used-spot-instance-vcpu-count: the number of vCPUs that have been allocated to preemptible instances
     * max-postpaid-yundisk-capacity: the maximum capacity of pay-as-you-go data disks
     * used-postpaid-yundisk-capacity: the capacity of pay-as-you-go disks that have been created
     * max-dedicated-hosts: the maximum number of dedicated hosts
     * supported-postpaid-instance-types: the instance types of pay-as-you-go I/O optimized instances
     * max-axt-command-count: the maximum number of Cloud Assistant commands
     * max-axt-invocation-daily: the maximum number of Cloud Assistant command executions per day
     * real-name-authentication: whether an account has completed real-name verification
     * max-cloud-assistant-activation-count: the maximum number of activation codes that can be created to use to register managed instances
     *
     * @example max-security-groups
     *
     * @var string
     */
    public $attributeName;

    /**
     * @description The specific values of resource quotas.
     *
     * @var attributeValues
     */
    public $attributeValues;
    protected $_name = [
        'attributeName'   => 'AttributeName',
        'attributeValues' => 'AttributeValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeName) {
            $res['AttributeName'] = $this->attributeName;
        }
        if (null !== $this->attributeValues) {
            $res['AttributeValues'] = null !== $this->attributeValues ? $this->attributeValues->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountAttributeItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeName'])) {
            $model->attributeName = $map['AttributeName'];
        }
        if (isset($map['AttributeValues'])) {
            $model->attributeValues = attributeValues::fromMap($map['AttributeValues']);
        }

        return $model;
    }
}
