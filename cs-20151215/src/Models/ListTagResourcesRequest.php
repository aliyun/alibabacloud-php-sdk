<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class ListTagResourcesRequest extends Model
{
    /**
     * @description 下一个版本。
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 资源ID。
     *
     * @var string
     */
    public $resourceIds;

    /**
     * @description 按标签查找。
     *
     * @var string
     */
    public $tags;

    /**
     * @description 资源类型，例如：SLB。
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'nextToken'    => 'next_token',
        'resourceIds'  => 'resource_ids',
        'tags'         => 'tags',
        'resourceType' => 'resource_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['next_token'] = $this->nextToken;
        }
        if (null !== $this->resourceIds) {
            $res['resource_ids'] = $this->resourceIds;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->resourceType) {
            $res['resource_type'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['next_token'])) {
            $model->nextToken = $map['next_token'];
        }
        if (isset($map['resource_ids'])) {
            $model->resourceIds = $map['resource_ids'];
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }
        if (isset($map['resource_type'])) {
            $model->resourceType = $map['resource_type'];
        }

        return $model;
    }
}
