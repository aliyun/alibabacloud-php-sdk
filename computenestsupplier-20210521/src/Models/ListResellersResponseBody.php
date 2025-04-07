<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListResellersResponseBody\supplierInformation;
use AlibabaCloud\Tea\Model;

class ListResellersResponseBody extends Model
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
     * @description A pagination token.
     *
     * @example AAAAAW8kZY+u1sYOaYf5JmgmDQQ=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example A361BA9E-xxxx-xxxx-xxxx-C26E5180456E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description distributor informations
     *
     * @var supplierInformation[]
     */
    public $supplierInformation;

    /**
     * @description The total number of entries returned.
     *
     * @example 4
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'supplierInformation' => 'SupplierInformation',
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
        if (null !== $this->supplierInformation) {
            $res['SupplierInformation'] = [];
            if (null !== $this->supplierInformation && \is_array($this->supplierInformation)) {
                $n = 0;
                foreach ($this->supplierInformation as $item) {
                    $res['SupplierInformation'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListResellersResponseBody
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
        if (isset($map['SupplierInformation'])) {
            if (!empty($map['SupplierInformation'])) {
                $model->supplierInformation = [];
                $n = 0;
                foreach ($map['SupplierInformation'] as $item) {
                    $model->supplierInformation[$n++] = null !== $item ? supplierInformation::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
