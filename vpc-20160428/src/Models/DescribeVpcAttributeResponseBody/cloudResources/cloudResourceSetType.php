<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\cloudResources;

use AlibabaCloud\Tea\Model;

class cloudResourceSetType extends Model
{
    /**
     * @description The number of resources deployed in the VPC.
     *
     * @example 1
     *
     * @var int
     */
    public $resourceCount;

    /**
     * @description The type of resources deployed in the VPC. Valid values:
     *
     * - **VSwitch**: vSwitches
     * - **VRouter**: vRouters
     * - **RouteTable**: route tables
     * @example VSwitch
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceCount' => 'ResourceCount',
        'resourceType'  => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceCount) {
            $res['ResourceCount'] = $this->resourceCount;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudResourceSetType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceCount'])) {
            $model->resourceCount = $map['ResourceCount'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
