<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetRoutineStagingCodeUploadInfoResponseBody extends Model
{
    /**
     * @description The code version.
     *
     * @example 1710120201067203242
     *
     * @var string
     */
    public $codeVersion;

    /**
     * @description The configuration information that can be used to upload to OSS.
     *
     * @example {
     * "Url": "http://oss_fake_bucket_url",
     * "OSSAccessKeyId": "xxx",
     * "key": "site_er_js/hello.1418586423220543.unstable.js",
     * "callback": "xxx==",
     * "x:codeDescription": "xxx=",
     * "policy": "xxx",
     * "Signature": "xxx="
     * }
     *
     * @var mixed[]
     */
    public $ossPostConfig;

    /**
     * @description The request ID.
     *
     * @example EDBD3EB3-97DA-5465-AEF5-8DCA5DC5E395
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'codeVersion' => 'CodeVersion',
        'ossPostConfig' => 'OssPostConfig',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeVersion) {
            $res['CodeVersion'] = $this->codeVersion;
        }
        if (null !== $this->ossPostConfig) {
            $res['OssPostConfig'] = $this->ossPostConfig;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRoutineStagingCodeUploadInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeVersion'])) {
            $model->codeVersion = $map['CodeVersion'];
        }
        if (isset($map['OssPostConfig'])) {
            $model->ossPostConfig = $map['OssPostConfig'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
