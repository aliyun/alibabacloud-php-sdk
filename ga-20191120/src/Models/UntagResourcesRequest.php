<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description Specifies whether to remove all tags of the specified resource. Valid values:
     *
     *   **true**: yes
     *   **false** (default): no
     *
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request may be different.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the region where the GA instance is deployed. Set the value to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource whose tags you want to remove.
     *
     *   If **ResourceType** is set to **accelerator**, set the value of ResourceId to the ID of a standard GA instance.
     *   If **ResourceType** is set to **basicaccelerator**, set the value of ResourceId to the ID of a basic GA instance.
     *   If **ResourceType** is set to **bandwidthpackage**, set the value of ResourceId to the ID of a bandwidth plan.
     *   If **ResourceType** is set to **acl**, set the value of ResourceId to the ID of an ACL.
     *   If **ResourceType** is set to **endpointgroup**, set the value of ResourceId to the ID of an EndpointGroup.
     *
     * You can enter up to 50 resource IDs.
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The type of the resource whose tags you want to remove. Valid values:
     *
     *   **accelerator**: a standard GA instance.
     *   **basicaccelerator**: a basic GA instance.
     *   **bandwidthpackage**: a bandwidth plan.
     *   **acl**: an access control list (ACL).
     *   **endpointgroup**: an endpoint group (EndpointGroup).
     *
     * @example accelerator
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The key of the tag to be removed.
     *
     * You can specify up to 20 tag keys.
     *
     * >  If the **All** parameter is set to **true**, this parameter does not take effect.
     * @var string[]
     */
    public $tagKey;
    protected $_name = [
        'all'          => 'All',
        'clientToken'  => 'ClientToken',
        'regionId'     => 'RegionId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
