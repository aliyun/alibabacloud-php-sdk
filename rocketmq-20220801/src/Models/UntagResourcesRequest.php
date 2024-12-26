<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description Whether to delete all tags.
     *
     * @example true
     *
     * @var bool
     */
    public $all;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource IDs, in the JSON format.
     *
     * This parameter is required.
     * @example rmq-cn-pe3355cs707
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of resource.
     *
     * Set this parameter to **instance**. The value of this parameter cannot be changed.
     *
     * This parameter is required.
     * @example instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The keys of tags.
     *
     * @example ["key1", "key2"]
     *
     * @var string
     */
    public $tagKey;
    protected $_name = [
        'all'          => 'all',
        'regionId'     => 'regionId',
        'resourceId'   => 'resourceId',
        'resourceType' => 'resourceType',
        'tagKey'       => 'tagKey',
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
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKey) {
            $res['tagKey'] = $this->tagKey;
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
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['tagKey'])) {
            $model->tagKey = $map['tagKey'];
        }

        return $model;
    }
}
