<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\SDK\CC5G\V20220314\Models\ListWirelessCloudConnectorsResponseBody\wirelessCloudConnectors;
use AlibabaCloud\Tea\Model;

class ListWirelessCloudConnectorsResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var string
     */
    public $maxResults;

    /**
     * @example iou001238joojjaere
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2
     *
     * @var string
     */
    public $totalCount;

    /**
     * @var wirelessCloudConnectors[]
     */
    public $wirelessCloudConnectors;
    protected $_name = [
        'maxResults'              => 'MaxResults',
        'nextToken'               => 'NextToken',
        'requestId'               => 'RequestId',
        'totalCount'              => 'TotalCount',
        'wirelessCloudConnectors' => 'WirelessCloudConnectors',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->wirelessCloudConnectors) {
            $res['WirelessCloudConnectors'] = [];
            if (null !== $this->wirelessCloudConnectors && \is_array($this->wirelessCloudConnectors)) {
                $n = 0;
                foreach ($this->wirelessCloudConnectors as $item) {
                    $res['WirelessCloudConnectors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWirelessCloudConnectorsResponseBody
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['WirelessCloudConnectors'])) {
            if (!empty($map['WirelessCloudConnectors'])) {
                $model->wirelessCloudConnectors = [];
                $n                              = 0;
                foreach ($map['WirelessCloudConnectors'] as $item) {
                    $model->wirelessCloudConnectors[$n++] = null !== $item ? wirelessCloudConnectors::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
