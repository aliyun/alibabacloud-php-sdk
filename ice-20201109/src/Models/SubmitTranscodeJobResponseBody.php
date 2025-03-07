<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob;
use AlibabaCloud\Tea\Model;

class SubmitTranscodeJobResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 31E30781-9495-5E2D-A84D-759B0A01E262
     *
     * @var string
     */
    public $requestId;

    /**
     * @description TranscodeParentJobWithSubJobDTO
     *
     * @var transcodeParentJob
     */
    public $transcodeParentJob;
    protected $_name = [
        'requestId'          => 'RequestId',
        'transcodeParentJob' => 'TranscodeParentJob',
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
        if (null !== $this->transcodeParentJob) {
            $res['TranscodeParentJob'] = null !== $this->transcodeParentJob ? $this->transcodeParentJob->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitTranscodeJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TranscodeParentJob'])) {
            $model->transcodeParentJob = transcodeParentJob::fromMap($map['TranscodeParentJob']);
        }

        return $model;
    }
}
