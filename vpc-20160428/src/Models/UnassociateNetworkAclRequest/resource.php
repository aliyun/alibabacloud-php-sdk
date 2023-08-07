<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\UnassociateNetworkAclRequest;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The ID of the resource from which you want to disassociate the network ACL.
     *
     * @example vsw-bp1de348lntdw****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource from which you want to disassociate the network ACL. Set the value to **VSwitch**.
     *
     * Valid values of **N**: 0 to 29. You can disassociate a network ACL from at most 30 resources at a time.
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
