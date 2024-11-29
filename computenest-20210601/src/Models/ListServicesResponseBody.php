<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesResponseBody\services;
use AlibabaCloud\Tea\Model;

class ListServicesResponseBody extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAfu+XtuBE55iRLHEYYuojI41
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 3F976EF8-C10A-57DC-917C-BB7BEB508FFB
     *
     * @var string
     */
    public $requestId;

    /**
     * @var services[]
     */
    public $services;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'services'   => 'Services',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->services) {
            $res['Services'] = [];
            if (null !== $this->services && \is_array($this->services)) {
                $n = 0;
                foreach ($this->services as $item) {
                    $res['Services'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListServicesResponseBody
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
        if (isset($map['Services'])) {
            if (!empty($map['Services'])) {
                $model->services = [];
                $n               = 0;
                foreach ($map['Services'] as $item) {
                    $model->services[$n++] = null !== $item ? services::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
