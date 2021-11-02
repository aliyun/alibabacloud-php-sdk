<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderRequest\itemList;
use AlibabaCloud\Tea\Model;

class RenderOrderRequest extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizUid;

    /**
     * @var string
     */
    public $deliveryAddress;

    /**
     * @var string
     */
    public $extJson;

    /**
     * @var itemList[]
     */
    public $itemList;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var string
     */
    public $thirdPartyUserId;

    /**
     * @var bool
     */
    public $useAnonymousTbAccount;
    protected $_name = [
        'accountType'           => 'AccountType',
        'bizId'                 => 'BizId',
        'bizUid'                => 'BizUid',
        'deliveryAddress'       => 'DeliveryAddress',
        'extJson'               => 'ExtJson',
        'itemList'              => 'ItemList',
        'lmItemId'              => 'LmItemId',
        'thirdPartyUserId'      => 'ThirdPartyUserId',
        'useAnonymousTbAccount' => 'UseAnonymousTbAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizUid) {
            $res['BizUid'] = $this->bizUid;
        }
        if (null !== $this->deliveryAddress) {
            $res['DeliveryAddress'] = $this->deliveryAddress;
        }
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }
        if (null !== $this->itemList) {
            $res['ItemList'] = [];
            if (null !== $this->itemList && \is_array($this->itemList)) {
                $n = 0;
                foreach ($this->itemList as $item) {
                    $res['ItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
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
     * @return RenderOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizUid'])) {
            $model->bizUid = $map['BizUid'];
        }
        if (isset($map['DeliveryAddress'])) {
            $model->deliveryAddress = $map['DeliveryAddress'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }
        if (isset($map['ItemList'])) {
            if (!empty($map['ItemList'])) {
                $model->itemList = [];
                $n               = 0;
                foreach ($map['ItemList'] as $item) {
                    $model->itemList[$n++] = null !== $item ? itemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
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
