<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceRegistrationsResponseBody\serviceRegistrations;
use AlibabaCloud\Tea\Model;

class ListServiceRegistrationsResponseBody extends Model
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
     * @var string
     */
    public $totalCount;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var serviceRegistrations[]
     */
    public $serviceRegistrations;
    protected $_name = [
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
        'maxResults'           => 'MaxResults',
        'serviceRegistrations' => 'ServiceRegistrations',
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
        if (null !== $this->serviceRegistrations) {
            $res['ServiceRegistrations'] = [];
            if (null !== $this->serviceRegistrations && \is_array($this->serviceRegistrations)) {
                $n = 0;
                foreach ($this->serviceRegistrations as $item) {
                    $res['ServiceRegistrations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ServiceRegistrations'])) {
            if (!empty($map['ServiceRegistrations'])) {
                $model->serviceRegistrations = [];
                $n                           = 0;
                foreach ($map['ServiceRegistrations'] as $item) {
                    $model->serviceRegistrations[$n++] = null !== $item ? serviceRegistrations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
