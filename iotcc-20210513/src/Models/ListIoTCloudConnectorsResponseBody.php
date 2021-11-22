<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorsResponseBody\ioTCloudConnectors;
use AlibabaCloud\Tea\Model;

class ListIoTCloudConnectorsResponseBody extends Model
{
    /**
     * @var ioTCloudConnectors[]
     */
    public $ioTCloudConnectors;

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
        'ioTCloudConnectors' => 'IoTCloudConnectors',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ioTCloudConnectors) {
            $res['IoTCloudConnectors'] = [];
            if (null !== $this->ioTCloudConnectors && \is_array($this->ioTCloudConnectors)) {
                $n = 0;
                foreach ($this->ioTCloudConnectors as $item) {
                    $res['IoTCloudConnectors'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListIoTCloudConnectorsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IoTCloudConnectors'])) {
            if (!empty($map['IoTCloudConnectors'])) {
                $model->ioTCloudConnectors = [];
                $n                         = 0;
                foreach ($map['IoTCloudConnectors'] as $item) {
                    $model->ioTCloudConnectors[$n++] = null !== $item ? ioTCloudConnectors::fromMap($item) : $item;
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
