<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorGroupsResponseBody\ioTCloudConnectorGroups;
use AlibabaCloud\Tea\Model;

class ListIoTCloudConnectorGroupsResponseBody extends Model
{
    /**
     * @var ioTCloudConnectorGroups[]
     */
    public $ioTCloudConnectorGroups;

    /**
     * @var int
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
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'ioTCloudConnectorGroups' => 'IoTCloudConnectorGroups',
        'maxResults'              => 'MaxResults',
        'nextToken'               => 'NextToken',
        'requestId'               => 'RequestId',
        'totalCount'              => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ioTCloudConnectorGroups) {
            $res['IoTCloudConnectorGroups'] = [];
            if (null !== $this->ioTCloudConnectorGroups && \is_array($this->ioTCloudConnectorGroups)) {
                $n = 0;
                foreach ($this->ioTCloudConnectorGroups as $item) {
                    $res['IoTCloudConnectorGroups'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListIoTCloudConnectorGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IoTCloudConnectorGroups'])) {
            if (!empty($map['IoTCloudConnectorGroups'])) {
                $model->ioTCloudConnectorGroups = [];
                $n                              = 0;
                foreach ($map['IoTCloudConnectorGroups'] as $item) {
                    $model->ioTCloudConnectorGroups[$n++] = null !== $item ? ioTCloudConnectorGroups::fromMap($item) : $item;
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
