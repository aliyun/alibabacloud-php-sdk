<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIVideoTerrorismRecogJobResponseBody\AIVideoTerrorismRecogJob;

class SubmitAIVideoTerrorismRecogJobResponseBody extends Model
{
    /**
     * @var AIVideoTerrorismRecogJob
     */
    public $AIVideoTerrorismRecogJob;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIVideoTerrorismRecogJob' => 'AIVideoTerrorismRecogJob',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIVideoTerrorismRecogJob) {
            $this->AIVideoTerrorismRecogJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoTerrorismRecogJob) {
            $res['AIVideoTerrorismRecogJob'] = null !== $this->AIVideoTerrorismRecogJob ? $this->AIVideoTerrorismRecogJob->toArray($noStream) : $this->AIVideoTerrorismRecogJob;
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
        if (isset($map['AIVideoTerrorismRecogJob'])) {
            $model->AIVideoTerrorismRecogJob = AIVideoTerrorismRecogJob::fromMap($map['AIVideoTerrorismRecogJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
