<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\LockSnapshotResponseBody\lockedSnapshotInfo;

class LockSnapshotResponseBody extends Model
{
    /**
     * @var lockedSnapshotInfo
     */
    public $lockedSnapshotInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'lockedSnapshotInfo' => 'LockedSnapshotInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->lockedSnapshotInfo) {
            $this->lockedSnapshotInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lockedSnapshotInfo) {
            $res['LockedSnapshotInfo'] = null !== $this->lockedSnapshotInfo ? $this->lockedSnapshotInfo->toArray($noStream) : $this->lockedSnapshotInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['LockedSnapshotInfo'])) {
            $model->lockedSnapshotInfo = lockedSnapshotInfo::fromMap($map['LockedSnapshotInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
