<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceDiscoveryAssociationsResponseBody\ipamResourceDiscoveryAssociations;
use AlibabaCloud\Tea\Model;

class ListIpamResourceDiscoveryAssociationsResponseBody extends Model
{
    /**
     * @description The number of entries on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description The list of associations.
     *
     * @var ipamResourceDiscoveryAssociations[]
     */
    public $ipamResourceDiscoveryAssociations;

    /**
     * @description The maximum number of entries on each page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   If **NextToken** is empty, there is no next page.
     *   If a value of **NextToken** is returned, it indicates the token that is used for the next query.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example F28A239E-F88D-500E-ADE7-FA5E8CA3A170
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count' => 'Count',
        'ipamResourceDiscoveryAssociations' => 'IpamResourceDiscoveryAssociations',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->ipamResourceDiscoveryAssociations) {
            $res['IpamResourceDiscoveryAssociations'] = [];
            if (null !== $this->ipamResourceDiscoveryAssociations && \is_array($this->ipamResourceDiscoveryAssociations)) {
                $n = 0;
                foreach ($this->ipamResourceDiscoveryAssociations as $item) {
                    $res['IpamResourceDiscoveryAssociations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIpamResourceDiscoveryAssociationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['IpamResourceDiscoveryAssociations'])) {
            if (!empty($map['IpamResourceDiscoveryAssociations'])) {
                $model->ipamResourceDiscoveryAssociations = [];
                $n = 0;
                foreach ($map['IpamResourceDiscoveryAssociations'] as $item) {
                    $model->ipamResourceDiscoveryAssociations[$n++] = null !== $item ? ipamResourceDiscoveryAssociations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
