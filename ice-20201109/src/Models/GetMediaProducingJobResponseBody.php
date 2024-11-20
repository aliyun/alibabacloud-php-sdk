<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaProducingJobResponseBody\mediaProducingJob;
use AlibabaCloud\Tea\Model;

class GetMediaProducingJobResponseBody extends Model
{
    /**
     * @description The information about the online editing project.
     *
     * @var mediaProducingJob
     */
    public $mediaProducingJob;

    /**
     * @description The request ID.
     *
     * @example ****83B7-7F87-4792-BFE9-63CD2137****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaProducingJob' => 'MediaProducingJob',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaProducingJob) {
            $res['MediaProducingJob'] = null !== $this->mediaProducingJob ? $this->mediaProducingJob->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MediaProducingJob'])) {
            $model->mediaProducingJob = mediaProducingJob::fromMap($map['MediaProducingJob']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
