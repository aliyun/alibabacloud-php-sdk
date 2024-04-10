<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotGroupsResponseBody\snapshotGroups;
use AlibabaCloud\Tea\Model;

class DescribeSnapshotGroupsResponseBody extends Model
{
    /**
     * @description The token used to start the next query.
     *
     * > If the return value is empty, no more data exists.
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 3F9A4CC4-362F-469A-B9EF-B3204EF8AA3A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Details of the snapshot-consistent groups.
     *
     * @var snapshotGroups
     */
    public $snapshotGroups;
    protected $_name = [
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'snapshotGroups' => 'SnapshotGroups',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->snapshotGroups) {
            $res['SnapshotGroups'] = null !== $this->snapshotGroups ? $this->snapshotGroups->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnapshotGroupsResponseBody
     */
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
