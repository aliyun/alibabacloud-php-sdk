<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitSnapshotJobResponseBody\snapshotJob;
use AlibabaCloud\Tea\Model;

class SubmitSnapshotJobResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-5EB0-4AF6-D7393642****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the snapshot job.
     *
     * @var snapshotJob
     */
    public $snapshotJob;
    protected $_name = [
        'requestId' => 'RequestId',
        'snapshotJob' => 'SnapshotJob',
    ];

    public function validate() {}

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
     * @return SubmitSnapshotJobResponseBody
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
