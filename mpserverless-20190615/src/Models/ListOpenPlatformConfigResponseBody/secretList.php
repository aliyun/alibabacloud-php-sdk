<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListOpenPlatformConfigResponseBody;

use AlibabaCloud\Tea\Model;

class secretList extends Model
{
    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $appSecret;

    /**
     * @var string
     */
    public $publicCert;

    /**
     * @var string
     */
    public $appCert;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $rootCert;

    /**
     * @var string
     */
    public $publicKey;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $signMode;
    protected $_name = [
        'spaceId'    => 'SpaceId',
        'appSecret'  => 'AppSecret',
        'publicCert' => 'PublicCert',
        'appCert'    => 'AppCert',
        'privateKey' => 'PrivateKey',
        'appId'      => 'AppId',
        'rootCert'   => 'RootCert',
        'publicKey'  => 'PublicKey',
        'platform'   => 'Platform',
        'signMode'   => 'SignMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }
        if (null !== $this->publicCert) {
            $res['PublicCert'] = $this->publicCert;
        }
        if (null !== $this->appCert) {
            $res['AppCert'] = $this->appCert;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->rootCert) {
            $res['RootCert'] = $this->rootCert;
        }
        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->signMode) {
            $res['SignMode'] = $this->signMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secretList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }
        if (isset($map['PublicCert'])) {
            $model->publicCert = $map['PublicCert'];
        }
        if (isset($map['AppCert'])) {
            $model->appCert = $map['AppCert'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RootCert'])) {
            $model->rootCert = $map['RootCert'];
        }
        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['SignMode'])) {
            $model->signMode = $map['SignMode'];
        }

        return $model;
    }
}
