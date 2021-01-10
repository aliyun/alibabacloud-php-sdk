<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class SaveAntOpenPlatformConfigRequest extends Model
{
    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $publicKey;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $signMode;

    /**
     * @var string
     */
    public $appCert;

    /**
     * @var string
     */
    public $publicCert;

    /**
     * @var string
     */
    public $rootCert;
    protected $_name = [
        'spaceId'    => 'SpaceId',
        'appId'      => 'AppId',
        'publicKey'  => 'PublicKey',
        'privateKey' => 'PrivateKey',
        'signMode'   => 'SignMode',
        'appCert'    => 'AppCert',
        'publicCert' => 'PublicCert',
        'rootCert'   => 'RootCert',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->signMode) {
            $res['SignMode'] = $this->signMode;
        }
        if (null !== $this->appCert) {
            $res['AppCert'] = $this->appCert;
        }
        if (null !== $this->publicCert) {
            $res['PublicCert'] = $this->publicCert;
        }
        if (null !== $this->rootCert) {
            $res['RootCert'] = $this->rootCert;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveAntOpenPlatformConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['SignMode'])) {
            $model->signMode = $map['SignMode'];
        }
        if (isset($map['AppCert'])) {
            $model->appCert = $map['AppCert'];
        }
        if (isset($map['PublicCert'])) {
            $model->publicCert = $map['PublicCert'];
        }
        if (isset($map['RootCert'])) {
            $model->rootCert = $map['RootCert'];
        }

        return $model;
    }
}
