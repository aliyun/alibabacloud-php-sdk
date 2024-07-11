<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeTagResourcesResponseBody\tagResources;

use AlibabaCloud\Tea\Model;

class tagResource extends Model
{
    /**
     * @description The ID of the Anti-DDoS Proxy (Chinese Mainland) instance.
     *
     * @example ddoscoo-cn-zz121ogz****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource type. The value is fixed as **INSTANCE**, which indicates an Anti-DDoS Proxy instance.
     *
     * @example INSTANCE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The key of the tag that is added to the Anti-DDoS Proxy (Chinese Mainland) instance.
     *
     * @example testvalue
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The value of the tag that is added to the Anti-DDoS Proxy (Chinese Mainland) instance.
     *
     * @example testkey
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
