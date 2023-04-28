<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\trainOrderInfo;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\trainOrderInfo\trainInfoList\trainTicketInfos;
use AlibabaCloud\Tea\Model;

class trainInfoList extends Model
{
    /**
     * @var string
     */
    public $arrTime;

    /**
     * @var string
     */
    public $depTime;

    /**
     * @var string
     */
    public $fromCityName;

    /**
     * @var string
     */
    public $fromStationName;

    /**
     * @description itemId
     *
     * @example 12312
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 120
     *
     * @var int
     */
    public $runTime;

    /**
     * @var string
     */
    public $toCityName;

    /**
     * @var string
     */
    public $toStationName;

    /**
     * @example D11
     *
     * @var string
     */
    public $trainNo;

    /**
     * @var trainTicketInfos[]
     */
    public $trainTicketInfos;
    protected $_name = [
        'arrTime'          => 'arr_time',
        'depTime'          => 'dep_time',
        'fromCityName'     => 'from_city_name',
        'fromStationName'  => 'from_station_name',
        'itemId'           => 'item_id',
        'runTime'          => 'run_time',
        'toCityName'       => 'to_city_name',
        'toStationName'    => 'to_station_name',
        'trainNo'          => 'train_no',
        'trainTicketInfos' => 'train_ticket_infos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }
        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }
        if (null !== $this->fromCityName) {
            $res['from_city_name'] = $this->fromCityName;
        }
        if (null !== $this->fromStationName) {
            $res['from_station_name'] = $this->fromStationName;
        }
        if (null !== $this->itemId) {
            $res['item_id'] = $this->itemId;
        }
        if (null !== $this->runTime) {
            $res['run_time'] = $this->runTime;
        }
        if (null !== $this->toCityName) {
            $res['to_city_name'] = $this->toCityName;
        }
        if (null !== $this->toStationName) {
            $res['to_station_name'] = $this->toStationName;
        }
        if (null !== $this->trainNo) {
            $res['train_no'] = $this->trainNo;
        }
        if (null !== $this->trainTicketInfos) {
            $res['train_ticket_infos'] = [];
            if (null !== $this->trainTicketInfos && \is_array($this->trainTicketInfos)) {
                $n = 0;
                foreach ($this->trainTicketInfos as $item) {
                    $res['train_ticket_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trainInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }
        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }
        if (isset($map['from_city_name'])) {
            $model->fromCityName = $map['from_city_name'];
        }
        if (isset($map['from_station_name'])) {
            $model->fromStationName = $map['from_station_name'];
        }
        if (isset($map['item_id'])) {
            $model->itemId = $map['item_id'];
        }
        if (isset($map['run_time'])) {
            $model->runTime = $map['run_time'];
        }
        if (isset($map['to_city_name'])) {
            $model->toCityName = $map['to_city_name'];
        }
        if (isset($map['to_station_name'])) {
            $model->toStationName = $map['to_station_name'];
        }
        if (isset($map['train_no'])) {
            $model->trainNo = $map['train_no'];
        }
        if (isset($map['train_ticket_infos'])) {
            if (!empty($map['train_ticket_infos'])) {
                $model->trainTicketInfos = [];
                $n                       = 0;
                foreach ($map['train_ticket_infos'] as $item) {
                    $model->trainTicketInfos[$n++] = null !== $item ? trainTicketInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
