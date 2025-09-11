<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineWithAssetsCodeVersionResponseBody;

use AlibabaCloud\Dara\Model;

class ossPostConfig extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $OSSAccessKeyId;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $XOssSecurityToken;
    protected $_name = [
        'key' => 'Key',
        'OSSAccessKeyId' => 'OSSAccessKeyId',
        'policy' => 'Policy',
        'signature' => 'Signature',
        'url' => 'Url',
        'XOssSecurityToken' => 'XOssSecurityToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->OSSAccessKeyId) {
            $res['OSSAccessKeyId'] = $this->OSSAccessKeyId;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->XOssSecurityToken) {
            $res['XOssSecurityToken'] = $this->XOssSecurityToken;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['OSSAccessKeyId'])) {
            $model->OSSAccessKeyId = $map['OSSAccessKeyId'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['XOssSecurityToken'])) {
            $model->XOssSecurityToken = $map['XOssSecurityToken'];
        }

        return $model;
    }
}
