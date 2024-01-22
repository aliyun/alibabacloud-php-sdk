<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ListTagResourcesRequest extends Model
{
    /**
     * @description A2RN
     *
     * @example A2RN
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description cn-beijing
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description \["d42921c4-5433-4abd-8075-0e536f8b\*\*\*\*"]
     *
     * @example ["d42921c4-5433-4abd-8075-0e536f8b****"]
     *
     * @var string
     */
    public $resourceIds;

    /**
     * @description application
     *
     * @example application
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description \[{"key":"k1","value":"v1"}]
     *
     * @example [{"key":"k1","value":"v1"}]
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'nextToken'    => 'NextToken',
        'regionId'     => 'RegionId',
        'resourceIds'  => 'ResourceIds',
        'resourceType' => 'ResourceType',
        'tags'         => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
