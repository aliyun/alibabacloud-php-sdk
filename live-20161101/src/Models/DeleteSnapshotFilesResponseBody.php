<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteSnapshotFilesResponseBody\snapshotDeleteInfoList;

class DeleteSnapshotFilesResponseBody extends Model
{
    /**
     * @var int
     */
    public $failureCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var snapshotDeleteInfoList
     */
    public $snapshotDeleteInfoList;

    /**
     * @var int
     */
    public $successCount;
    protected $_name = [
        'failureCount' => 'FailureCount',
        'requestId' => 'RequestId',
        'snapshotDeleteInfoList' => 'SnapshotDeleteInfoList',
        'successCount' => 'SuccessCount',
    ];

    public function validate()
    {
        if (null !== $this->snapshotDeleteInfoList) {
            $this->snapshotDeleteInfoList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failureCount) {
            $res['FailureCount'] = $this->failureCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->snapshotDeleteInfoList) {
            $res['SnapshotDeleteInfoList'] = null !== $this->snapshotDeleteInfoList ? $this->snapshotDeleteInfoList->toArray($noStream) : $this->snapshotDeleteInfoList;
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
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
