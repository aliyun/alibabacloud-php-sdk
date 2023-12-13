<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupEventsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeContainerGroupEventsRequest extends Model
{
    /**
     * @description The IDs of the elastic container instances. You can specify up to 20 IDs. Each ID must be a JSON string.
     *
     * @example ["eci-bp17gw49eu09yiwm****", "eci-bp19aq49du01abcm****", "eci-2zegym1qhbmdfr1s****"]
     *
     * @var string
     */
    public $containerGroupIds;

    /**
     * @description The event source. Valid values:
     *
     *   EciService
     *   K8sAgent
     *
     * This parameter is empty by default. This indicates that all events are queried.
     * @example K8sAgent
     *
     * @var string
     */
    public $eventSource;

    /**
     * @description The maximum number of elastic container instances to be returned for this request. Default value: 200.
     *
     * >  The number of elastic container instances to be returned is no greater than this parameter value.
     * @example 200
     *
     * @var int
     */
    public $limit;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. If NextToken is empty, no next page exists.
     *
     * You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     * @example d78f2dd8-5979-42fe-xaee-b16db43be5bc
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-uf66jeqopgqa9hdn****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description A relative time in seconds before the current time from which to show event information. This parameter is used to poll incremental events.
     *
     * @example 60
     *
     * @var int
     */
    public $sinceSecond;

    /**
     * @description The tag that is added to the elastic container instances.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-uf6h3rbwbm90urjwa****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-k
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'containerGroupIds' => 'ContainerGroupIds',
        'eventSource'       => 'EventSource',
        'limit'             => 'Limit',
        'nextToken'         => 'NextToken',
        'regionId'          => 'RegionId',
        'resourceGroupId'   => 'ResourceGroupId',
        'sinceSecond'       => 'SinceSecond',
        'tag'               => 'Tag',
        'vSwitchId'         => 'VSwitchId',
        'zoneId'            => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerGroupIds) {
            $res['ContainerGroupIds'] = $this->containerGroupIds;
        }
        if (null !== $this->eventSource) {
            $res['EventSource'] = $this->eventSource;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sinceSecond) {
            $res['SinceSecond'] = $this->sinceSecond;
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
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerGroupEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerGroupIds'])) {
            $model->containerGroupIds = $map['ContainerGroupIds'];
        }
        if (isset($map['EventSource'])) {
            $model->eventSource = $map['EventSource'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SinceSecond'])) {
            $model->sinceSecond = $map['SinceSecond'];
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
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
