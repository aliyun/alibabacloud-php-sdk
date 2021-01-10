<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class GenerateAssistFileUploadUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $fileKey;

    /**
     * @var string
     */
    public $uploadUrl;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fileKey'   => 'FileKey',
        'uploadUrl' => 'UploadUrl',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }
        if (null !== $this->uploadUrl) {
            $res['UploadUrl'] = $this->uploadUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }
        if (isset($map['UploadUrl'])) {
            $model->uploadUrl = $map['UploadUrl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
