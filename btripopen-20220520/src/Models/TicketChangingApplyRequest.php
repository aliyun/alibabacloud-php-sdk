<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingApplyRequest\modifyFlightInfoList;

class TicketChangingApplyRequest extends Model
{
    /**
     * @var string
     */
    public $disOrderId;

    /**
     * @var string
     */
    public $disSubOrderId;

    /**
     * @var int
     */
    public $isVoluntary;

    /**
     * @var modifyFlightInfoList[]
     */
    public $modifyFlightInfoList;

    /**
     * @var string
     */
    public $otaItemId;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var bool
     */
    public $whetherRetry;
    protected $_name = [
        'disOrderId' => 'dis_order_id',
        'disSubOrderId' => 'dis_sub_order_id',
        'isVoluntary' => 'is_voluntary',
        'modifyFlightInfoList' => 'modify_flight_info_list',
        'otaItemId' => 'ota_item_id',
        'reason' => 'reason',
        'sessionId' => 'session_id',
        'whetherRetry' => 'whether_retry',
    ];

    public function validate()
    {
        if (\is_array($this->modifyFlightInfoList)) {
            Model::validateArray($this->modifyFlightInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->modifyFlightInfoList)) {
                $res['modify_flight_info_list'] = [];
                $n1 = 0;
                foreach ($this->modifyFlightInfoList as $item1) {
                    $res['modify_flight_info_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['modify_flight_info_list'] as $item1) {
                    $model->modifyFlightInfoList[$n1] = modifyFlightInfoList::fromMap($item1);
                    ++$n1;
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
