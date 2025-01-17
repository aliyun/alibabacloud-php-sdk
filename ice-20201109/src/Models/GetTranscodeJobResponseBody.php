<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob;

class GetTranscodeJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var transcodeParentJob
     */
    public $transcodeParentJob;
    protected $_name = [
        'requestId'          => 'RequestId',
        'transcodeParentJob' => 'TranscodeParentJob',
    ];

    public function validate()
    {
        if (null !== $this->transcodeParentJob) {
            $this->transcodeParentJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->transcodeParentJob) {
            $res['TranscodeParentJob'] = null !== $this->transcodeParentJob ? $this->transcodeParentJob->toArray($noStream) : $this->transcodeParentJob;
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

        if (isset($map['TranscodeParentJob'])) {
            $model->transcodeParentJob = transcodeParentJob::fromMap($map['TranscodeParentJob']);
        }

        return $model;
    }
}
