<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateRefundResponseBody\module\refundTrainDetails\refundTicketDetails;

class refundTrainDetails extends Model
{
    /**
     * @var string
     */
    public $arrStationCode;

    /**
     * @var string
     */
    public $depStationCode;

    /**
     * @var string
     */
    public $depTime;

    /**
     * @var refundTicketDetails[]
     */
    public $refundTicketDetails;

    /**
     * @var string
     */
    public $trainNo;
    protected $_name = [
        'arrStationCode' => 'arr_station_code',
        'depStationCode' => 'dep_station_code',
        'depTime' => 'dep_time',
        'refundTicketDetails' => 'refund_ticket_details',
        'trainNo' => 'train_no',
    ];

    public function validate()
    {
        if (\is_array($this->refundTicketDetails)) {
            Model::validateArray($this->refundTicketDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->refundTicketDetails)) {
                $res['refund_ticket_details'] = [];
                $n1 = 0;
                foreach ($this->refundTicketDetails as $item1) {
                    $res['refund_ticket_details'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->trainNo) {
            $res['train_no'] = $this->trainNo;
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
                $n1 = 0;
                foreach ($map['refund_ticket_details'] as $item1) {
                    $model->refundTicketDetails[$n1] = refundTicketDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['train_no'])) {
            $model->trainNo = $map['train_no'];
        }

        return $model;
    }
}
