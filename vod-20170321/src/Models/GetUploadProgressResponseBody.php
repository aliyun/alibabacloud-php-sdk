<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetUploadProgressResponseBody\uploadProgress;

class GetUploadProgressResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var uploadProgress
     */
    public $uploadProgress;
    protected $_name = [
        'requestId' => 'RequestId',
        'uploadProgress' => 'UploadProgress',
    ];

    public function validate()
    {
        if (null !== $this->uploadProgress) {
            $this->uploadProgress->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->uploadProgress) {
            $res['UploadProgress'] = null !== $this->uploadProgress ? $this->uploadProgress->toArray($noStream) : $this->uploadProgress;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UploadProgress'])) {
            $model->uploadProgress = uploadProgress::fromMap($map['UploadProgress']);
        }

        return $model;
    }
}
