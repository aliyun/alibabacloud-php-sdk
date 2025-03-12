<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\TagResourcesRequest\tag;
use AlibabaCloud\Tea\Model;

class TagResourcesRequest extends Model
{
    /**
     * @description The ID of resource N.
     *
     * >  You must specify only one of the following parameters: `ResourceId` and `ResourcePrincipalName`.
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The name of resource N.
     *
     * >  You must specify only one of the following parameters: `ResourceId` and `ResourcePrincipalName`.
     * @example TagResources
     *
     * @var string[]
     */
    public $resourcePrincipalName;

    /**
     * @description The type of the resource. Valid value:
     *
     *   user: a Resource Access Management (RAM) user.
     *
     * @example user
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The key of tag N.
     *
     * Valid values of N: 1 to 20. You cannot specify empty strings as tag keys. The tag key can be up to 128 characters in length. The tag key cannot start with aliyun or acs: and cannot contain `http://` or `https://`.
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'resourceId'            => 'ResourceId',
        'resourcePrincipalName' => 'ResourcePrincipalName',
        'resourceType'          => 'ResourceType',
        'tag'                   => 'Tag',
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
        if (null !== $this->resourcePrincipalName) {
            $res['ResourcePrincipalName'] = $this->resourcePrincipalName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
