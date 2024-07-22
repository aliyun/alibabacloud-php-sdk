<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeInstanceGroupRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example aig-9ciijz60n4xsv****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string[]
     */
    public $authorizeUserIds;

    /**
     * @description This parameter is required.
     *
     * @example CloudApp
     *
     * @var string
     */
    public $productType;

    /**
     * @var string[]
     */
    public $unAuthorizeUserIds;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'authorizeUserIds'   => 'AuthorizeUserIds',
        'productType'        => 'ProductType',
        'unAuthorizeUserIds' => 'UnAuthorizeUserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->authorizeUserIds) {
            $res['AuthorizeUserIds'] = $this->authorizeUserIds;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->unAuthorizeUserIds) {
            $res['UnAuthorizeUserIds'] = $this->unAuthorizeUserIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthorizeInstanceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AuthorizeUserIds'])) {
            if (!empty($map['AuthorizeUserIds'])) {
                $model->authorizeUserIds = $map['AuthorizeUserIds'];
            }
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['UnAuthorizeUserIds'])) {
            if (!empty($map['UnAuthorizeUserIds'])) {
                $model->unAuthorizeUserIds = $map['UnAuthorizeUserIds'];
            }
        }

        return $model;
    }
}
