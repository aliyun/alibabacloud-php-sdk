<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetJobDetailResponseBody\AIJobDetail;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetJobDetailResponseBody\snapshotJobDetail;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetJobDetailResponseBody\transcodeJobDetail;
use AlibabaCloud\Tea\Model;

class GetJobDetailResponseBody extends Model
{
    /**
     * @description The details of the AI task. This parameter takes effect only when the TaskType parameter is set to AI.
     *
     * @var AIJobDetail
     */
    public $AIJobDetail;

    /**
     * @description The type of the task. Valid values:
     *
     * @example transcode
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The request ID.
     *
     * @example 6708D849-F109-1A6C-AC91-************
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the snapshot task. This parameter takes effect only when the jobType parameter is set to Snapshot.
     *
     * @var snapshotJobDetail
     */
    public $snapshotJobDetail;

    /**
     * @description The details of the transcoding task. This parameter takes effect only when the jobType parameter is set to Transcode.
     *
     * @var transcodeJobDetail
     */
    public $transcodeJobDetail;
    protected $_name = [
        'AIJobDetail' => 'AIJobDetail',
        'jobType' => 'JobType',
        'requestId' => 'RequestId',
        'snapshotJobDetail' => 'SnapshotJobDetail',
        'transcodeJobDetail' => 'TranscodeJobDetail',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIJobDetail) {
            $res['AIJobDetail'] = null !== $this->AIJobDetail ? $this->AIJobDetail->toMap() : null;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->snapshotJobDetail) {
            $res['SnapshotJobDetail'] = null !== $this->snapshotJobDetail ? $this->snapshotJobDetail->toMap() : null;
        }
        if (null !== $this->transcodeJobDetail) {
            $res['TranscodeJobDetail'] = null !== $this->transcodeJobDetail ? $this->transcodeJobDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIJobDetail'])) {
            $model->AIJobDetail = AIJobDetail::fromMap($map['AIJobDetail']);
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SnapshotJobDetail'])) {
            $model->snapshotJobDetail = snapshotJobDetail::fromMap($map['SnapshotJobDetail']);
        }
        if (isset($map['TranscodeJobDetail'])) {
            $model->transcodeJobDetail = transcodeJobDetail::fromMap($map['TranscodeJobDetail']);
        }

        return $model;
    }
}
