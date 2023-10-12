<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListDevicePropertiesResponseBody\deviceProperties;
use AlibabaCloud\Tea\Model;

class ListDevicePropertiesResponseBody extends Model
{
    /**
     * @var deviceProperties[]
     */
    public $deviceProperties;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 10
     *
     * @var int
     */
    public $nextToken;

    /**
     * @description Id of the request
     *
     * @example 1f598491-db6d-4276-a83a-3b5f57d4a4e1
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'deviceProperties' => 'DeviceProperties',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceProperties) {
            $res['DeviceProperties'] = [];
            if (null !== $this->deviceProperties && \is_array($this->deviceProperties)) {
                $n = 0;
                foreach ($this->deviceProperties as $item) {
                    $res['DeviceProperties'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListDevicePropertiesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceProperties'])) {
            if (!empty($map['DeviceProperties'])) {
                $model->deviceProperties = [];
                $n                       = 0;
                foreach ($map['DeviceProperties'] as $item) {
                    $model->deviceProperties[$n++] = null !== $item ? deviceProperties::fromMap($item) : $item;
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
