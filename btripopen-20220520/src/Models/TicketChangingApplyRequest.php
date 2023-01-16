<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingApplyRequest\modifyFlightInfoList;
use AlibabaCloud\Tea\Model;

class TicketChangingApplyRequest extends Model
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
     * @example 1
     *
     * @var int
     */
    public $isVoluntary;

    /**
     * @var modifyFlightInfoList[]
     */
    public $modifyFlightInfoList;

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
        'disOrderId'           => 'dis_order_id',
        'disSubOrderId'        => 'dis_sub_order_id',
        'isVoluntary'          => 'is_voluntary',
        'modifyFlightInfoList' => 'modify_flight_info_list',
        'otaItemId'            => 'ota_item_id',
        'reason'               => 'reason',
        'sessionId'            => 'session_id',
        'whetherRetry'         => 'whether_retry',
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
        if (null !== $this->modifyFlightInfoList) {
            $res['modify_flight_info_list'] = [];
            if (null !== $this->modifyFlightInfoList && \is_array($this->modifyFlightInfoList)) {
                $n = 0;
                foreach ($this->modifyFlightInfoList as $item) {
                    $res['modify_flight_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return TicketChangingApplyRequest
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
            if (!empty($map['modify_flight_info_list'])) {
                $model->modifyFlightInfoList = [];
                $n                           = 0;
                foreach ($map['modify_flight_info_list'] as $item) {
                    $model->modifyFlightInfoList[$n++] = null !== $item ? modifyFlightInfoList::fromMap($item) : $item;
                }
            }
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
