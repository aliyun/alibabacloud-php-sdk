<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalV2Request\passengerSegmentRelations;

class FlightRefundPreCalV2Request extends Model
{
    /**
     * @var string
     */
    public $isvName;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var passengerSegmentRelations[]
     */
    public $passengerSegmentRelations;

    /**
     * @var int
     */
    public $preCalType;

    /**
     * @var string[]
     */
    public $ticketNos;

    /**
     * @var bool
     */
    public $voluntary;
    protected $_name = [
        'isvName' => 'isv_name',
        'orderId' => 'order_id',
        'outOrderId' => 'out_order_id',
        'passengerSegmentRelations' => 'passenger_segment_relations',
        'preCalType' => 'pre_cal_type',
        'ticketNos' => 'ticket_nos',
        'voluntary' => 'voluntary',
    ];

    public function validate()
    {
        if (\is_array($this->passengerSegmentRelations)) {
            Model::validateArray($this->passengerSegmentRelations);
        }
        if (\is_array($this->ticketNos)) {
            Model::validateArray($this->ticketNos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }

        if (null !== $this->passengerSegmentRelations) {
            if (\is_array($this->passengerSegmentRelations)) {
                $res['passenger_segment_relations'] = [];
                $n1 = 0;
                foreach ($this->passengerSegmentRelations as $item1) {
                    $res['passenger_segment_relations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->preCalType) {
            $res['pre_cal_type'] = $this->preCalType;
        }

        if (null !== $this->ticketNos) {
            if (\is_array($this->ticketNos)) {
                $res['ticket_nos'] = [];
                $n1 = 0;
                foreach ($this->ticketNos as $item1) {
                    $res['ticket_nos'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->voluntary) {
            $res['voluntary'] = $this->voluntary;
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
        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }

        if (isset($map['passenger_segment_relations'])) {
            if (!empty($map['passenger_segment_relations'])) {
                $model->passengerSegmentRelations = [];
                $n1 = 0;
                foreach ($map['passenger_segment_relations'] as $item1) {
                    $model->passengerSegmentRelations[$n1] = passengerSegmentRelations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['pre_cal_type'])) {
            $model->preCalType = $map['pre_cal_type'];
        }

        if (isset($map['ticket_nos'])) {
            if (!empty($map['ticket_nos'])) {
                $model->ticketNos = [];
                $n1 = 0;
                foreach ($map['ticket_nos'] as $item1) {
                    $model->ticketNos[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['voluntary'])) {
            $model->voluntary = $map['voluntary'];
        }

        return $model;
    }
}
