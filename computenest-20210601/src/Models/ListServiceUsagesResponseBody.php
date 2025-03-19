<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceUsagesResponseBody\serviceUsages;
use AlibabaCloud\Tea\Model;

class ListServiceUsagesResponseBody extends Model
{
    /**
     * @description The maximum number of entries per page. Valid values: 1 to 100. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. If NextToken is empty, no next page exists.
     *
     * @example AAAAAYChudnQUoBH+mGWFpb6oP0=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 18AD0960-A9FE-1AC8-ADF8-22131Fxxxxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The service applications.
     *
     * @var serviceUsages[]
     */
    public $serviceUsages;

    /**
     * @description The total number of entries returned.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'serviceUsages' => 'ServiceUsages',
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
        if (null !== $this->serviceUsages) {
            $res['ServiceUsages'] = [];
            if (null !== $this->serviceUsages && \is_array($this->serviceUsages)) {
                $n = 0;
                foreach ($this->serviceUsages as $item) {
                    $res['ServiceUsages'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListServiceUsagesResponseBody
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
        if (isset($map['ServiceUsages'])) {
            if (!empty($map['ServiceUsages'])) {
                $model->serviceUsages = [];
                $n = 0;
                foreach ($map['ServiceUsages'] as $item) {
                    $model->serviceUsages[$n++] = null !== $item ? serviceUsages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
