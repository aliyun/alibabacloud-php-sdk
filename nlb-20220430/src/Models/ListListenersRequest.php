<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\SDK\Nlb\V20220430\Models\ListListenersRequest\tag;
use AlibabaCloud\Tea\Model;

class ListListenersRequest extends Model
{
    /**
     * @description The listener IDs.
     *
     * @var string[]
     */
    public $listenerIds;

    /**
     * @description The listening protocol. Valid values: **TCP**, **UDP**, and **TCPSSL**.
     *
     * @example TCPSSL
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description The ID of the NLB instance. You can query up to 20 NLB instances at a time.
     *
     * @var string[]
     */
    public $loadBalancerIds;

    /**
     * @description The number of entries to return on each page. Valid values: **1** to **100**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used for the next query. Valid values:
     *
     *   If this is your first query or no next query is to be sent, ignore this parameter.
     *   If a next query is to be sent, set the parameter to the value of NextToken that is returned from the last call.
     *
     * @example NextToken	FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region where the NLB instance is deployed.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/443657.html) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'listenerIds'      => 'ListenerIds',
        'listenerProtocol' => 'ListenerProtocol',
        'loadBalancerIds'  => 'LoadBalancerIds',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'regionId'         => 'RegionId',
        'tag'              => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerIds) {
            $res['ListenerIds'] = $this->listenerIds;
        }
        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }
        if (null !== $this->loadBalancerIds) {
            $res['LoadBalancerIds'] = $this->loadBalancerIds;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
     * @return ListListenersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerIds'])) {
            if (!empty($map['ListenerIds'])) {
                $model->listenerIds = $map['ListenerIds'];
            }
        }
        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }
        if (isset($map['LoadBalancerIds'])) {
            if (!empty($map['LoadBalancerIds'])) {
                $model->loadBalancerIds = $map['LoadBalancerIds'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
