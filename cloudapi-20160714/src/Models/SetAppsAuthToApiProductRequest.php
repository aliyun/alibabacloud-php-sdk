<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SetAppsAuthToApiProductRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 117b7a64a8b3f064eaa4a47ac62aac5e
     *
     * @var string
     */
    public $apiProductId;

    /**
     * @description This parameter is required.
     *
     * @var int[]
     */
    public $appIds;

    /**
     * @example 2023-05-31T08:15:39Z
     *
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
        'apiProductId'  => 'ApiProductId',
        'appIds'        => 'AppIds',
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
        if (null !== $this->apiProductId) {
            $res['ApiProductId'] = $this->apiProductId;
        }
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
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
     * @return SetAppsAuthToApiProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProductId'])) {
            $model->apiProductId = $map['ApiProductId'];
        }
        if (isset($map['AppIds'])) {
            if (!empty($map['AppIds'])) {
                $model->appIds = $map['AppIds'];
            }
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
