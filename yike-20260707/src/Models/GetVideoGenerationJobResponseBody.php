<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoGenerationJobResponseBody\videoGenerationJob;

class GetVideoGenerationJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var videoGenerationJob
     */
    public $videoGenerationJob;
    protected $_name = [
        'requestId' => 'RequestId',
        'videoGenerationJob' => 'VideoGenerationJob',
    ];

    public function validate()
    {
        if (null !== $this->videoGenerationJob) {
            $this->videoGenerationJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->videoGenerationJob) {
            $res['VideoGenerationJob'] = null !== $this->videoGenerationJob ? $this->videoGenerationJob->toArray($noStream) : $this->videoGenerationJob;
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

        if (isset($map['VideoGenerationJob'])) {
            $model->videoGenerationJob = videoGenerationJob::fromMap($map['VideoGenerationJob']);
        }

        return $model;
    }
}
