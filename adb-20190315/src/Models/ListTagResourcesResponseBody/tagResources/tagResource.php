<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\ListTagResourcesResponseBody\tagResources;

use AlibabaCloud\Tea\Model;

class tagResource extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example am-bp1l20nxxxxxxxxxx
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource. A value of cluster indicates an AnalyticDB for MySQL cluster.
     *
     * @example cluster
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The key of the tag.
     *
     * @example testkey1
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The value of the tag.
     *
     * @example testvalue1
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tagKey'       => 'TagKey',
        'tagValue'     => 'TagValue',
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
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagResource
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
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
