<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeDynamicDictUploadInfoResponseBody extends Model
{
    /**
     * @description The AccessKey ID that is used to access OSS.
     *
     * @example LTAI4G1mgPbjvG********
     *
     * @var string
     */
    public $accessid;

    /**
     * @description The validity period of the signature. The value is a UNIX timestamp.
     *
     * @example 1719919893
     *
     * @var string
     */
    public $expire;

    /**
     * @description The OSS endpoint.
     *
     * @example https://aegis-update-static-file.oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @description The name of the OSS object.
     *
     * @example DegradePool_Offset_****
     *
     * @var string
     */
    public $key;

    /**
     * @description The OSS security policy.
     *
     * @example eyJleHBpcmF0aW9uIjoiMjAyNC0wNy0wMlQxMTozMTozMy40MjlaIiwiY29uZGl0aW9********
     *
     * @var string
     */
    public $policy;

    /**
     * @description The request ID.
     *
     * @example A3D7C47D-3F11-57BB-90E8-E5C20C61***
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The signature that is calculated based on **AccessKeySecret** and **Policy**. When you call an OSS API operation, OSS uses the signature information to check the validity of the POST request.
     *
     * @example wBiwkhd5LGcLzijtc3FhI****
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessid' => 'Accessid',
        'expire' => 'Expire',
        'host' => 'Host',
        'key' => 'Key',
        'policy' => 'Policy',
        'requestId' => 'RequestId',
        'signature' => 'Signature',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessid) {
            $res['Accessid'] = $this->accessid;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDynamicDictUploadInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessid'])) {
            $model->accessid = $map['Accessid'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
