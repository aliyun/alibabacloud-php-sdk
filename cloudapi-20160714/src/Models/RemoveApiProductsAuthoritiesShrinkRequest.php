<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class RemoveApiProductsAuthoritiesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $apiProductIdsShrink;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'apiProductIdsShrink' => 'ApiProductIds',
        'appId' => 'AppId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
