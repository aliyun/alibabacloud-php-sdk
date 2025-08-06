<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIVideoCensorJobResponseBody\AIVideoCensorJob;

class SubmitAIVideoCensorJobResponseBody extends Model
{
    /**
     * @var AIVideoCensorJob
     */
    public $AIVideoCensorJob;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIVideoCensorJob' => 'AIVideoCensorJob',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIVideoCensorJob) {
            $this->AIVideoCensorJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoCensorJob) {
            $res['AIVideoCensorJob'] = null !== $this->AIVideoCensorJob ? $this->AIVideoCensorJob->toArray($noStream) : $this->AIVideoCensorJob;
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
        if (isset($map['AIVideoCensorJob'])) {
            $model->AIVideoCensorJob = AIVideoCensorJob::fromMap($map['AIVideoCensorJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
