<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody\cloudResources;

use AlibabaCloud\Tea\Model;

class cloudResourceSetType extends Model
{
    /**
     * @description The number of resources in the network.
     *
     * @example 3
     *
     * @var int
     */
    public $resourceCount;

    /**
     * @description The resource type. VSwitch.
     *
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
