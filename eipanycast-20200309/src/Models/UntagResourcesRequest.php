<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description The resource ID. You can specify up to 20 resource IDs.
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The resource type. Set the value to **ANYCASTEIPADDRESS**.
     *
     * @example ANYCASTEIPADDRESS
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The key of the tag that you want to remove. You can specify at most 20 tag keys. The tag key cannot be an empty string.
     *
     * A tag key can be up to 128 characters in length. It cannot start with aliyun or acs:, and cannot contain `http://` or `https://`.
     * @var string[]
     */
    public $tagKey;
    protected $_name = [
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tagKey'       => 'TagKey',
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
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
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
