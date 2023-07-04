<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateNetworkAclRequest;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The region ID of the network ACL. You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     *
     * @example vsw-bp1de348lntdw****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The ID of the network ACL that you want to disassociate from a resource.
     *
     * @example VSwitch
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
