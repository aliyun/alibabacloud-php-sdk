<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListSupplierRegistrationsResponseBody\supplierRegistrations;
use AlibabaCloud\Tea\Model;

class ListSupplierRegistrationsResponseBody extends Model
{
    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example AAAAAdx9kBO7qKpr9My/+XQo0oY=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example C6CC568D-xxxx-xxxx-xxxx-08EB8E9F9F20
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The supplier registrations
     *
     * @var supplierRegistrations[]
     */
    public $supplierRegistrations;

    /**
     * @description The total number of entries returned.
     *
     * @example 3
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'supplierRegistrations' => 'SupplierRegistrations',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

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
        if (null !== $this->supplierRegistrations) {
            $res['SupplierRegistrations'] = [];
            if (null !== $this->supplierRegistrations && \is_array($this->supplierRegistrations)) {
                $n = 0;
                foreach ($this->supplierRegistrations as $item) {
                    $res['SupplierRegistrations'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListSupplierRegistrationsResponseBody
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
        if (isset($map['SupplierRegistrations'])) {
            if (!empty($map['SupplierRegistrations'])) {
                $model->supplierRegistrations = [];
                $n = 0;
                foreach ($map['SupplierRegistrations'] as $item) {
                    $model->supplierRegistrations[$n++] = null !== $item ? supplierRegistrations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
