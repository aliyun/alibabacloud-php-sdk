<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLockedSnapshotsResponseBody\lockedSnapshotsInfo;

class DescribeLockedSnapshotsResponseBody extends Model
{
    /**
     * @var lockedSnapshotsInfo[]
     */
    public $lockedSnapshotsInfo;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'lockedSnapshotsInfo' => 'LockedSnapshotsInfo',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->lockedSnapshotsInfo)) {
            Model::validateArray($this->lockedSnapshotsInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lockedSnapshotsInfo) {
            if (\is_array($this->lockedSnapshotsInfo)) {
                $res['LockedSnapshotsInfo'] = [];
                $n1 = 0;
                foreach ($this->lockedSnapshotsInfo as $item1) {
                    $res['LockedSnapshotsInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['LockedSnapshotsInfo'])) {
            if (!empty($map['LockedSnapshotsInfo'])) {
                $model->lockedSnapshotsInfo = [];
                $n1 = 0;
                foreach ($map['LockedSnapshotsInfo'] as $item1) {
                    $model->lockedSnapshotsInfo[$n1] = lockedSnapshotsInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
