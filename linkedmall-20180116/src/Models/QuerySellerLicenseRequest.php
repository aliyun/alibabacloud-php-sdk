<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QuerySellerLicenseRequest extends Model
{
    /**
     * @example LMALL20***001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 220680193****
     *
     * @var string
     */
    public $sellerId;

    /**
     * @example 7521****8332932
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'bizId'    => 'BizId',
        'sellerId' => 'SellerId',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySellerLicenseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
