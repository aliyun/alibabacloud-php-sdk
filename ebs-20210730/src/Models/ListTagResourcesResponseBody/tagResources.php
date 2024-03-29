<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\ListTagResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class tagResources extends Model
{
    /**
     * @description The ID of the resource.
     *
     * @example pair-cn-c4d2t7f****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource. Valid values:
     *
     *   dedicatedblockstoragecluster: dedicated block storage cluster
     *   diskreplicapair: replication pair
     *   diskreplicagroup: replication pair-consistent group
     *
     * @example pair
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tag key of the resource.
     *
     * @example TestKey
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The tag value of the resource.
     *
     * @example TestValue
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
     * @return tagResources
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
