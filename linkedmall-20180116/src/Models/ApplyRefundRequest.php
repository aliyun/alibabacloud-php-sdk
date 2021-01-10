<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ApplyRefundRequest\leavePictureList;
use AlibabaCloud\Tea\Model;

class ApplyRefundRequest extends Model
{
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
    public $subLmOrderId;

    /**
     * @var int
     */
    public $bizClaimType;

    /**
     * @var int
     */
    public $applyRefundFee;

    /**
     * @var int
     */
    public $applyRefundCount;

    /**
     * @var int
     */
    public $applyReasonTextId;

    /**
     * @var string
     */
    public $leaveMessage;

    /**
     * @var int
     */
    public $goodsStatus;

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

    /**
     * @var leavePictureList[]
     */
    public $leavePictureList;
    protected $_name = [
        'bizId'                 => 'BizId',
        'bizUid'                => 'BizUid',
        'subLmOrderId'          => 'SubLmOrderId',
        'bizClaimType'          => 'BizClaimType',
        'applyRefundFee'        => 'ApplyRefundFee',
        'applyRefundCount'      => 'ApplyRefundCount',
        'applyReasonTextId'     => 'ApplyReasonTextId',
        'leaveMessage'          => 'LeaveMessage',
        'goodsStatus'           => 'GoodsStatus',
        'useAnonymousTbAccount' => 'UseAnonymousTbAccount',
        'thirdPartyUserId'      => 'ThirdPartyUserId',
        'accountType'           => 'AccountType',
        'leavePictureList'      => 'LeavePictureList',
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
        if (null !== $this->subLmOrderId) {
            $res['SubLmOrderId'] = $this->subLmOrderId;
        }
        if (null !== $this->bizClaimType) {
            $res['BizClaimType'] = $this->bizClaimType;
        }
        if (null !== $this->applyRefundFee) {
            $res['ApplyRefundFee'] = $this->applyRefundFee;
        }
        if (null !== $this->applyRefundCount) {
            $res['ApplyRefundCount'] = $this->applyRefundCount;
        }
        if (null !== $this->applyReasonTextId) {
            $res['ApplyReasonTextId'] = $this->applyReasonTextId;
        }
        if (null !== $this->leaveMessage) {
            $res['LeaveMessage'] = $this->leaveMessage;
        }
        if (null !== $this->goodsStatus) {
            $res['GoodsStatus'] = $this->goodsStatus;
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
        if (null !== $this->leavePictureList) {
            $res['LeavePictureList'] = [];
            if (null !== $this->leavePictureList && \is_array($this->leavePictureList)) {
                $n = 0;
                foreach ($this->leavePictureList as $item) {
                    $res['LeavePictureList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizUid'])) {
            $model->bizUid = $map['BizUid'];
        }
        if (isset($map['SubLmOrderId'])) {
            $model->subLmOrderId = $map['SubLmOrderId'];
        }
        if (isset($map['BizClaimType'])) {
            $model->bizClaimType = $map['BizClaimType'];
        }
        if (isset($map['ApplyRefundFee'])) {
            $model->applyRefundFee = $map['ApplyRefundFee'];
        }
        if (isset($map['ApplyRefundCount'])) {
            $model->applyRefundCount = $map['ApplyRefundCount'];
        }
        if (isset($map['ApplyReasonTextId'])) {
            $model->applyReasonTextId = $map['ApplyReasonTextId'];
        }
        if (isset($map['LeaveMessage'])) {
            $model->leaveMessage = $map['LeaveMessage'];
        }
        if (isset($map['GoodsStatus'])) {
            $model->goodsStatus = $map['GoodsStatus'];
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
        if (isset($map['LeavePictureList'])) {
            if (!empty($map['LeavePictureList'])) {
                $model->leavePictureList = [];
                $n                       = 0;
                foreach ($map['LeavePictureList'] as $item) {
                    $model->leavePictureList[$n++] = null !== $item ? leavePictureList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
