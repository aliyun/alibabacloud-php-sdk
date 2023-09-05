<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaGroupsResponseBody\replicaGroups;
use AlibabaCloud\Tea\Model;

class DescribeDiskReplicaGroupsResponseBody extends Model
{
    /**
     * @description The query token returned in this call.
     *
     * @example AAAAAdDWBF2****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Details about the replication pair-consistent groups.
     *
     * @var replicaGroups[]
     */
    public $replicaGroups;

    /**
     * @description The ID of the request.
     *
     * @example AAA478A0-BEE6-1D42-BEB6-A9CFEAD6****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 60
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nextToken'     => 'NextToken',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'replicaGroups' => 'ReplicaGroups',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->replicaGroups) {
            $res['ReplicaGroups'] = [];
            if (null !== $this->replicaGroups && \is_array($this->replicaGroups)) {
                $n = 0;
                foreach ($this->replicaGroups as $item) {
                    $res['ReplicaGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeDiskReplicaGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ReplicaGroups'])) {
            if (!empty($map['ReplicaGroups'])) {
                $model->replicaGroups = [];
                $n                    = 0;
                foreach ($map['ReplicaGroups'] as $item) {
                    $model->replicaGroups[$n++] = null !== $item ? replicaGroups::fromMap($item) : $item;
                }
            }
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
