<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UnTagResourcesRequest extends Model
{
    /**
     * @description 是否删除所有标签，默认为 false，表示仅删除 tags 列表中的标签项。值为 true 时删除资源上绑定的所有标签。
     *
     * @var bool
     */
    public $all;

    /**
     * @description 资源的 id 列表，可以一次为多个同类型资源删除相同的标签。当 all 为 false 时生效。
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description 资源的类型。目前取值范围 ： project。
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description 标签 key 列表。当 all 为 false 时，仅删除列表中的标签。
     *
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'all'          => 'all',
        'resourceId'   => 'resourceId',
        'resourceType' => 'resourceType',
        'tags'         => 'tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['all'] = $this->all;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnTagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['all'])) {
            $model->all = $map['all'];
        }
        if (isset($map['resourceId'])) {
            if (!empty($map['resourceId'])) {
                $model->resourceId = $map['resourceId'];
            }
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = $map['tags'];
            }
        }

        return $model;
    }
}
