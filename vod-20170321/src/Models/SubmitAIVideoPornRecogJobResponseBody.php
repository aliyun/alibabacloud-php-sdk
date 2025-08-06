<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIVideoPornRecogJobResponseBody\AIVideoPornRecogJob;

class SubmitAIVideoPornRecogJobResponseBody extends Model
{
    /**
     * @var AIVideoPornRecogJob
     */
    public $AIVideoPornRecogJob;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIVideoPornRecogJob' => 'AIVideoPornRecogJob',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIVideoPornRecogJob) {
            $this->AIVideoPornRecogJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoPornRecogJob) {
            $res['AIVideoPornRecogJob'] = null !== $this->AIVideoPornRecogJob ? $this->AIVideoPornRecogJob->toArray($noStream) : $this->AIVideoPornRecogJob;
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
        if (isset($map['AIVideoPornRecogJob'])) {
            $model->AIVideoPornRecogJob = AIVideoPornRecogJob::fromMap($map['AIVideoPornRecogJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
