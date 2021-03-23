<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class GenerateAssistFileUploadUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $fileKey;

    /**
     * @var string
     */
    public $uploadUrl;
    protected $_name = [
        'requestId' => 'RequestId',
        'fileKey'   => 'FileKey',
        'uploadUrl' => 'UploadUrl',
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
        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }
        if (null !== $this->uploadUrl) {
            $res['UploadUrl'] = $this->uploadUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateAssistFileUploadUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }
        if (isset($map['UploadUrl'])) {
            $model->uploadUrl = $map['UploadUrl'];
        }

        return $model;
    }
}
