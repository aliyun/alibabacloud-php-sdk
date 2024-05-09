<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateChangeResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainFeeCalculateChangeResponseBody\module\changeTrainDetails\changeTicketDetails;
use AlibabaCloud\Tea\Model;

class changeTrainDetails extends Model
{
    /**
     * @example BTC
     *
     * @var string
     */
    public $arrStationCode;

    /**
     * @var changeTicketDetails[]
     */
    public $changeTicketDetails;

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
     * @example K2345
     *
     * @var string
     */
    public $trainNo;
    protected $_name = [
        'arrStationCode'      => 'arr_station_code',
        'changeTicketDetails' => 'change_ticket_details',
        'depStationCode'      => 'dep_station_code',
        'depTime'             => 'dep_time',
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
        if (null !== $this->changeTicketDetails) {
            $res['change_ticket_details'] = [];
            if (null !== $this->changeTicketDetails && \is_array($this->changeTicketDetails)) {
                $n = 0;
                foreach ($this->changeTicketDetails as $item) {
                    $res['change_ticket_details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->depStationCode) {
            $res['dep_station_code'] = $this->depStationCode;
        }
        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }
        if (null !== $this->trainNo) {
            $res['train_no'] = $this->trainNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeTrainDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_station_code'])) {
            $model->arrStationCode = $map['arr_station_code'];
        }
        if (isset($map['change_ticket_details'])) {
            if (!empty($map['change_ticket_details'])) {
                $model->changeTicketDetails = [];
                $n                          = 0;
                foreach ($map['change_ticket_details'] as $item) {
                    $model->changeTicketDetails[$n++] = null !== $item ? changeTicketDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dep_station_code'])) {
            $model->depStationCode = $map['dep_station_code'];
        }
        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }
        if (isset($map['train_no'])) {
            $model->trainNo = $map['train_no'];
        }

        return $model;
    }
}
