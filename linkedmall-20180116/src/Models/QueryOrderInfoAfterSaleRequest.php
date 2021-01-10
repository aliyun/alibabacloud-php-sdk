<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryOrderInfoAfterSaleRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $channelUserId;

    /**
     * @var string
     */
    public $lmOrderId;

    /**
     * @var bool
     */
    public $useAnonymousTbAccount;

    /**
     * @var string
     */
    public $thirdPartyUserId;

    /**
     * @var string
     */
    public $accountType;
    protected $_name = [
        'bizId'                 => 'BizId',
        'channelUserId'         => 'ChannelUserId',
        'lmOrderId'             => 'LmOrderId',
        'useAnonymousTbAccount' => 'UseAnonymousTbAccount',
        'thirdPartyUserId'      => 'ThirdPartyUserId',
        'accountType'           => 'AccountType',
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
        if (null !== $this->channelUserId) {
            $res['ChannelUserId'] = $this->channelUserId;
        }
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }
        if (null !== $this->useAnonymousTbAccount) {
            $res['UseAnonymousTbAccount'] = $this->useAnonymousTbAccount;
        }
        if (null !== $this->thirdPartyUserId) {
            $res['ThirdPartyUserId'] = $this->thirdPartyUserId;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrderInfoAfterSaleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ChannelUserId'])) {
            $model->channelUserId = $map['ChannelUserId'];
        }
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }
        if (isset($map['UseAnonymousTbAccount'])) {
            $model->useAnonymousTbAccount = $map['UseAnonymousTbAccount'];
        }
        if (isset($map['ThirdPartyUserId'])) {
            $model->thirdPartyUserId = $map['ThirdPartyUserId'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }

        return $model;
    }
}
