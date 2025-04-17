<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GenerateDownloadSecretKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $appEncryptKey;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appEncryptKey' => 'AppEncryptKey',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appEncryptKey) {
            $res['AppEncryptKey'] = $this->appEncryptKey;
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
        if (isset($map['AppEncryptKey'])) {
            $model->appEncryptKey = $map['AppEncryptKey'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
