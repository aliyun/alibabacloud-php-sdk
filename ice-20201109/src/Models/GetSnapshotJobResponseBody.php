<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetSnapshotJobResponseBody\snapshotJob;
use AlibabaCloud\Tea\Model;

class GetSnapshotJobResponseBody extends Model
{
    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 截图任务信息
     *
     * @var snapshotJob
     */
    public $snapshotJob;
    protected $_name = [
        'requestId'   => 'RequestId',
        'snapshotJob' => 'SnapshotJob',
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
        if (null !== $this->snapshotJob) {
            $res['SnapshotJob'] = null !== $this->snapshotJob ? $this->snapshotJob->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSnapshotJobResponseBody
     */
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
