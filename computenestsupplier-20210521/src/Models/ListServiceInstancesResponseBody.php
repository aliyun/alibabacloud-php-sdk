<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstancesResponseBody\serviceInstances;
use AlibabaCloud\Tea\Model;

class ListServiceInstancesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $maxResults;

    /**
     * @var serviceInstances[]
     */
    public $serviceInstances;
    protected $_name = [
        'nextToken'        => 'NextToken',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
        'maxResults'       => 'MaxResults',
        'serviceInstances' => 'ServiceInstances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
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

        return $model;
    }
}
