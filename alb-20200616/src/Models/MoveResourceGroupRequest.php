<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class MoveResourceGroupRequest extends Model
{
    /**
     * @description The ID of the resource group to which you want to move the resource.
     *
     * > You can use resource groups to manage resources owned by your Alibaba Cloud account. Resource groups simplify resource and permission management in your Alibaba Cloud account. For more information, see [What is resource management?](~~94475~~)
     * @example rg-9gLOoK****
     *
     * @var string
     */
    public $newResourceGroupId;

    /**
     * @description The resource ID.
     *
     * @example acl-hp34s2h0xx1ht4nwo****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource. Valid values:
     *
     *   **loadbalancer**: Application Load Balancer (ALB) instance
     *   **acl**: access control list (ACL)
     *   **securitypolicy**: security policy
     *   **servergroup**: server group
     *
     * @example ACL
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'newResourceGroupId' => 'NewResourceGroupId',
        'resourceId'         => 'ResourceId',
        'resourceType'       => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newResourceGroupId) {
            $res['NewResourceGroupId'] = $this->newResourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewResourceGroupId'])) {
            $model->newResourceGroupId = $map['NewResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
