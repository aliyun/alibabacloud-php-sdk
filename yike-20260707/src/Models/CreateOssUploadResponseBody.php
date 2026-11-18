<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yike\V20260707\Models\CreateOssUploadResponseBody\uploadCredentials;

class CreateOssUploadResponseBody extends Model
{
    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $ossUrl;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var uploadCredentials
     */
    public $uploadCredentials;
    protected $_name = [
        'objectKey' => 'ObjectKey',
        'ossUrl' => 'OssUrl',
        'requestId' => 'RequestId',
        'uploadCredentials' => 'UploadCredentials',
    ];

    public function validate()
    {
        if (null !== $this->uploadCredentials) {
            $this->uploadCredentials->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }

        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->uploadCredentials) {
            $res['UploadCredentials'] = null !== $this->uploadCredentials ? $this->uploadCredentials->toArray($noStream) : $this->uploadCredentials;
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
        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }

        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UploadCredentials'])) {
            $model->uploadCredentials = uploadCredentials::fromMap($map['UploadCredentials']);
        }

        return $model;
    }
}
