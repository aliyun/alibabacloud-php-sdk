<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceRegistrationsResponseBody\serviceRegistrations;
use AlibabaCloud\Tea\Model;

class ListServiceRegistrationsResponseBody extends Model
{
    /**
     * @description Number of items per page in a paginated query. The maximum is 100, and the default is 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example AAAAAfu+XtuBE55iRLHEYYuojI4=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Request ID.
     *
     * @example 51945B04-6AA6-410D-93BA-236E0248B104
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Service registration information.
     *
     * @var serviceRegistrations[]
     */
    public $serviceRegistrations;

    /**
     * @description Total number of records that meet the criteria.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
        'serviceRegistrations' => 'ServiceRegistrations',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceRegistrations) {
            $res['ServiceRegistrations'] = [];
            if (null !== $this->serviceRegistrations && \is_array($this->serviceRegistrations)) {
                $n = 0;
                foreach ($this->serviceRegistrations as $item) {
                    $res['ServiceRegistrations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceRegistrationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceRegistrations'])) {
            if (!empty($map['ServiceRegistrations'])) {
                $model->serviceRegistrations = [];
                $n                           = 0;
                foreach ($map['ServiceRegistrations'] as $item) {
                    $model->serviceRegistrations[$n++] = null !== $item ? serviceRegistrations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
