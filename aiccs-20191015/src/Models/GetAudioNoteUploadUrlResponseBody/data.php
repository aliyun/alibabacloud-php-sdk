<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAudioNoteUploadUrlResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $expire;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $key;

    /**
     * @var int
     */
    public $maxFileSize;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $uploadUrl;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'expire' => 'Expire',
        'filePath' => 'FilePath',
        'host' => 'Host',
        'key' => 'Key',
        'maxFileSize' => 'MaxFileSize',
        'method' => 'Method',
        'policy' => 'Policy',
        'securityToken' => 'SecurityToken',
        'signature' => 'Signature',
        'uploadUrl' => 'UploadUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }

        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->maxFileSize) {
            $res['MaxFileSize'] = $this->maxFileSize;
        }

        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        if (null !== $this->uploadUrl) {
            $res['UploadUrl'] = $this->uploadUrl;
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
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }

        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['MaxFileSize'])) {
            $model->maxFileSize = $map['MaxFileSize'];
        }

        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        if (isset($map['UploadUrl'])) {
            $model->uploadUrl = $map['UploadUrl'];
        }

        return $model;
    }
}
