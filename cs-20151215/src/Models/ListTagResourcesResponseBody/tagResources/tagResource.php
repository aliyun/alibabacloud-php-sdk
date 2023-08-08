<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesResponseBody\tagResources;

use AlibabaCloud\Tea\Model;

class tagResource extends Model
{
    /**
     * @description The ID of the resource.
     *
     * @example i-xxx
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource. For more information, see [Labels](~~110425~~).
     *
     * @example CLUSTER
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The key of the label.
     *
     * @example ack.aliyun.com
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The value of the label.
     *
     * @example c71cf3d796c374bf48644482cb0c3****
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'resourceId'   => 'resource_id',
        'resourceType' => 'resource_type',
        'tagKey'       => 'tag_key',
        'tagValue'     => 'tag_value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['resource_id'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resource_type'] = $this->resourceType;
        }
        if (null !== $this->tagKey) {
            $res['tag_key'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['tag_value'] = $this->tagValue;
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
        if (isset($map['resource_id'])) {
            $model->resourceId = $map['resource_id'];
        }
        if (isset($map['resource_type'])) {
            $model->resourceType = $map['resource_type'];
        }
        if (isset($map['tag_key'])) {
            $model->tagKey = $map['tag_key'];
        }
        if (isset($map['tag_value'])) {
            $model->tagValue = $map['tag_value'];
        }

        return $model;
    }
}
