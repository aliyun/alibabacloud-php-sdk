<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponseBody\endpointGroups;
use AlibabaCloud\Tea\Model;

class ListEndpointGroupsResponseBody extends Model
{
    /**
     * @description The ID of the endpoint group.
     *
     * @var endpointGroups[]
     */
    public $endpointGroups;

    /**
     * @description Indicates whether the client IP address preservation feature is enabled. Valid values:
     *
     *   **true**: The client IP address preservation feature is enabled.
     *   **false**: The client IP address preservation feature is disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of consecutive failed health checks that must occur before an endpoint is considered unhealthy.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The weight of the endpoint.
     *
     * @example A052D49E-CCC2-41DB-816C-DC3381503194
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the endpoint.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'endpointGroups' => 'EndpointGroups',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointGroups) {
            $res['EndpointGroups'] = [];
            if (null !== $this->endpointGroups && \is_array($this->endpointGroups)) {
                $n = 0;
                foreach ($this->endpointGroups as $item) {
                    $res['EndpointGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return ListEndpointGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointGroups'])) {
            if (!empty($map['EndpointGroups'])) {
                $model->endpointGroups = [];
                $n                     = 0;
                foreach ($map['EndpointGroups'] as $item) {
                    $model->endpointGroups[$n++] = null !== $item ? endpointGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
