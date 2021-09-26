<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20181029\Models;

use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\GenerateUploadAuthResponseBody\uploadConfig;
use AlibabaCloud\Tea\Model;

class GenerateUploadAuthResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var uploadConfig
     */
    public $uploadConfig;
    protected $_name = [
        'requestId'    => 'RequestId',
        'uploadConfig' => 'UploadConfig',
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
        if (null !== $this->uploadConfig) {
            $res['UploadConfig'] = null !== $this->uploadConfig ? $this->uploadConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateUploadAuthResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UploadConfig'])) {
            $model->uploadConfig = uploadConfig::fromMap($map['UploadConfig']);
        }

        return $model;
    }
}
