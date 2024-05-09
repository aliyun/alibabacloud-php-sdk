<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundResponseBody\module\refundTrainDetails\refundTicketDetails;
use AlibabaCloud\Tea\Model;

class refundTrainDetails extends Model
{
    /**
     * @example BTC
     *
     * @var string
     */
    public $arrStationCode;

    /**
     * @example BDC
     *
     * @var string
     */
    public $depStationCode;

    /**
     * @example 2024-05-06 15:19:01
     *
     * @var string
     */
    public $depTime;

    /**
     * @var refundTicketDetails[]
     */
    public $refundTicketDetails;

    /**
     * @example K1234
     *
     * @var string
     */
    public $trainNo;
    protected $_name = [
        'arrStationCode'      => 'arr_station_code',
        'depStationCode'      => 'dep_station_code',
        'depTime'             => 'dep_time',
        'refundTicketDetails' => 'refund_ticket_details',
        'trainNo'             => 'train_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrStationCode) {
            $res['arr_station_code'] = $this->arrStationCode;
        }
        if (null !== $this->depStationCode) {
            $res['dep_station_code'] = $this->depStationCode;
        }
        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }
        if (null !== $this->refundTicketDetails) {
            $res['refund_ticket_details'] = [];
            if (null !== $this->refundTicketDetails && \is_array($this->refundTicketDetails)) {
                $n = 0;
                foreach ($this->refundTicketDetails as $item) {
                    $res['refund_ticket_details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->trainNo) {
            $res['train_no'] = $this->trainNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundTrainDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_station_code'])) {
            $model->arrStationCode = $map['arr_station_code'];
        }
        if (isset($map['dep_station_code'])) {
            $model->depStationCode = $map['dep_station_code'];
        }
        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }
        if (isset($map['refund_ticket_details'])) {
            if (!empty($map['refund_ticket_details'])) {
                $model->refundTicketDetails = [];
                $n                          = 0;
                foreach ($map['refund_ticket_details'] as $item) {
                    $model->refundTicketDetails[$n++] = null !== $item ? refundTicketDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['train_no'])) {
            $model->trainNo = $map['train_no'];
        }

        return $model;
    }
}
