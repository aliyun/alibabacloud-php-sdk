<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobResponseBody\liveEditingJob;
use AlibabaCloud\Tea\Model;

class GetLiveEditingJobResponseBody extends Model
{
    /**
     * @description 直播剪辑任务
     *
     * @var liveEditingJob
     */
    public $liveEditingJob;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveEditingJob' => 'LiveEditingJob',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveEditingJob) {
            $res['LiveEditingJob'] = null !== $this->liveEditingJob ? $this->liveEditingJob->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['LiveEditingJob'])) {
            $model->liveEditingJob = liveEditingJob::fromMap($map['LiveEditingJob']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
