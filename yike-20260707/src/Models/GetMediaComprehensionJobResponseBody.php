<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetMediaComprehensionJobResponseBody\mediaComprehensionJob;

class GetMediaComprehensionJobResponseBody extends Model
{
    /**
     * @var mediaComprehensionJob
     */
    public $mediaComprehensionJob;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaComprehensionJob' => 'MediaComprehensionJob',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaComprehensionJob) {
            $this->mediaComprehensionJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaComprehensionJob) {
            $res['MediaComprehensionJob'] = null !== $this->mediaComprehensionJob ? $this->mediaComprehensionJob->toArray($noStream) : $this->mediaComprehensionJob;
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
        if (isset($map['MediaComprehensionJob'])) {
            $model->mediaComprehensionJob = mediaComprehensionJob::fromMap($map['MediaComprehensionJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
