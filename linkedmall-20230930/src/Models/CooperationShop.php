<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class CooperationShop extends Model
{
    /**
     * @var string
     */
    public $cooperationCompanyId;

    /**
     * @var string
     */
    public $cooperationShopId;

    /**
     * @var string
     */
    public $shopId;
    protected $_name = [
        'cooperationCompanyId' => 'CooperationCompanyId',
        'cooperationShopId'    => 'CooperationShopId',
        'shopId'               => 'shopId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cooperationCompanyId) {
            $res['CooperationCompanyId'] = $this->cooperationCompanyId;
        }
        if (null !== $this->cooperationShopId) {
            $res['CooperationShopId'] = $this->cooperationShopId;
        }
        if (null !== $this->shopId) {
            $res['shopId'] = $this->shopId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CooperationShop
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CooperationCompanyId'])) {
            $model->cooperationCompanyId = $map['CooperationCompanyId'];
        }
        if (isset($map['CooperationShopId'])) {
            $model->cooperationShopId = $map['CooperationShopId'];
        }
        if (isset($map['shopId'])) {
            $model->shopId = $map['shopId'];
        }

        return $model;
    }
}
