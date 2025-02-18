<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupRequest\userMeta;

class AuthorizeInstanceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupId;
    /**
     * @var string[]
     */
    public $authorizeUserIds;
    /**
     * @var string
     */
    public $productType;
    /**
     * @var string[]
     */
    public $unAuthorizeUserIds;
    /**
     * @var userMeta
     */
    public $userMeta;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'authorizeUserIds'   => 'AuthorizeUserIds',
        'productType'        => 'ProductType',
        'unAuthorizeUserIds' => 'UnAuthorizeUserIds',
        'userMeta'           => 'UserMeta',
    ];

    public function validate()
    {
        if (\is_array($this->authorizeUserIds)) {
            Model::validateArray($this->authorizeUserIds);
        }
        if (\is_array($this->unAuthorizeUserIds)) {
            Model::validateArray($this->unAuthorizeUserIds);
        }
        if (null !== $this->userMeta) {
            $this->userMeta->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->authorizeUserIds) {
            if (\is_array($this->authorizeUserIds)) {
                $res['AuthorizeUserIds'] = [];
                $n1                      = 0;
                foreach ($this->authorizeUserIds as $item1) {
                    $res['AuthorizeUserIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->unAuthorizeUserIds) {
            if (\is_array($this->unAuthorizeUserIds)) {
                $res['UnAuthorizeUserIds'] = [];
                $n1                        = 0;
                foreach ($this->unAuthorizeUserIds as $item1) {
                    $res['UnAuthorizeUserIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->userMeta) {
            $res['UserMeta'] = null !== $this->userMeta ? $this->userMeta->toArray($noStream) : $this->userMeta;
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
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['AuthorizeUserIds'])) {
            if (!empty($map['AuthorizeUserIds'])) {
                $model->authorizeUserIds = [];
                $n1                      = 0;
                foreach ($map['AuthorizeUserIds'] as $item1) {
                    $model->authorizeUserIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['UnAuthorizeUserIds'])) {
            if (!empty($map['UnAuthorizeUserIds'])) {
                $model->unAuthorizeUserIds = [];
                $n1                        = 0;
                foreach ($map['UnAuthorizeUserIds'] as $item1) {
                    $model->unAuthorizeUserIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UserMeta'])) {
            $model->userMeta = userMeta::fromMap($map['UserMeta']);
        }

        return $model;
    }
}
