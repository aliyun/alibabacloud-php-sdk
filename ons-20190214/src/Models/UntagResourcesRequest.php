<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description Specifies whether to remove all tags that are attached to the specified resource. This parameter takes effect only when the **TagKey.N** parameter is not configured. Default value: **false**.
     *
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @description This parameter is required when you detach tags from a topic or a group.
     *
     * @example MQ_INST_188077086902****_BX4jvZZG
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The list of resource IDs.
     *
     * @example TopicA
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The type of the resources from which you want to detach tags. Valid values:
     *
     *   **INSTANCE**
     *   **TOPIC**
     *   **GROUP**
     *
     * @example TOPIC
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tag keys of the resource.
     *
     * @example CartService
     *
     * @var string[]
     */
    public $tagKey;
    protected $_name = [
        'all'          => 'All',
        'instanceId'   => 'InstanceId',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tagKey'       => 'TagKey',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKey'])) {
            if (!empty($map['TagKey'])) {
                $model->tagKey = $map['TagKey'];
            }
        }

        return $model;
    }
}
