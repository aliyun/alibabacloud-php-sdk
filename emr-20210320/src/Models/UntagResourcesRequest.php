<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description Specifies whether to remove all tags. This parameter is valid only when the **Tagkeys** is empty. Valid values:
     *
     *   true: All the data is deleted.
     *   false: Not all of them are deleted.
     *
     * Default value: false
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @description The ID of the region in which you want to create the instance.
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
     * @example cluster
     *
     * @var string[]
     */
    public $resourceIds;

    /**
     * @description The type of the resource. Set the value to cluster.
     *
     * This parameter is required.
     * @example cluster
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The key of the label. Valid values of N: 1 to 20.
     *
     * @example ["c-b933c5aac8fe****"]
     *
     * @var string[]
     */
    public $tagKeys;
    protected $_name = [
        'all'          => 'All',
        'regionId'     => 'RegionId',
        'resourceIds'  => 'ResourceIds',
        'resourceType' => 'ResourceType',
        'tagKeys'      => 'TagKeys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKeys) {
            $res['TagKeys'] = $this->tagKeys;
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
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = $map['ResourceIds'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKeys'])) {
            if (!empty($map['TagKeys'])) {
                $model->tagKeys = $map['TagKeys'];
            }
        }

        return $model;
    }
}
