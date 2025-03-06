<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SetApiProductsAuthoritiesShrinkRequest extends Model
{
    /**
     * @description The API products.
     *
     * This parameter is required.
     * @var string
     */
    public $apiProductIdsShrink;

    /**
     * @description The application ID.
     *
     * This parameter is required.
     * @example 111385984
     *
     * @var int
     */
    public $appId;

    /**
     * @description 授权有效时间的截止时间，请设置格林尼治标准时间(GMT), 如果为空，即为授权永久有效。
     *
     * @example 2023-06-12T03:07:37Z
     *
     * @var string
     */
    public $authValidTime;

    /**
     * @description The authorization description.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'apiProductIdsShrink' => 'ApiProductIds',
        'appId'               => 'AppId',
        'authValidTime'       => 'AuthValidTime',
        'description'         => 'Description',
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
        if (null !== $this->authValidTime) {
            $res['AuthValidTime'] = $this->authValidTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetApiProductsAuthoritiesShrinkRequest
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
        if (isset($map['AuthValidTime'])) {
            $model->authValidTime = $map['AuthValidTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
