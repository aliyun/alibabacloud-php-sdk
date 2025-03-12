<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description Specifies whether to remove all tags from the resource. Valid values:
     *
     *   true: remove all tags from the resources.
     *   false (default): does not remove all tags from the resources.
     *
     * > This parameter takes effect only when TagKey.N is not set in the request.
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @description The IDs of resources.
     *
     * > You must specify only one of the following parameters: ResourceId and ResourcePrincipalName.
     * @example UntagResources
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The names of resources.
     *
     * > You must specify only one of the following parameters: ResourceId and ResourcePrincipalName.
     * @var string[]
     */
    public $resourcePrincipalName;

    /**
     * @description The type of the resource. Valid value:
     *
     *   user: a RAM user
     *
     * @example user
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tag keys of resources.
     *
     * Valid values of N: 1 to 20. N must be consecutive.
     * @var string[]
     */
    public $tagKey;
    protected $_name = [
        'all'                   => 'All',
        'resourceId'            => 'ResourceId',
        'resourcePrincipalName' => 'ResourcePrincipalName',
        'resourceType'          => 'ResourceType',
        'tagKey'                => 'TagKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourcePrincipalName) {
            $res['ResourcePrincipalName'] = $this->resourcePrincipalName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourcePrincipalName'])) {
            if (!empty($map['ResourcePrincipalName'])) {
                $model->resourcePrincipalName = $map['ResourcePrincipalName'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKey'])) {
            if (!empty($map['TagKey'])) {
                $model->tagKey = $map['TagKey'];
            }
        }

        return $model;
    }
}
