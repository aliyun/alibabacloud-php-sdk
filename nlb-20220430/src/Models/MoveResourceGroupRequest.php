<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\Tea\Model;

class MoveResourceGroupRequest extends Model
{
    /**
     * @description The ID of the new resource group.
     *
     * This parameter is required.
     * @example rg-aekzjcnrv3vvqhq
     *
     * @var string
     */
    public $newResourceGroupId;

    /**
     * @description The region ID of the NLB instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the bastion host for which you want to change the resource group.
     *
     * This parameter is required.
     * @example nlb-nrnrxwd15en27r****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource. Valid values:
     *
     *   **loadbalancer**: a Network Load Balancer (NLB) instance
     *   **securitypolicy**: a security policy
     *   **servergroup**: a server group
     *
     * This parameter is required.
     * @example loadbalancer
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'newResourceGroupId' => 'NewResourceGroupId',
        'regionId'           => 'RegionId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
