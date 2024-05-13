<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description Specifies whether to remove all custom labels. This parameter takes effect only when `tag_keys` is left empty. Valid values:
     *
     *   `true`: Remove all custom labels.
     *   `false`: Do not remove all custom labels.
     *
     * @example true
     *
     * @var bool
     */
    public $all;

    /**
     * @description The region ID of the resources.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The list of resource IDs.
     *
     * This parameter is required.
     * @var string[]
     */
    public $resourceIds;

    /**
     * @description The type of resource. Set the value to `CLUSTER`.
     *
     * This parameter is required.
     * @example CLUSTER
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The list of keys of the labels that you want to remove.
     *
     * This parameter is required.
     * @var string[]
     */
    public $tagKeys;
    protected $_name = [
        'all'          => 'all',
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
        if (null !== $this->all) {
            $res['all'] = $this->all;
        }
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
        if (isset($map['all'])) {
            $model->all = $map['all'];
        }
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
