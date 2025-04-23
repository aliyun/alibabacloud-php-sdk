<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetJobDetailResponseBody\AIJobDetail;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetJobDetailResponseBody\snapshotJobDetail;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetJobDetailResponseBody\transcodeJobDetail;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetJobDetailResponseBody\workflowTaskDetail;

class GetJobDetailResponseBody extends Model
{
    /**
     * @var AIJobDetail
     */
    public $AIJobDetail;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var snapshotJobDetail
     */
    public $snapshotJobDetail;

    /**
     * @var transcodeJobDetail
     */
    public $transcodeJobDetail;

    /**
     * @var workflowTaskDetail
     */
    public $workflowTaskDetail;
    protected $_name = [
        'AIJobDetail' => 'AIJobDetail',
        'jobType' => 'JobType',
        'requestId' => 'RequestId',
        'snapshotJobDetail' => 'SnapshotJobDetail',
        'transcodeJobDetail' => 'TranscodeJobDetail',
        'workflowTaskDetail' => 'WorkflowTaskDetail',
    ];

    public function validate()
    {
        if (null !== $this->AIJobDetail) {
            $this->AIJobDetail->validate();
        }
        if (null !== $this->snapshotJobDetail) {
            $this->snapshotJobDetail->validate();
        }
        if (null !== $this->transcodeJobDetail) {
            $this->transcodeJobDetail->validate();
        }
        if (null !== $this->workflowTaskDetail) {
            $this->workflowTaskDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIJobDetail) {
            $res['AIJobDetail'] = null !== $this->AIJobDetail ? $this->AIJobDetail->toArray($noStream) : $this->AIJobDetail;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->snapshotJobDetail) {
            $res['SnapshotJobDetail'] = null !== $this->snapshotJobDetail ? $this->snapshotJobDetail->toArray($noStream) : $this->snapshotJobDetail;
        }

        if (null !== $this->transcodeJobDetail) {
            $res['TranscodeJobDetail'] = null !== $this->transcodeJobDetail ? $this->transcodeJobDetail->toArray($noStream) : $this->transcodeJobDetail;
        }

        if (null !== $this->workflowTaskDetail) {
            $res['WorkflowTaskDetail'] = null !== $this->workflowTaskDetail ? $this->workflowTaskDetail->toArray($noStream) : $this->workflowTaskDetail;
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

        if (isset($map['WorkflowTaskDetail'])) {
            $model->workflowTaskDetail = workflowTaskDetail::fromMap($map['WorkflowTaskDetail']);
        }

        return $model;
    }
}
