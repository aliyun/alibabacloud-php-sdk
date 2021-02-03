<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaProducingJobResponseBody\mediaProducingJob;
use AlibabaCloud\Tea\Model;

class GetMediaProducingJobResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var mediaProducingJob
     */
    public $mediaProducingJob;
    protected $_name = [
        'requestId'         => 'RequestId',
        'mediaProducingJob' => 'MediaProducingJob',
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
        if (null !== $this->mediaProducingJob) {
            $res['MediaProducingJob'] = null !== $this->mediaProducingJob ? $this->mediaProducingJob->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaProducingJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MediaProducingJob'])) {
            $model->mediaProducingJob = mediaProducingJob::fromMap($map['MediaProducingJob']);
        }

        return $model;
    }
}
