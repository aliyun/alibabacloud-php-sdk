<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest;

use AlibabaCloud\Tea\Model;

class nodepoolInfo extends Model
{
    /**
     * @description 节点池名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 资源组ID。
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description 节点池类型，对于边缘节点池来说，类型为"edge"
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name'            => 'name',
        'resourceGroupId' => 'resource_group_id',
        'type'            => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['resource_group_id'] = $this->resourceGroupId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodepoolInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
