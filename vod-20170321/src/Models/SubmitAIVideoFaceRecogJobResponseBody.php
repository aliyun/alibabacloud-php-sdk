<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIVideoFaceRecogJobResponseBody\AIVideoFaceRecogJob;

class SubmitAIVideoFaceRecogJobResponseBody extends Model
{
    /**
     * @var AIVideoFaceRecogJob
     */
    public $AIVideoFaceRecogJob;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIVideoFaceRecogJob' => 'AIVideoFaceRecogJob',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIVideoFaceRecogJob) {
            $this->AIVideoFaceRecogJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoFaceRecogJob) {
            $res['AIVideoFaceRecogJob'] = null !== $this->AIVideoFaceRecogJob ? $this->AIVideoFaceRecogJob->toArray($noStream) : $this->AIVideoFaceRecogJob;
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
        if (isset($map['AIVideoFaceRecogJob'])) {
            $model->AIVideoFaceRecogJob = AIVideoFaceRecogJob::fromMap($map['AIVideoFaceRecogJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
