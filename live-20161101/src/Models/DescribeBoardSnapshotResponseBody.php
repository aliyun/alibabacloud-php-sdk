<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeBoardSnapshotResponseBody\snapshot;
use AlibabaCloud\Tea\Model;

class DescribeBoardSnapshotResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var snapshot
     */
    public $snapshot;
    protected $_name = [
        'requestId' => 'RequestId',
        'snapshot'  => 'Snapshot',
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
        if (null !== $this->snapshot) {
            $res['Snapshot'] = null !== $this->snapshot ? $this->snapshot->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBoardSnapshotResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Snapshot'])) {
            $model->snapshot = snapshot::fromMap($map['Snapshot']);
        }

        return $model;
    }
}
