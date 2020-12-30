<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitTranscodeJobsResponseBody\transcodeJobs;
use AlibabaCloud\Tea\Model;

class SubmitTranscodeJobsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var transcodeJobs
     */
    public $transcodeJobs;

    /**
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
