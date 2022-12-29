<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\ListTagResourcesResponseBody\tagResources;

use AlibabaCloud\Tea\Model;

class tagResource extends Model
{
    /**
     * @description The ID of the resource. It is the ID of the ApsaraDB for MongoDB instance.
     *
     * @example dds-bp17e7a04960****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource type. The return value is fixed to **ALIYUN: KVSTORE: INSTANCE**, indicating an ApsaraDB for MongoDB instance.
     *
     * @example ALIYUN::DDS::INSTANCE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The key of the tag.
     *
     * @example Environment
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The value of the tag.
     *
     * @example dev
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
