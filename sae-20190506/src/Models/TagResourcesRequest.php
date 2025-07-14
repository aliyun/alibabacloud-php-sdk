<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class TagResourcesRequest extends Model
{
    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of resources. Separate multiple resource IDs with comma (,). This parameter is required if you do not specify the **Tags** parameter.
     *
     * This parameter is required.
     *
     * @example ["d42921c4-5433-4abd-8075-0e536f8b****"]
     *
     * @var string
     */
    public $resourceIds;

    /**
     * @description The type of the resource. Set the value to `application`.
     *
     * This parameter is required.
     *
     * @example application
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tag in the format of a key-value pair. This parameter is required if you do not specify the **ResourceIds** parameter. The following parameters are involved:
     *
     *   **key**: the tag key. It cannot exceed 128 characters in length.
     *   **value**: the tag value. It cannot exceed 128 characters in length.
     *
     * Tag keys and tag values are case-sensitive. If you specify multiple tags, the system adds all the tags to the specified resources. Each tag key on a resource can have only one tag value. If you create a tag that has the same key as an existing tag, the value of the existing tag is overwritten.
     *
     * Tag keys and tag values cannot start with `aliyun` or `acs:`, and cannot contain `http://` or `https://`.
     *
     * @example [{"key":"k1","value":"v1"}]
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'regionId' => 'RegionId',
        'resourceIds' => 'ResourceIds',
        'resourceType' => 'ResourceType',
        'tags' => 'Tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceIds'])) {
            $model->resourceIds = $map['ResourceIds'];
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
