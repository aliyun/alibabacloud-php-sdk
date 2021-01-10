<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainSnapshotDataResponseBody\snapshotDataInfos;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainSnapshotDataResponseBody extends Model
{
    /**
     * @var snapshotDataInfos
     */
    public $snapshotDataInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'snapshotDataInfos' => 'SnapshotDataInfos',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshotDataInfos) {
            $res['SnapshotDataInfos'] = null !== $this->snapshotDataInfos ? $this->snapshotDataInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['SnapshotDataInfos'])) {
            $model->snapshotDataInfos = snapshotDataInfos::fromMap($map['SnapshotDataInfos']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
