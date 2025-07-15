<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DeleteSnapshotFilesResponseBody\snapshotDeleteInfoList;
use AlibabaCloud\Tea\Model;

class DeleteSnapshotFilesResponseBody extends Model
{
    /**
     * @description The number of snapshots that failed to be deleted.
     *
     * @example 1
     *
     * @var int
     */
    public $failureCount;

    /**
     * @description The request ID.
     *
     * @example 90F60327-ABEC-5A93-BF1F-****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the snapshots.
     *
     * @var snapshotDeleteInfoList
     */
    public $snapshotDeleteInfoList;

    /**
     * @description The number of successful screenshot deletions.
     *
     * @example 1
     *
     * @var int
     */
    public $successCount;
    protected $_name = [
        'failureCount' => 'FailureCount',
        'requestId' => 'RequestId',
        'snapshotDeleteInfoList' => 'SnapshotDeleteInfoList',
        'successCount' => 'SuccessCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->failureCount) {
            $res['FailureCount'] = $this->failureCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->snapshotDeleteInfoList) {
            $res['SnapshotDeleteInfoList'] = null !== $this->snapshotDeleteInfoList ? $this->snapshotDeleteInfoList->toMap() : null;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSnapshotFilesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailureCount'])) {
            $model->failureCount = $map['FailureCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SnapshotDeleteInfoList'])) {
            $model->snapshotDeleteInfoList = snapshotDeleteInfoList::fromMap($map['SnapshotDeleteInfoList']);
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
