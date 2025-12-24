<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class GenerateUploadAuthResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessId;

    /**
     * @var string
     */
    public $downLoadUrl;

    /**
     * @var string
     */
    public $encryptedKey;

    /**
     * @var int
     */
    public $expire;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $plaintextKey;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessId' => 'AccessId',
        'downLoadUrl' => 'DownLoadUrl',
        'encryptedKey' => 'EncryptedKey',
        'expire' => 'Expire',
        'host' => 'Host',
        'key' => 'Key',
        'plaintextKey' => 'PlaintextKey',
        'policy' => 'Policy',
        'requestId' => 'RequestId',
        'securityToken' => 'SecurityToken',
        'signature' => 'Signature',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }

        if (null !== $this->downLoadUrl) {
            $res['DownLoadUrl'] = $this->downLoadUrl;
        }

        if (null !== $this->encryptedKey) {
            $res['EncryptedKey'] = $this->encryptedKey;
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

        if (null !== $this->plaintextKey) {
            $res['PlaintextKey'] = $this->plaintextKey;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
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
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }

        if (isset($map['DownLoadUrl'])) {
            $model->downLoadUrl = $map['DownLoadUrl'];
        }

        if (isset($map['EncryptedKey'])) {
            $model->encryptedKey = $map['EncryptedKey'];
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

        if (isset($map['PlaintextKey'])) {
            $model->plaintextKey = $map['PlaintextKey'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
