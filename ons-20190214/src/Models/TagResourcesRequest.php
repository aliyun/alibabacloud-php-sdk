<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\SDK\Ons\V20190214\Models\TagResourcesRequest\tag;
use AlibabaCloud\Tea\Model;

class TagResourcesRequest extends Model
{
    /**
     * @description The ID of the Message Queue for Apache RocketMQ instance which contains the resource to which you want to attach tags.
     *
     * > : This parameter is required when you attach tags to a topic or a group.
     * @example MQ_INST_188077086902****_BXSuW61e
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
     * @description The type of the resource to which you want to attach tags. Valid values:
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
     * @description The list of tags that are attached to the resources.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tag'          => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
