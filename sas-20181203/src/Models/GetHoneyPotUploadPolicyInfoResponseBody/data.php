<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneyPotUploadPolicyInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The key ID that is required for the file upload.
     *
     * @example LTAI4G1mgPbjvGQuiV1X****
     *
     * @var string
     */
    public $accessid;

    /**
     * @description The expiration time of the URL. The value is a timestamp. You can use the value to determine whether the URL expires. If the expiration time arrives, you can no longer use the URL to upload files.
     *
     * @example 1661443200000
     *
     * @var string
     */
    public $expire;

    /**
     * @description The request URL during the upload.
     *
     * @example https://aegis-update-static-file.oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @description The full path of the file in OSS. The file is uploaded by calling the OSS PostObject operation.
     *
     * @example HONEYPOT_FILE/1766185894104675_169********
     *
     * @var string
     */
    public $key;

    /**
     * @description The limits that are imposed on the file upload. The limits include the file size.
     *
     * @example eyJleHBpcmF0aW9uIjoiMjAyMy0wOS0wMVQwMzoyNTozNS44MzZaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsMTA0ODU3NjAwXSxbInN0YXJ0cy13aXRoIiwiJGtleSIsIkhPTkVZUE9UX0ZJTEUvMTc2NjE4NTg5NDEwNDY3NV8xNjkzNTM4NDM1N*****************
     *
     * @var string
     */
    public $policy;

    /**
     * @description The signature that is calculated based on **AccessKeySecret** and **Policy**. When you call an Object Storage Service (OSS) API operation, OSS uses the signature information to verify the POST request.
     *
     * @example wKPqlFneNTZPn52k2Rz9GTY*****
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessid'  => 'Accessid',
        'expire'    => 'Expire',
        'host'      => 'Host',
        'key'       => 'Key',
        'policy'    => 'Policy',
        'signature' => 'Signature',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
