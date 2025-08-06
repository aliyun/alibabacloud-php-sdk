<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIVideoCategoryJobResponseBody\AIVideoCategoryJob;

class SubmitAIVideoCategoryJobResponseBody extends Model
{
    /**
     * @var AIVideoCategoryJob
     */
    public $AIVideoCategoryJob;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIVideoCategoryJob' => 'AIVideoCategoryJob',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIVideoCategoryJob) {
            $this->AIVideoCategoryJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoCategoryJob) {
            $res['AIVideoCategoryJob'] = null !== $this->AIVideoCategoryJob ? $this->AIVideoCategoryJob->toArray($noStream) : $this->AIVideoCategoryJob;
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
        if (isset($map['AIVideoCategoryJob'])) {
            $model->AIVideoCategoryJob = AIVideoCategoryJob::fromMap($map['AIVideoCategoryJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
