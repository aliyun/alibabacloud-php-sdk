<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class RemoveApiProductsAuthoritiesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $apiProductIdsShrink;

    /**
     * @example 110982490
     *
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'apiProductIdsShrink' => 'ApiProductIds',
        'appId'               => 'AppId',
        'securityToken'       => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProductIdsShrink) {
            $res['ApiProductIds'] = $this->apiProductIdsShrink;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveApiProductsAuthoritiesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProductIds'])) {
            $model->apiProductIdsShrink = $map['ApiProductIds'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
