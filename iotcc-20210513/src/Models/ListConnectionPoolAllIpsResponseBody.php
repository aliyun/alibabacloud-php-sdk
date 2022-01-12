<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListConnectionPoolAllIpsResponseBody\connectionPoolIps;
use AlibabaCloud\Tea\Model;

class ListConnectionPoolAllIpsResponseBody extends Model
{
    /**
     * @var connectionPoolIps[]
     */
    public $connectionPoolIps;

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
    public $totalIpsCount;
    protected $_name = [
        'connectionPoolIps' => 'ConnectionPoolIps',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'requestId'         => 'RequestId',
        'totalIpsCount'     => 'TotalIpsCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionPoolIps) {
            $res['ConnectionPoolIps'] = [];
            if (null !== $this->connectionPoolIps && \is_array($this->connectionPoolIps)) {
                $n = 0;
                foreach ($this->connectionPoolIps as $item) {
                    $res['ConnectionPoolIps'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->totalIpsCount) {
            $res['TotalIpsCount'] = $this->totalIpsCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConnectionPoolAllIpsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionPoolIps'])) {
            if (!empty($map['ConnectionPoolIps'])) {
                $model->connectionPoolIps = [];
                $n                        = 0;
                foreach ($map['ConnectionPoolIps'] as $item) {
                    $model->connectionPoolIps[$n++] = null !== $item ? connectionPoolIps::fromMap($item) : $item;
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
        if (isset($map['TotalIpsCount'])) {
            $model->totalIpsCount = $map['TotalIpsCount'];
        }

        return $model;
    }
}
