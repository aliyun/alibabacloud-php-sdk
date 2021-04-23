<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeBoardSnapshotResponseBody\snapshot;
use AlibabaCloud\Tea\Model;

class DescribeBoardSnapshotResponseBody extends Model
{
    /**
     * @var snapshot
     */
    public $snapshot;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'snapshot'  => 'Snapshot',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshot) {
            $res['Snapshot'] = null !== $this->snapshot ? $this->snapshot->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Snapshot'])) {
            $model->snapshot = snapshot::fromMap($map['Snapshot']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
