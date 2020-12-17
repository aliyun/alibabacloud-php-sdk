<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesResponseBody\tagResources;

use AlibabaCloud\Tea\Model;

class tagResource extends Model
{
    /**
     * @description 标签key。
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description 标签值。
     *
     * @var string
     */
    public $tagValue;

    /**
     * @description 资源ID。
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description 资源类型。
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'tagKey'       => 'tag_key',
        'tagValue'     => 'tag_value',
        'resourceId'   => 'resource_id',
        'resourceType' => 'resource_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['tag_key'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['tag_value'] = $this->tagValue;
        }
        if (null !== $this->resourceId) {
            $res['resource_id'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resource_type'] = $this->resourceType;
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
        if (isset($map['tag_key'])) {
            $model->tagKey = $map['tag_key'];
        }
        if (isset($map['tag_value'])) {
            $model->tagValue = $map['tag_value'];
        }
        if (isset($map['resource_id'])) {
            $model->resourceId = $map['resource_id'];
        }
        if (isset($map['resource_type'])) {
            $model->resourceType = $map['resource_type'];
        }

        return $model;
    }
}
