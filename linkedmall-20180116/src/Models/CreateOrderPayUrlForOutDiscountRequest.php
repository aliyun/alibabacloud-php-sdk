<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class CreateOrderPayUrlForOutDiscountRequest extends Model
{
    /**
     * @example LMALL20****201229
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 20882****3220453
     *
     * @var string
     */
    public $bizUid;

    /**
     * @example {"addressId":"158*****11","deliveryInfoId":"20","extJson":{"subBizCode":"defaultSubBizCode"},"orderItems":[{"lmItemId":"1002****123-67150****12","number":1,"outDiscountFee":"0","price":"1","skuId":4830321*****}],"outDiscountInfos":{"promotionInfos":[],"totalDiscountFee":"0"},"postFee":0,"serviceType":-4}
     *
     * @var string
     */
    public $buyInfo;

    /**
     * @example 2088****23220453
     *
     * @var string
     */
    public $thirdPartyUserId;

    /**
     * @example true
     *
     * @var bool
     */
    public $useAnonymousTbAccount;
    protected $_name = [
        'bizId'                 => 'BizId',
        'bizUid'                => 'BizUid',
        'buyInfo'               => 'BuyInfo',
        'thirdPartyUserId'      => 'ThirdPartyUserId',
        'useAnonymousTbAccount' => 'UseAnonymousTbAccount',
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
        if (null !== $this->bizUid) {
            $res['BizUid'] = $this->bizUid;
        }
        if (null !== $this->buyInfo) {
            $res['BuyInfo'] = $this->buyInfo;
        }
        if (null !== $this->thirdPartyUserId) {
            $res['ThirdPartyUserId'] = $this->thirdPartyUserId;
        }
        if (null !== $this->useAnonymousTbAccount) {
            $res['UseAnonymousTbAccount'] = $this->useAnonymousTbAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrderPayUrlForOutDiscountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizUid'])) {
            $model->bizUid = $map['BizUid'];
        }
        if (isset($map['BuyInfo'])) {
            $model->buyInfo = $map['BuyInfo'];
        }
        if (isset($map['ThirdPartyUserId'])) {
            $model->thirdPartyUserId = $map['ThirdPartyUserId'];
        }
        if (isset($map['UseAnonymousTbAccount'])) {
            $model->useAnonymousTbAccount = $map['UseAnonymousTbAccount'];
        }

        return $model;
    }
}
