<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetSnapshotResponseBody\snapshot;

class GetSnapshotResponseBody extends Model
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
        'snapshot' => 'Snapshot',
    ];

    public function validate()
    {
        if (null !== $this->snapshot) {
            $this->snapshot->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->snapshot) {
            $res['Snapshot'] = null !== $this->snapshot ? $this->snapshot->toArray($noStream) : $this->snapshot;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Snapshot'])) {
            $model->snapshot = snapshot::fromMap($map['Snapshot']);
        }

        return $model;
    }
}
