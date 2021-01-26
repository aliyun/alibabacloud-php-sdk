<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description 资源所属的地域ID
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 资源ID。数组长度取值范围为：1~50
     *
     * @var string[]
     */
    public $resourceIds;

    /**
     * @description 资源类型定义。取值范围： 只支持CLUSTER这一种资源类型
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description 资源的标签键。N的取值范围：1~20
     *
     * @var string[]
     */
    public $tagKeys;
    protected $_name = [
        'regionId'     => 'region_id',
        'resourceIds'  => 'resource_ids',
        'resourceType' => 'resource_type',
        'tagKeys'      => 'tag_keys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }
        if (null !== $this->resourceIds) {
            $res['resource_ids'] = $this->resourceIds;
        }
        if (null !== $this->resourceType) {
            $res['resource_type'] = $this->resourceType;
        }
        if (null !== $this->tagKeys) {
            $res['tag_keys'] = $this->tagKeys;
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
        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }
        if (isset($map['resource_ids'])) {
            if (!empty($map['resource_ids'])) {
                $model->resourceIds = $map['resource_ids'];
            }
        }
        if (isset($map['resource_type'])) {
            $model->resourceType = $map['resource_type'];
        }
        if (isset($map['tag_keys'])) {
            if (!empty($map['tag_keys'])) {
                $model->tagKeys = $map['tag_keys'];
            }
        }

        return $model;
    }
}
