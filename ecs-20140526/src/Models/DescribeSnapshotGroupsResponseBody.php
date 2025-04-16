<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotGroupsResponseBody\snapshotGroups;

class DescribeSnapshotGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var snapshotGroups
     */
    public $snapshotGroups;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'snapshotGroups' => 'SnapshotGroups',
    ];

    public function validate()
    {
        if (null !== $this->snapshotGroups) {
            $this->snapshotGroups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->snapshotGroups) {
            $res['SnapshotGroups'] = null !== $this->snapshotGroups ? $this->snapshotGroups->toArray($noStream) : $this->snapshotGroups;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SnapshotGroups'])) {
            $model->snapshotGroups = snapshotGroups::fromMap($map['SnapshotGroups']);
        }

        return $model;
    }
}
