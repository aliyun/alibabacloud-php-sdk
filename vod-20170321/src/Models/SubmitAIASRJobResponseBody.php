<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIASRJobResponseBody\AIASRJob;

class SubmitAIASRJobResponseBody extends Model
{
    /**
     * @var AIASRJob
     */
    public $AIASRJob;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIASRJob' => 'AIASRJob',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIASRJob) {
            $this->AIASRJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIASRJob) {
            $res['AIASRJob'] = null !== $this->AIASRJob ? $this->AIASRJob->toArray($noStream) : $this->AIASRJob;
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
        if (isset($map['AIASRJob'])) {
            $model->AIASRJob = AIASRJob::fromMap($map['AIASRJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
