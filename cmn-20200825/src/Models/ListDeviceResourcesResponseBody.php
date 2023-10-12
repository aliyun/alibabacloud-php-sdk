<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListDeviceResourcesResponseBody\deviceResource;
use AlibabaCloud\Tea\Model;

class ListDeviceResourcesResponseBody extends Model
{
    /**
     * @var deviceResource[]
     */
    public $deviceResource;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example ""
     *
     * @var int
     */
    public $nextToken;

    /**
     * @example requestId
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
        'deviceResource' => 'DeviceResource',
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceResource) {
            $res['DeviceResource'] = [];
            if (null !== $this->deviceResource && \is_array($this->deviceResource)) {
                $n = 0;
                foreach ($this->deviceResource as $item) {
                    $res['DeviceResource'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListDeviceResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceResource'])) {
            if (!empty($map['DeviceResource'])) {
                $model->deviceResource = [];
                $n                     = 0;
                foreach ($map['DeviceResource'] as $item) {
                    $model->deviceResource[$n++] = null !== $item ? deviceResource::fromMap($item) : $item;
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
