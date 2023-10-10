<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class TagResourcesRequest extends Model
{
    /**
     * @description The IDs of the resources. You can specify up to 20 IDs in the format of a JSON array.
     *
     * @example ["000e5836-xxxx-xxxx-xxxx-0d6ab2ac4877"]
     *
     * @var string
     */
    public $resourceIds;

    /**
     * @description The region in which the resource resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @description The type of the resource. Valid values:
     *
     *   **application**: Enterprise Distributed Application Service (EDAS) application
     *   **cluster**: EDAS cluster
     *
     * @example application
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The key-value pairs. When you set this parameter, take note of the following limits:
     *
     *   You can add up to 20 tags to a resource.
     *   The tag key cannot start with **aliyun** or **acs:**. It cannot contain **http://** or **https://**.
     *   The tag key or tag value can be up to 128 characters in length, and can contain letters, digits, hyphens (-), commas (,), asterisks (\*), forward slashes (/), question marks (?), and colons (:).
     *   Set this parameter to a JSON array.
     *
     * @example [{"key":"key1","value":"v1"},{"key":"key2","value":"v2"}]
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'resourceIds'      => 'ResourceIds',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType'     => 'ResourceType',
        'tags'             => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['ResourceIds'])) {
            $model->resourceIds = $map['ResourceIds'];
        }
        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
