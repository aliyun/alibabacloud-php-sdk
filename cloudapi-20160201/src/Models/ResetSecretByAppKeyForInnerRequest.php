<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\Tea\Model;

class ResetSecretByAppKeyForInnerRequest extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $newAppKey;

    /**
     * @var string
     */
    public $newAppSecret;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'aliUid'        => 'AliUid',
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
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
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
     * @return ResetSecretByAppKeyForInnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
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
