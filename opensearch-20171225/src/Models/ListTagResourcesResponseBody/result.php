<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListTagResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The ID of the resource.
     *
     * @example 54041
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource type.
     *
     * @example hostGroup
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The key of the tag.
     *
     * @example GENIE_FUNCTION
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The value of the tag.
     *
     * @example ALLOW
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'resourceId'   => 'resourceId',
        'resourceType' => 'resourceType',
        'tagKey'       => 'tagKey',
        'tagValue'     => 'tagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKey) {
            $res['tagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['tagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['tagKey'])) {
            $model->tagKey = $map['tagKey'];
        }
        if (isset($map['tagValue'])) {
            $model->tagValue = $map['tagValue'];
        }

        return $model;
    }
}
