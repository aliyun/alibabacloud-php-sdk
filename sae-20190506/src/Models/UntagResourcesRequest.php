<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description false
     *
     * @example false
     *
     * @var bool
     */
    public $deleteAll;

    /**
     * @description cn-beijing
     *
     * This parameter is required.
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description ["d42921c4-5433-4abd-8075-0e536f8b\\*\\*\\*\\*"]
     *
     * This parameter is required.
     * @example ["d42921c4-5433-4abd-8075-0e536f8b****"]
     *
     * @var string
     */
    public $resourceIds;

    /**
     * @description application
     *
     * This parameter is required.
     * @example application
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description ["k1","k2"]
     *
     * @example ["k1","k2"]
     *
     * @var string
     */
    public $tagKeys;
    protected $_name = [
        'deleteAll'    => 'DeleteAll',
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
        if (null !== $this->deleteAll) {
            $res['DeleteAll'] = $this->deleteAll;
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
        if (isset($map['DeleteAll'])) {
            $model->deleteAll = $map['DeleteAll'];
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
