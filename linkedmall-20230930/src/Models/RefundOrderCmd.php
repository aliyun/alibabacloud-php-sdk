<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class RefundOrderCmd extends Model
{
    /**
     * @var int
     */
    public $applyReasonTextId;

    /**
     * @var string
     */
    public $applyReasonTips;

    /**
     * @var int
     */
    public $applyRefundCount;

    /**
     * @var int
     */
    public $applyRefundFee;

    /**
     * @var int
     */
    public $bizClaimType;

    /**
     * @var int
     */
    public $goodsStatus;

    /**
     * @var string
     */
    public $leaveMessage;

    /**
     * @var LeavePictureList[]
     */
    public $leavePictureLists;

    /**
     * @var string
     */
    public $orderLineId;
    protected $_name = [
        'applyReasonTextId' => 'applyReasonTextId',
        'applyReasonTips' => 'applyReasonTips',
        'applyRefundCount' => 'applyRefundCount',
        'applyRefundFee' => 'applyRefundFee',
        'bizClaimType' => 'bizClaimType',
        'goodsStatus' => 'goodsStatus',
        'leaveMessage' => 'leaveMessage',
        'leavePictureLists' => 'leavePictureLists',
        'orderLineId' => 'orderLineId',
    ];

    public function validate()
    {
        if (\is_array($this->leavePictureLists)) {
            Model::validateArray($this->leavePictureLists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->leavePictureLists)) {
                $res['leavePictureLists'] = [];
                $n1 = 0;
                foreach ($this->leavePictureLists as $item1) {
                    $res['leavePictureLists'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->orderLineId) {
            $res['orderLineId'] = $this->orderLineId;
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
                $n1 = 0;
                foreach ($map['leavePictureLists'] as $item1) {
                    $model->leavePictureLists[$n1++] = LeavePictureList::fromMap($item1);
                }
            }
        }

        if (isset($map['orderLineId'])) {
            $model->orderLineId = $map['orderLineId'];
        }

        return $model;
    }
}
