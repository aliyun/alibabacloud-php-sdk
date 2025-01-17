<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSnapshotJobResponseBody\snapshotJob;

class GetSnapshotJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var snapshotJob
     */
    public $snapshotJob;
    protected $_name = [
        'requestId'   => 'RequestId',
        'snapshotJob' => 'SnapshotJob',
    ];

    public function validate()
    {
        if (null !== $this->snapshotJob) {
            $this->snapshotJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->snapshotJob) {
            $res['SnapshotJob'] = null !== $this->snapshotJob ? $this->snapshotJob->toArray($noStream) : $this->snapshotJob;
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

        if (isset($map['SnapshotJob'])) {
            $model->snapshotJob = snapshotJob::fromMap($map['SnapshotJob']);
        }

        return $model;
    }
}
