<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListResponseBody\nonExistSnapshotJobIds;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListResponseBody\snapshotJobList;
use AlibabaCloud\Tea\Model;

class QuerySnapshotJobListResponseBody extends Model
{
    /**
     * @var snapshotJobList
     */
    public $snapshotJobList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var nonExistSnapshotJobIds
     */
    public $nonExistSnapshotJobIds;

    /**
     * @var string
     */
    public $nextPageToken;
    protected $_name = [
        'snapshotJobList'        => 'SnapshotJobList',
        'requestId'              => 'RequestId',
        'nonExistSnapshotJobIds' => 'NonExistSnapshotJobIds',
        'nextPageToken'          => 'NextPageToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshotJobList) {
            $res['SnapshotJobList'] = null !== $this->snapshotJobList ? $this->snapshotJobList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nonExistSnapshotJobIds) {
            $res['NonExistSnapshotJobIds'] = null !== $this->nonExistSnapshotJobIds ? $this->nonExistSnapshotJobIds->toMap() : null;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
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
        if (isset($map['SnapshotJobList'])) {
            $model->snapshotJobList = snapshotJobList::fromMap($map['SnapshotJobList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NonExistSnapshotJobIds'])) {
            $model->nonExistSnapshotJobIds = nonExistSnapshotJobIds::fromMap($map['NonExistSnapshotJobIds']);
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }

        return $model;
    }
}
