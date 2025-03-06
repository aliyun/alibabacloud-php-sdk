<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ResetAppSecretRequest extends Model
{
    /**
     * @description The key of the application that is used to make an API call.
     *
     * This parameter is required.
     * @example 60030986
     *
     * @var string
     */
    public $appKey;

    /**
     * @description The new AppKey that you set must be globally unique.
     *
     * @example testAppKey
     *
     * @var string
     */
    public $newAppKey;

    /**
     * @description The new key of the application. To improve compatibility, we recommend that you use other parameters.
     *
     * @example test***
     *
     * @var string
     */
    public $newAppSecret;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'appKey'        => 'AppKey',
        'newAppKey'     => 'NewAppKey',
        'newAppSecret'  => 'NewAppSecret',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->newAppKey) {
            $res['NewAppKey'] = $this->newAppKey;
        }
        if (null !== $this->newAppSecret) {
            $res['NewAppSecret'] = $this->newAppSecret;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetAppSecretRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['NewAppKey'])) {
            $model->newAppKey = $map['NewAppKey'];
        }
        if (isset($map['NewAppSecret'])) {
            $model->newAppSecret = $map['NewAppSecret'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
