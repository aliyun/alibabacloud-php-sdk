<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIVideoCoverJobResponseBody\AIVideoCoverJob;

class SubmitAIVideoCoverJobResponseBody extends Model
{
    /**
     * @var AIVideoCoverJob
     */
    public $AIVideoCoverJob;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIVideoCoverJob' => 'AIVideoCoverJob',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIVideoCoverJob) {
            $this->AIVideoCoverJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoCoverJob) {
            $res['AIVideoCoverJob'] = null !== $this->AIVideoCoverJob ? $this->AIVideoCoverJob->toArray($noStream) : $this->AIVideoCoverJob;
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
        if (isset($map['AIVideoCoverJob'])) {
            $model->AIVideoCoverJob = AIVideoCoverJob::fromMap($map['AIVideoCoverJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
