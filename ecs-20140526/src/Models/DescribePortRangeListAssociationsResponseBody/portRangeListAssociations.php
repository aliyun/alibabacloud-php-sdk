<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePortRangeListAssociationsResponseBody;

use AlibabaCloud\Tea\Model;

class portRangeListAssociations extends Model
{
    /**
     * @description The ID of the resource.
     *
     * @example sg-2zefu72****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource. Valid value: SecurityGroup.
     *
     * @example SecurityGroup
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
    ];

    public function validate() {}

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
     * @return portRangeListAssociations
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
