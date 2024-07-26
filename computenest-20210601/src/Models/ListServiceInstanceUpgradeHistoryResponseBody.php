<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceUpgradeHistoryResponseBody\upgradeHistory;
use AlibabaCloud\Tea\Model;

class ListServiceInstanceUpgradeHistoryResponseBody extends Model
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
     * @example EE3EDF4E-B3B1-19B6-BD01-30D4D00F6E5D
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalCount;

    /**
     * @var upgradeHistory[]
     */
    public $upgradeHistory;
    protected $_name = [
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
        'upgradeHistory' => 'UpgradeHistory',
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
        if (null !== $this->upgradeHistory) {
            $res['UpgradeHistory'] = [];
            if (null !== $this->upgradeHistory && \is_array($this->upgradeHistory)) {
                $n = 0;
                foreach ($this->upgradeHistory as $item) {
                    $res['UpgradeHistory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceInstanceUpgradeHistoryResponseBody
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
        if (isset($map['UpgradeHistory'])) {
            if (!empty($map['UpgradeHistory'])) {
                $model->upgradeHistory = [];
                $n                     = 0;
                foreach ($map['UpgradeHistory'] as $item) {
                    $model->upgradeHistory[$n++] = null !== $item ? upgradeHistory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
