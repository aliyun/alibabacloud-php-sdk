<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetDetectionJobResponseBody\detectionJob;
use AlibabaCloud\Tea\Model;

class GetDetectionJobResponseBody extends Model
{
    /**
     * @var detectionJob
     */
    public $detectionJob;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'detectionJob' => 'DetectionJob',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detectionJob) {
            $res['DetectionJob'] = null !== $this->detectionJob ? $this->detectionJob->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDetectionJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetectionJob'])) {
            $model->detectionJob = detectionJob::fromMap($map['DetectionJob']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
