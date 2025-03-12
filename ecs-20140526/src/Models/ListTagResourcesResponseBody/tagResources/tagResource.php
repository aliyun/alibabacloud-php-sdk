<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ListTagResourcesResponseBody\tagResources;

use AlibabaCloud\Tea\Model;

class tagResource extends Model
{
    /**
     * @description The resource ID.
     *
     * @example i-bp1j6qtvdm8w0z1o****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource type. Valid values:
     *
     *   instance: ECS instance
     *   disk: disk
     *   snapshot: snapshot
     *   image: image
     *   securitygroup: security group
     *   volume: storage volume
     *   eni: ENI
     *   ddh: dedicated host
     *   ddhcluster: dedicated host cluster
     *   keypair: SSH key pair
     *   launchtemplate: launch template
     *   reservedinstance: reserved instance
     *   snapshotpolicy: automatic snapshot policy
     *   elasticityassurance: elasticity assurance
     *   capacityreservation: capacity reservation
     *   command: Cloud Assistant command
     *   invocation: Cloud Assistant command execution result
     *   activation: activation code for a Cloud Assistant managed instance
     *   managedinstance: Cloud Assistant managed instance
     *
     * @example instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tag key of the resource.
     *
     * @example TestKey
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The tag value of the resource.
     *
     * @example TestValue
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tagKey'       => 'TagKey',
        'tagValue'     => 'TagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
