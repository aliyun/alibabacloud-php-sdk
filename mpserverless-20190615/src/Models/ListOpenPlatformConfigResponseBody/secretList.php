<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListOpenPlatformConfigResponseBody;

use AlibabaCloud\Tea\Model;

class secretList extends Model
{
    /**
     * @example -----BEGIN CERTIFICATE----- MIIEwTCCA6mgAwIBAgIQICAJGbUNoqdPr25qpPU7+ -----END CERTIFICATE-----
     *
     * @var string
     */
    public $appCert;

    /**
     * @example 201909116717****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 1r0ElNPFqLI6qgY08*******************************9TIK3RN_5fk9SEMO
     *
     * @var string
     */
    public $appSecret;

    /**
     * @example Alipay
     *
     * @var string
     */
    public $platform;

    /**
     * @example MIIEvgIBADANBgkqhkiG9w0BAQEFAAS
     *
     * @var string
     */
    public $privateKey;

    /**
     * @example -----BEGIN CERTIFICATE----- MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQ -----END CERTIFICATE-----
     *
     * @var string
     */
    public $publicCert;

    /**
     * @example MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ
     *
     * @var string
     */
    public $publicKey;

    /**
     * @example -----BEGIN CERTIFICATE----- MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQ -----END CERTIFICATE-----
     *
     * @var string
     */
    public $rootCert;

    /**
     * @example CERT
     *
     * @var string
     */
    public $signMode;

    /**
     * @example 0e16bb12-14af-****-b24c-5ac1a9a7bb9f
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'appCert'    => 'AppCert',
        'appId'      => 'AppId',
        'appSecret'  => 'AppSecret',
        'platform'   => 'Platform',
        'privateKey' => 'PrivateKey',
        'publicCert' => 'PublicCert',
        'publicKey'  => 'PublicKey',
        'rootCert'   => 'RootCert',
        'signMode'   => 'SignMode',
        'spaceId'    => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCert) {
            $res['AppCert'] = $this->appCert;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->publicCert) {
            $res['PublicCert'] = $this->publicCert;
        }
        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
        }
        if (null !== $this->rootCert) {
            $res['RootCert'] = $this->rootCert;
        }
        if (null !== $this->signMode) {
            $res['SignMode'] = $this->signMode;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
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
        if (isset($map['AppCert'])) {
            $model->appCert = $map['AppCert'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['PublicCert'])) {
            $model->publicCert = $map['PublicCert'];
        }
        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }
        if (isset($map['RootCert'])) {
            $model->rootCert = $map['RootCert'];
        }
        if (isset($map['SignMode'])) {
            $model->signMode = $map['SignMode'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
