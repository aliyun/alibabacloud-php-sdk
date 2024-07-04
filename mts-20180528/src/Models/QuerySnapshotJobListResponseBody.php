<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models;

use AlibabaCloud\SDK\Mts\V20180528\Models\QuerySnapshotJobListResponseBody\nonExistSnapshotJobIds;
use AlibabaCloud\SDK\Mts\V20180528\Models\QuerySnapshotJobListResponseBody\snapshotJobList;
use AlibabaCloud\Tea\Model;

class QuerySnapshotJobListResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var nonExistSnapshotJobIds
     */
    public $nonExistSnapshotJobIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var snapshotJobList
     */
    public $snapshotJobList;
    protected $_name = [
        'nextPageToken'          => 'NextPageToken',
        'nonExistSnapshotJobIds' => 'NonExistSnapshotJobIds',
        'requestId'              => 'RequestId',
        'snapshotJobList'        => 'SnapshotJobList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->nonExistSnapshotJobIds) {
            $res['NonExistSnapshotJobIds'] = null !== $this->nonExistSnapshotJobIds ? $this->nonExistSnapshotJobIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->snapshotJobList) {
            $res['SnapshotJobList'] = null !== $this->snapshotJobList ? $this->snapshotJobList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySnapshotJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['NonExistSnapshotJobIds'])) {
            $model->nonExistSnapshotJobIds = nonExistSnapshotJobIds::fromMap($map['NonExistSnapshotJobIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SnapshotJobList'])) {
            $model->snapshotJobList = snapshotJobList::fromMap($map['SnapshotJobList']);
        }

        return $model;
    }
}
