<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesResponseBody\serviceInstances;
use AlibabaCloud\Tea\Model;

class ListServiceInstancesResponseBody extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAfu+XtuBE55iRLHEYYuojI4=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example E50287CB-AABF-4877-92C0-289B339A1546
     *
     * @var string
     */
    public $requestId;

    /**
     * @var serviceInstances[]
     */
    public $serviceInstances;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'requestId'        => 'RequestId',
        'serviceInstances' => 'ServiceInstances',
        'totalCount'       => 'TotalCount',
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
        if (null !== $this->serviceInstances) {
            $res['ServiceInstances'] = [];
            if (null !== $this->serviceInstances && \is_array($this->serviceInstances)) {
                $n = 0;
                foreach ($this->serviceInstances as $item) {
                    $res['ServiceInstances'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListServiceInstancesResponseBody
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
        if (isset($map['ServiceInstances'])) {
            if (!empty($map['ServiceInstances'])) {
                $model->serviceInstances = [];
                $n                       = 0;
                foreach ($map['ServiceInstances'] as $item) {
                    $model->serviceInstances[$n++] = null !== $item ? serviceInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
