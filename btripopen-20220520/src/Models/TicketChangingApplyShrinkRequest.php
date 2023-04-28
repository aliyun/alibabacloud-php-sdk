<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class TicketChangingApplyShrinkRequest extends Model
{
    /**
     * @example dis1234
     *
     * @var string
     */
    public $disOrderId;

    /**
     * @example mid1243
     *
     * @var string
     */
    public $disSubOrderId;

    /**
     * @var int
     */
    public $isVoluntary;

    /**
     * @var string
     */
    public $modifyFlightInfoListShrink;

    /**
     * @example 1s8837sh991hsj92h
     *
     * @var string
     */
    public $otaItemId;

    /**
     * @var string
     */
    public $reason;

    /**
     * @example us88s2bsbin22hjusd8i
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example true
     *
     * @var bool
     */
    public $whetherRetry;
    protected $_name = [
        'disOrderId'                 => 'dis_order_id',
        'disSubOrderId'              => 'dis_sub_order_id',
        'isVoluntary'                => 'is_voluntary',
        'modifyFlightInfoListShrink' => 'modify_flight_info_list',
        'otaItemId'                  => 'ota_item_id',
        'reason'                     => 'reason',
        'sessionId'                  => 'session_id',
        'whetherRetry'               => 'whether_retry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }
        if (null !== $this->disSubOrderId) {
            $res['dis_sub_order_id'] = $this->disSubOrderId;
        }
        if (null !== $this->isVoluntary) {
            $res['is_voluntary'] = $this->isVoluntary;
        }
        if (null !== $this->modifyFlightInfoListShrink) {
            $res['modify_flight_info_list'] = $this->modifyFlightInfoListShrink;
        }
        if (null !== $this->otaItemId) {
            $res['ota_item_id'] = $this->otaItemId;
        }
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }
        if (null !== $this->sessionId) {
            $res['session_id'] = $this->sessionId;
        }
        if (null !== $this->whetherRetry) {
            $res['whether_retry'] = $this->whetherRetry;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TicketChangingApplyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }
        if (isset($map['dis_sub_order_id'])) {
            $model->disSubOrderId = $map['dis_sub_order_id'];
        }
        if (isset($map['is_voluntary'])) {
            $model->isVoluntary = $map['is_voluntary'];
        }
        if (isset($map['modify_flight_info_list'])) {
            $model->modifyFlightInfoListShrink = $map['modify_flight_info_list'];
        }
        if (isset($map['ota_item_id'])) {
            $model->otaItemId = $map['ota_item_id'];
        }
        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }
        if (isset($map['session_id'])) {
            $model->sessionId = $map['session_id'];
        }
        if (isset($map['whether_retry'])) {
            $model->whetherRetry = $map['whether_retry'];
        }

        return $model;
    }
}
