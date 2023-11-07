<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetAccessKeyLastUsedResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description The event details.
     *
     * @example {
     * "eventId": "239EB588-CD24-522E-B0B5-174A1A58****",
     * "eventSource": "ecs.cn-hangzhou.aliyuncs.com",
     * "sourceIpAddress": "10.10.**.**",
     * "userIdentity": {
     * "accountId": "104758519118****",
     * "principalId": "24549429003625****",
     * }
     * @var string
     */
    public $detail;

    /**
     * @description The resource name.
     *
     * @example i-bp1ltva99x1a****
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The resource type.
     *
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The event source.
     *
     * Valid values:
     *
     *   Internal
     *
     * <!-- -->
     *
     *   ManagementEvent
     *
     * <!-- -->
     *
     *   DataEvent
     *
     * <!-- -->
     * @example ManagementEvent
     *
     * @var string
     */
    public $source;

    /**
     * @description The timestamp when the resource was used. Unit: millisecond.
     *
     * @example 1657247532000
     *
     * @var int
     */
    public $usedTimestamp;
    protected $_name = [
        'detail'        => 'Detail',
        'resourceName'  => 'ResourceName',
        'resourceType'  => 'ResourceType',
        'source'        => 'Source',
        'usedTimestamp' => 'UsedTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->usedTimestamp) {
            $res['UsedTimestamp'] = $this->usedTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['UsedTimestamp'])) {
            $model->usedTimestamp = $map['UsedTimestamp'];
        }

        return $model;
    }
}
