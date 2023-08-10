<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\ListTagResourcesResponseBody\tagResources;

use AlibabaCloud\Tea\Model;

class tagResource extends Model
{
    /**
     * @description The ID of the DTS instance.
     *
     * @example dtsntk10k6r12v****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource type. Valid value: **ALIYUN::DTS::INSTANCE**.
     *
     * @example ALIYUN::DTS::INSTANCE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tag key.
     *
     * @example testkey1
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The tag value that corresponds to the tag key.
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
