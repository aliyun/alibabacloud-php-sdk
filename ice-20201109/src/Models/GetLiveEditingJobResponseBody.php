<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobResponseBody\liveEditingJob;
use AlibabaCloud\Tea\Model;

class GetLiveEditingJobResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var liveEditingJob
     */
    public $liveEditingJob;
    protected $_name = [
        'requestId'      => 'RequestId',
        'liveEditingJob' => 'LiveEditingJob',
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
        if (null !== $this->liveEditingJob) {
            $res['LiveEditingJob'] = null !== $this->liveEditingJob ? $this->liveEditingJob->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLiveEditingJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LiveEditingJob'])) {
            $model->liveEditingJob = liveEditingJob::fromMap($map['LiveEditingJob']);
        }

        return $model;
    }
}
