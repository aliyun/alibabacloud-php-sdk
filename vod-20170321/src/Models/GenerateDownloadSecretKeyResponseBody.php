<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GenerateDownloadSecretKeyResponseBody extends Model
{
    /**
     * @example ***
     *
     * @var string
     */
    public $appEncryptKey;

    /**
     * @example E99B9BAD-7F9D-552B-A689-B72E92EA040E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appEncryptKey' => 'AppEncryptKey',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GenerateDownloadSecretKeyResponseBody
     */
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
