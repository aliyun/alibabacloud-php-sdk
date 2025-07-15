<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainSnapshotDataResponseBody\snapshotDataInfos;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainSnapshotDataResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example B955107D-E658-4E77-B913-E0AC3D31693F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The daily statistics on the number of snapshots.
     *
     * @var snapshotDataInfos
     */
    public $snapshotDataInfos;
    protected $_name = [
        'requestId' => 'RequestId',
        'snapshotDataInfos' => 'SnapshotDataInfos',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->snapshotDataInfos) {
            $res['SnapshotDataInfos'] = null !== $this->snapshotDataInfos ? $this->snapshotDataInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainSnapshotDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SnapshotDataInfos'])) {
            $model->snapshotDataInfos = snapshotDataInfos::fromMap($map['SnapshotDataInfos']);
        }

        return $model;
    }
}
