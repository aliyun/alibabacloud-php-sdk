<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobResponseBody\liveEditingJob;

class GetLiveEditingJobResponseBody extends Model
{
    /**
     * @var liveEditingJob
     */
    public $liveEditingJob;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveEditingJob' => 'LiveEditingJob',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->liveEditingJob) {
            $this->liveEditingJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveEditingJob) {
            $res['LiveEditingJob'] = null !== $this->liveEditingJob ? $this->liveEditingJob->toArray($noStream) : $this->liveEditingJob;
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
        if (isset($map['LiveEditingJob'])) {
            $model->liveEditingJob = liveEditingJob::fromMap($map['LiveEditingJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
