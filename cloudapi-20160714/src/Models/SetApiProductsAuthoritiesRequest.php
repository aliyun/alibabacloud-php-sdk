<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SetApiProductsAuthoritiesRequest extends Model
{
    /**
     * @var string[]
     */
    public $apiProductIds;

    /**
     * @example 111385984
     *
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $authValidTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'apiProductIds' => 'ApiProductIds',
        'appId'         => 'AppId',
        'authValidTime' => 'AuthValidTime',
        'description'   => 'Description',
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
     * @return SetApiProductsAuthoritiesRequest
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
