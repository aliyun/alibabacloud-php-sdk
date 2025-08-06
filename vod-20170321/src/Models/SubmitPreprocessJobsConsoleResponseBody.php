<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitPreprocessJobsConsoleResponseBody\transcodeJobs;

class SubmitPreprocessJobsConsoleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var transcodeJobs
     */
    public $transcodeJobs;
    protected $_name = [
        'requestId' => 'RequestId',
        'transcodeJobs' => 'TranscodeJobs',
    ];

    public function validate()
    {
        if (null !== $this->transcodeJobs) {
            $this->transcodeJobs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->transcodeJobs) {
            $res['TranscodeJobs'] = null !== $this->transcodeJobs ? $this->transcodeJobs->toArray($noStream) : $this->transcodeJobs;
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

        if (isset($map['TranscodeJobs'])) {
            $model->transcodeJobs = transcodeJobs::fromMap($map['TranscodeJobs']);
        }

        return $model;
    }
}
