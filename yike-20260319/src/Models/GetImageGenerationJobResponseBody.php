<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yike\V20260319\Models\GetImageGenerationJobResponseBody\imageGenerationJob;

class GetImageGenerationJobResponseBody extends Model
{
    /**
     * @var imageGenerationJob
     */
    public $imageGenerationJob;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageGenerationJob' => 'ImageGenerationJob',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->imageGenerationJob) {
            $this->imageGenerationJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageGenerationJob) {
            $res['ImageGenerationJob'] = null !== $this->imageGenerationJob ? $this->imageGenerationJob->toArray($noStream) : $this->imageGenerationJob;
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
        if (isset($map['ImageGenerationJob'])) {
            $model->imageGenerationJob = imageGenerationJob::fromMap($map['ImageGenerationJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
