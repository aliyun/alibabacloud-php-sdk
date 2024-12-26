<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class ListTagResourcesRequest extends Model
{
    /**
     * @description The position from which the next query starts.
     *
     * @example d09e2b63e1b12d905b7080ff70
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group ID.
     *
     * @example rg-acfmx7caj******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description List of resource IDs, in JSON format.
     *
     * @example ["rmq-cn-pe334n08h08"]
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description Resource type.
     *
     * This parameter is required.
     * @example instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description List of tags, in JSON format.
     *
     * @example [{"key": "rmq-test", "value": "test"}]
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'nextToken'       => 'nextToken',
        'regionId'        => 'regionId',
        'resourceGroupId' => 'resourceGroupId',
        'resourceId'      => 'resourceId',
        'resourceType'    => 'resourceType',
        'tag'             => 'tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
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
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }

        return $model;
    }
}
