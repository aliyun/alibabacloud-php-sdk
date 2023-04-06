<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\TagResourcesRequest\tag;
use AlibabaCloud\Tea\Model;

class TagResourcesRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The client token can contain only ASCII characters.
     *
     * > If you do not specify this parameter, the system automatically uses the value of **RequestId**as the value of **ClientToken**. The value of **RequestId** for each API request may be different.
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
     * @description The ID of the GA resource.
     *
     *   If you set the **ResourceType** parameter to **accelerator**, set the value of ResourceId to the ID of a standard GA instance.
     *   If you set the **ResourceType** parameter to **basicaccelerator**, set the value of ResourceId to the ID of a basic GA instance.
     *   If you set the **ResourceType** parameter to**bandwidthpackage**, set the value of ResourceId to the ID of a bandwidth plan.
     *   If you set the **ResourceType** parameter to **acl**, set the value of ResourceId to the ID of an ACL.
     *
     * You can specify 1 to 50 GA resource IDs.
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The type of the GA resource. Valid values:
     *
     *   **accelerator:** a standard GA instance.
     *   **basicaccelerator:** a basic GA instance.
     *   **bandwidthpackage:** a bandwidth plan.
     *   **acl:** an access control list (ACL).
     *
     * @example accelerator
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tags of GA resources.
     *
     * You can specify up to 20 tags.
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'regionId'     => 'RegionId',
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
