<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAccelerateIpEndpointRelationsResponseBody\accelerateIpEndpointRelations;
use AlibabaCloud\Tea\Model;

class ListBasicAccelerateIpEndpointRelationsResponseBody extends Model
{
    /**
     * @description A list of accelerated IP addresses and the endpoints with which the accelerated IP addresses are associated.
     *
     * @var accelerateIpEndpointRelations[]
     */
    public $accelerateIpEndpointRelations;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var string
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the query. Valid values:
     *
     *   If **NextToken** is not returned, it indicates that no additional results exist.
     *   If a value is returned for **NextToken**, the value is the token that determines the start point of the next query.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'accelerateIpEndpointRelations' => 'AccelerateIpEndpointRelations',
        'maxResults'                    => 'MaxResults',
        'nextToken'                     => 'NextToken',
        'requestId'                     => 'RequestId',
        'totalCount'                    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerateIpEndpointRelations) {
            $res['AccelerateIpEndpointRelations'] = [];
            if (null !== $this->accelerateIpEndpointRelations && \is_array($this->accelerateIpEndpointRelations)) {
                $n = 0;
                foreach ($this->accelerateIpEndpointRelations as $item) {
                    $res['AccelerateIpEndpointRelations'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListBasicAccelerateIpEndpointRelationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateIpEndpointRelations'])) {
            if (!empty($map['AccelerateIpEndpointRelations'])) {
                $model->accelerateIpEndpointRelations = [];
                $n                                    = 0;
                foreach ($map['AccelerateIpEndpointRelations'] as $item) {
                    $model->accelerateIpEndpointRelations[$n++] = null !== $item ? accelerateIpEndpointRelations::fromMap($item) : $item;
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
