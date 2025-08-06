<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoPlayInfoResponseBody;

use AlibabaCloud\Dara\Model;

class playInfo extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $accessKeySecret;

    /**
     * @var string
     */
    public $authInfo;

    /**
     * @var string
     */
    public $playDomain;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'accessKeySecret' => 'AccessKeySecret',
        'authInfo' => 'AuthInfo',
        'playDomain' => 'PlayDomain',
        'region' => 'Region',
        'securityToken' => 'SecurityToken',
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

        if (null !== $this->accessKeySecret) {
            $res['AccessKeySecret'] = $this->accessKeySecret;
        }

        if (null !== $this->authInfo) {
            $res['AuthInfo'] = $this->authInfo;
        }

        if (null !== $this->playDomain) {
            $res['PlayDomain'] = $this->playDomain;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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

        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
        }

        if (isset($map['AuthInfo'])) {
            $model->authInfo = $map['AuthInfo'];
        }

        if (isset($map['PlayDomain'])) {
            $model->playDomain = $map['PlayDomain'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
