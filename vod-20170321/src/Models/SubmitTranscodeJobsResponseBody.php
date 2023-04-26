<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitTranscodeJobsResponseBody\transcodeJobs;
use AlibabaCloud\Tea\Model;

class SubmitTranscodeJobsResponseBody extends Model
{
    /**
     * @description The ID of the transcoding job that was submitted.
     *
     * @example E4EBD2BF-5EB0-4476-8829-9D94E1B1****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Submits a transcoding job and starts asynchronous transcoding.
     *
     * @var transcodeJobs
     */
    public $transcodeJobs;

    /**
     * @description The ID of the request.
     *
     * @example 9f4a0df7da2c8a81c8c0408c84****
     *
     * @var string
     */
    public $transcodeTaskId;
    protected $_name = [
        'requestId'       => 'RequestId',
        'transcodeJobs'   => 'TranscodeJobs',
        'transcodeTaskId' => 'TranscodeTaskId',
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
        if (null !== $this->transcodeJobs) {
            $res['TranscodeJobs'] = null !== $this->transcodeJobs ? $this->transcodeJobs->toMap() : null;
        }
        if (null !== $this->transcodeTaskId) {
            $res['TranscodeTaskId'] = $this->transcodeTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitTranscodeJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TranscodeJobs'])) {
            $model->transcodeJobs = transcodeJobs::fromMap($map['TranscodeJobs']);
        }
        if (isset($map['TranscodeTaskId'])) {
            $model->transcodeTaskId = $map['TranscodeTaskId'];
        }

        return $model;
    }
}
