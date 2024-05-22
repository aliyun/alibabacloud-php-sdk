<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\UnassociateNetworkAclRequest;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The ID of the resource that you want to disassociate.
     *
     * This parameter is required.
     * @example n-5***
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource that you want to disassociate. Valid values:
     *
     *   Network
     *
     * This parameter is required.
     * @example Network
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
