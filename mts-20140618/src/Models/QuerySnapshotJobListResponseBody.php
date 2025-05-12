<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListResponseBody\nonExistSnapshotJobIds;
use AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListResponseBody\snapshotJobList;

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
        'nextPageToken' => 'NextPageToken',
        'nonExistSnapshotJobIds' => 'NonExistSnapshotJobIds',
        'requestId' => 'RequestId',
        'snapshotJobList' => 'SnapshotJobList',
    ];

    public function validate()
    {
        if (null !== $this->nonExistSnapshotJobIds) {
            $this->nonExistSnapshotJobIds->validate();
        }
        if (null !== $this->snapshotJobList) {
            $this->snapshotJobList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->nonExistSnapshotJobIds) {
            $res['NonExistSnapshotJobIds'] = null !== $this->nonExistSnapshotJobIds ? $this->nonExistSnapshotJobIds->toArray($noStream) : $this->nonExistSnapshotJobIds;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->snapshotJobList) {
            $res['SnapshotJobList'] = null !== $this->snapshotJobList ? $this->snapshotJobList->toArray($noStream) : $this->snapshotJobList;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
