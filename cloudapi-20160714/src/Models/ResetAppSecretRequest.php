<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ResetAppSecretRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $appKey;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'appKey'        => 'AppKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        return $model;
    }
}
