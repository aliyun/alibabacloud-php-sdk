<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceUpgradeHistoryResponseBody\upgradeHistory;
use AlibabaCloud\Tea\Model;

class ListServiceInstanceUpgradeHistoryResponseBody extends Model
{
    /**
     * @description The number of items to return per page when paginating results. The maximum is 100, and the default is 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token to use for the next query.
     *
     * @example AAAAAc3HCuYhJi/wvpk4xOr0VLbAx7BkQzyYC+ONO+WudHGKEdB0uWSY7AGnM3qCgm/Ynge7zU6NWdbj0Tegyajyqyc=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Request ID.
     *
     * @example 86CAC31E-3527-562C-869F-347E931C9B25
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total count of upgrade history
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description List of upgrade histories.
     *
     * @var upgradeHistory[]
     */
    public $upgradeHistory;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'upgradeHistory' => 'UpgradeHistory',
    ];

    public function validate() {}

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
                $n = 0;
                foreach ($map['UpgradeHistory'] as $item) {
                    $model->upgradeHistory[$n++] = null !== $item ? upgradeHistory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
