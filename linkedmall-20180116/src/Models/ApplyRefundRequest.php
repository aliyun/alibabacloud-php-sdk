<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ApplyRefundRequest\leavePictureList;
use AlibabaCloud\Tea\Model;

class ApplyRefundRequest extends Model
{
    /**
     * @example ANONY
     *
     * @var string
     */
    public $accountType;

    /**
     * @example 500325
     *
     * @var int
     */
    public $applyReasonTextId;

    /**
     * @example 1
     *
     * @var int
     */
    public $applyRefundCount;

    /**
     * @example 790
     *
     * @var int
     */
    public $applyRefundFee;

    /**
     * @example 1
     *
     * @var int
     */
    public $bizClaimType;

    /**
     * @example LMALL201912230007
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 186******89
     *
     * @var string
     */
    public $bizUid;

    /**
     * @example 4
     *
     * @var int
     */
    public $goodsStatus;

    /**
     * @var string
     */
    public $leaveMessage;

    /**
     * @var leavePictureList[]
     */
    public $leavePictureList;

    /**
     * @example 42******33
     *
     * @var string
     */
    public $subLmOrderId;

    /**
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
        'accountType'           => 'AccountType',
        'applyReasonTextId'     => 'ApplyReasonTextId',
        'applyRefundCount'      => 'ApplyRefundCount',
        'applyRefundFee'        => 'ApplyRefundFee',
        'bizClaimType'          => 'BizClaimType',
        'bizId'                 => 'BizId',
        'bizUid'                => 'BizUid',
        'goodsStatus'           => 'GoodsStatus',
        'leaveMessage'          => 'LeaveMessage',
        'leavePictureList'      => 'LeavePictureList',
        'subLmOrderId'          => 'SubLmOrderId',
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
        if (null !== $this->applyReasonTextId) {
            $res['ApplyReasonTextId'] = $this->applyReasonTextId;
        }
        if (null !== $this->applyRefundCount) {
            $res['ApplyRefundCount'] = $this->applyRefundCount;
        }
        if (null !== $this->applyRefundFee) {
            $res['ApplyRefundFee'] = $this->applyRefundFee;
        }
        if (null !== $this->bizClaimType) {
            $res['BizClaimType'] = $this->bizClaimType;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizUid) {
            $res['BizUid'] = $this->bizUid;
        }
        if (null !== $this->goodsStatus) {
            $res['GoodsStatus'] = $this->goodsStatus;
        }
        if (null !== $this->leaveMessage) {
            $res['LeaveMessage'] = $this->leaveMessage;
        }
        if (null !== $this->leavePictureList) {
            $res['LeavePictureList'] = [];
            if (null !== $this->leavePictureList && \is_array($this->leavePictureList)) {
                $n = 0;
                foreach ($this->leavePictureList as $item) {
                    $res['LeavePictureList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subLmOrderId) {
            $res['SubLmOrderId'] = $this->subLmOrderId;
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
     * @return ApplyRefundRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['ApplyReasonTextId'])) {
            $model->applyReasonTextId = $map['ApplyReasonTextId'];
        }
        if (isset($map['ApplyRefundCount'])) {
            $model->applyRefundCount = $map['ApplyRefundCount'];
        }
        if (isset($map['ApplyRefundFee'])) {
            $model->applyRefundFee = $map['ApplyRefundFee'];
        }
        if (isset($map['BizClaimType'])) {
            $model->bizClaimType = $map['BizClaimType'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizUid'])) {
            $model->bizUid = $map['BizUid'];
        }
        if (isset($map['GoodsStatus'])) {
            $model->goodsStatus = $map['GoodsStatus'];
        }
        if (isset($map['LeaveMessage'])) {
            $model->leaveMessage = $map['LeaveMessage'];
        }
        if (isset($map['LeavePictureList'])) {
            if (!empty($map['LeavePictureList'])) {
                $model->leavePictureList = [];
                $n                       = 0;
                foreach ($map['LeavePictureList'] as $item) {
                    $model->leavePictureList[$n++] = null !== $item ? leavePictureList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SubLmOrderId'])) {
            $model->subLmOrderId = $map['SubLmOrderId'];
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
