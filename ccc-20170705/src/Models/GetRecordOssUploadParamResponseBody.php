<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class GetRecordOssUploadParamResponseBody extends Model
{
    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $ossFileName;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $expires;

    /**
     * @var string
     */
    public $dir;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $ossAccessKeyId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'policy'         => 'Policy',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'signature'      => 'Signature',
        'httpStatusCode' => 'HttpStatusCode',
        'ossFileName'    => 'OssFileName',
        'host'           => 'Host',
        'expires'        => 'Expires',
        'dir'            => 'Dir',
        'code'           => 'Code',
        'ossAccessKeyId' => 'OssAccessKeyId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->ossFileName) {
            $res['OssFileName'] = $this->ossFileName;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->expires) {
            $res['Expires'] = $this->expires;
        }
        if (null !== $this->dir) {
            $res['Dir'] = $this->dir;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->ossAccessKeyId) {
            $res['OssAccessKeyId'] = $this->ossAccessKeyId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRecordOssUploadParamResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['OssFileName'])) {
            $model->ossFileName = $map['OssFileName'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Expires'])) {
            $model->expires = $map['Expires'];
        }
        if (isset($map['Dir'])) {
            $model->dir = $map['Dir'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['OssAccessKeyId'])) {
            $model->ossAccessKeyId = $map['OssAccessKeyId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
