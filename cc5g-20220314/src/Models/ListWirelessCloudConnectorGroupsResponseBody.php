<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\SDK\CC5G\V20220314\Models\ListWirelessCloudConnectorGroupsResponseBody\wirelessCloudConnectorGroups;
use AlibabaCloud\Tea\Model;

class ListWirelessCloudConnectorGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $maxResults;

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
     * @var wirelessCloudConnectorGroups[]
     */
    public $wirelessCloudConnectorGroups;
    protected $_name = [
        'maxResults'                   => 'MaxResults',
        'nextToken'                    => 'NextToken',
        'requestId'                    => 'RequestId',
        'totalCount'                   => 'TotalCount',
        'wirelessCloudConnectorGroups' => 'WirelessCloudConnectorGroups',
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
        if (null !== $this->wirelessCloudConnectorGroups) {
            $res['WirelessCloudConnectorGroups'] = [];
            if (null !== $this->wirelessCloudConnectorGroups && \is_array($this->wirelessCloudConnectorGroups)) {
                $n = 0;
                foreach ($this->wirelessCloudConnectorGroups as $item) {
                    $res['WirelessCloudConnectorGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWirelessCloudConnectorGroupsResponseBody
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
        if (isset($map['WirelessCloudConnectorGroups'])) {
            if (!empty($map['WirelessCloudConnectorGroups'])) {
                $model->wirelessCloudConnectorGroups = [];
                $n                                   = 0;
                foreach ($map['WirelessCloudConnectorGroups'] as $item) {
                    $model->wirelessCloudConnectorGroups[$n++] = null !== $item ? wirelessCloudConnectorGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
