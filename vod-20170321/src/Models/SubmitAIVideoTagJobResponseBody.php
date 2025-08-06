<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIVideoTagJobResponseBody\AIVideoTagJob;

class SubmitAIVideoTagJobResponseBody extends Model
{
    /**
     * @var AIVideoTagJob
     */
    public $AIVideoTagJob;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIVideoTagJob' => 'AIVideoTagJob',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIVideoTagJob) {
            $this->AIVideoTagJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoTagJob) {
            $res['AIVideoTagJob'] = null !== $this->AIVideoTagJob ? $this->AIVideoTagJob->toArray($noStream) : $this->AIVideoTagJob;
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
        if (isset($map['AIVideoTagJob'])) {
            $model->AIVideoTagJob = AIVideoTagJob::fromMap($map['AIVideoTagJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
