<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaProducingJobResponseBody\mediaProducingJob;

class GetMediaProducingJobResponseBody extends Model
{
    /**
     * @var mediaProducingJob
     */
    public $mediaProducingJob;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaProducingJob' => 'MediaProducingJob',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaProducingJob) {
            $this->mediaProducingJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaProducingJob) {
            $res['MediaProducingJob'] = null !== $this->mediaProducingJob ? $this->mediaProducingJob->toArray($noStream) : $this->mediaProducingJob;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MediaProducingJob'])) {
            $model->mediaProducingJob = mediaProducingJob::fromMap($map['MediaProducingJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
