<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class RefundOrderCmd extends Model
{
    /**
     * @example 47821
     *
     * @var int
     */
    public $applyReasonTextId;

    /**
     * @example 不想要了
     *
     * @var string
     */
    public $applyReasonTips;

    /**
     * @example 1
     *
     * @var int
     */
    public $applyRefundCount;

    /**
     * @example 100
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
     * @example 1
     *
     * @var int
     */
    public $goodsStatus;

    /**
     * @example 不想要了
     *
     * @var string
     */
    public $leaveMessage;

    /**
     * @var LeavePictureList[]
     */
    public $leavePictureLists;

    /**
     * @example 6692****5458
     *
     * @var string
     */
    public $orderLineId;
    protected $_name = [
        'applyReasonTextId' => 'applyReasonTextId',
        'applyReasonTips'   => 'applyReasonTips',
        'applyRefundCount'  => 'applyRefundCount',
        'applyRefundFee'    => 'applyRefundFee',
        'bizClaimType'      => 'bizClaimType',
        'goodsStatus'       => 'goodsStatus',
        'leaveMessage'      => 'leaveMessage',
        'leavePictureLists' => 'leavePictureLists',
        'orderLineId'       => 'orderLineId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyReasonTextId) {
            $res['applyReasonTextId'] = $this->applyReasonTextId;
        }
        if (null !== $this->applyReasonTips) {
            $res['applyReasonTips'] = $this->applyReasonTips;
        }
        if (null !== $this->applyRefundCount) {
            $res['applyRefundCount'] = $this->applyRefundCount;
        }
        if (null !== $this->applyRefundFee) {
            $res['applyRefundFee'] = $this->applyRefundFee;
        }
        if (null !== $this->bizClaimType) {
            $res['bizClaimType'] = $this->bizClaimType;
        }
        if (null !== $this->goodsStatus) {
            $res['goodsStatus'] = $this->goodsStatus;
        }
        if (null !== $this->leaveMessage) {
            $res['leaveMessage'] = $this->leaveMessage;
        }
        if (null !== $this->leavePictureLists) {
            $res['leavePictureLists'] = [];
            if (null !== $this->leavePictureLists && \is_array($this->leavePictureLists)) {
                $n = 0;
                foreach ($this->leavePictureLists as $item) {
                    $res['leavePictureLists'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderLineId) {
            $res['orderLineId'] = $this->orderLineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefundOrderCmd
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applyReasonTextId'])) {
            $model->applyReasonTextId = $map['applyReasonTextId'];
        }
        if (isset($map['applyReasonTips'])) {
            $model->applyReasonTips = $map['applyReasonTips'];
        }
        if (isset($map['applyRefundCount'])) {
            $model->applyRefundCount = $map['applyRefundCount'];
        }
        if (isset($map['applyRefundFee'])) {
            $model->applyRefundFee = $map['applyRefundFee'];
        }
        if (isset($map['bizClaimType'])) {
            $model->bizClaimType = $map['bizClaimType'];
        }
        if (isset($map['goodsStatus'])) {
            $model->goodsStatus = $map['goodsStatus'];
        }
        if (isset($map['leaveMessage'])) {
            $model->leaveMessage = $map['leaveMessage'];
        }
        if (isset($map['leavePictureLists'])) {
            if (!empty($map['leavePictureLists'])) {
                $model->leavePictureLists = [];
                $n                        = 0;
                foreach ($map['leavePictureLists'] as $item) {
                    $model->leavePictureLists[$n++] = null !== $item ? LeavePictureList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['orderLineId'])) {
            $model->orderLineId = $map['orderLineId'];
        }

        return $model;
    }
}
