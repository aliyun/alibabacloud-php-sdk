<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\UploadResponseBody\uploadResult;

class UploadResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var uploadResult
     */
    public $uploadResult;
    protected $_name = [
        'requestId'    => 'RequestId',
        'uploadResult' => 'UploadResult',
    ];

    public function validate()
    {
        if (null !== $this->uploadResult) {
            $this->uploadResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->uploadResult) {
            $res['UploadResult'] = null !== $this->uploadResult ? $this->uploadResult->toArray($noStream) : $this->uploadResult;
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

        if (isset($map['UploadResult'])) {
            $model->uploadResult = uploadResult::fromMap($map['UploadResult']);
        }

        return $model;
    }
}
