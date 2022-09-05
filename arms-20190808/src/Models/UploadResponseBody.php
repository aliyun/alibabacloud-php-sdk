<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\UploadResponseBody\uploadResult;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uploadResult) {
            $res['UploadResult'] = null !== $this->uploadResult ? $this->uploadResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadResponseBody
     */
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
