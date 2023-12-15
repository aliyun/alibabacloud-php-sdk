<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class RemoveApiProductsAuthoritiesRequest extends Model
{
    /**
     * @description The API products.
     *
     * @var string[]
     */
    public $apiProductIds;

    /**
     * @description The application ID.
     *
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
        'apiProductIds' => 'ApiProductIds',
        'appId'         => 'AppId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProductIds) {
            $res['ApiProductIds'] = $this->apiProductIds;
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
     * @return RemoveApiProductsAuthoritiesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProductIds'])) {
            if (!empty($map['ApiProductIds'])) {
                $model->apiProductIds = $map['ApiProductIds'];
            }
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
