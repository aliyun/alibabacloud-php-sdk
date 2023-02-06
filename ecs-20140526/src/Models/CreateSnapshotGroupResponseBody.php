<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateSnapshotGroupResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 01ABBD93-1ABB-4D92-B496-1A3D20EC0697
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the snapshot-consistent group.
     *
     * @example ssg-j6ciyh3k52qp7ovm****
     *
     * @var string
     */
    public $snapshotGroupId;
    protected $_name = [
        'requestId'       => 'RequestId',
        'snapshotGroupId' => 'SnapshotGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->snapshotGroupId) {
            $res['SnapshotGroupId'] = $this->snapshotGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSnapshotGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SnapshotGroupId'])) {
            $model->snapshotGroupId = $map['SnapshotGroupId'];
        }

        return $model;
    }
}
