<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @var bool
     */
    public $all;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var mixed[]
     */
    public $resourceIds;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var mixed[]
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
            $model->resourceIds = $map['ResourceIds'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKeys'])) {
            $model->tagKeys = $map['TagKeys'];
        }

        return $model;
    }
}
