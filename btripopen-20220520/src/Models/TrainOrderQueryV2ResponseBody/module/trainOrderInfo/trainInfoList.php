<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\trainOrderInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderQueryV2ResponseBody\module\trainOrderInfo\trainInfoList\trainTicketInfos;

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
    public $fromCityAdCode;

    /**
     * @var string
     */
    public $fromCityName;

    /**
     * @var string
     */
    public $fromStationName;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var int
     */
    public $runTime;

    /**
     * @var string
     */
    public $subFromCityAdCode;

    /**
     * @var string
     */
    public $subFromCityAdName;

    /**
     * @var string
     */
    public $subToCityCode;

    /**
     * @var string
     */
    public $subToCityName;

    /**
     * @var string
     */
    public $toCityAdCode;

    /**
     * @var string
     */
    public $toCityName;

    /**
     * @var string
     */
    public $toStationName;

    /**
     * @var string
     */
    public $trainNo;

    /**
     * @var trainTicketInfos[]
     */
    public $trainTicketInfos;
    protected $_name = [
        'arrTime' => 'arr_time',
        'depTime' => 'dep_time',
        'fromCityAdCode' => 'from_city_ad_code',
        'fromCityName' => 'from_city_name',
        'fromStationName' => 'from_station_name',
        'itemId' => 'item_id',
        'runTime' => 'run_time',
        'subFromCityAdCode' => 'sub_from_city_ad_code',
        'subFromCityAdName' => 'sub_from_city_ad_name',
        'subToCityCode' => 'sub_to_city_code',
        'subToCityName' => 'sub_to_city_name',
        'toCityAdCode' => 'to_city_ad_code',
        'toCityName' => 'to_city_name',
        'toStationName' => 'to_station_name',
        'trainNo' => 'train_no',
        'trainTicketInfos' => 'train_ticket_infos',
    ];

    public function validate()
    {
        if (\is_array($this->trainTicketInfos)) {
            Model::validateArray($this->trainTicketInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrTime) {
            $res['arr_time'] = $this->arrTime;
        }

        if (null !== $this->depTime) {
            $res['dep_time'] = $this->depTime;
        }

        if (null !== $this->fromCityAdCode) {
            $res['from_city_ad_code'] = $this->fromCityAdCode;
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

        if (null !== $this->subFromCityAdCode) {
            $res['sub_from_city_ad_code'] = $this->subFromCityAdCode;
        }

        if (null !== $this->subFromCityAdName) {
            $res['sub_from_city_ad_name'] = $this->subFromCityAdName;
        }

        if (null !== $this->subToCityCode) {
            $res['sub_to_city_code'] = $this->subToCityCode;
        }

        if (null !== $this->subToCityName) {
            $res['sub_to_city_name'] = $this->subToCityName;
        }

        if (null !== $this->toCityAdCode) {
            $res['to_city_ad_code'] = $this->toCityAdCode;
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
            if (\is_array($this->trainTicketInfos)) {
                $res['train_ticket_infos'] = [];
                $n1 = 0;
                foreach ($this->trainTicketInfos as $item1) {
                    $res['train_ticket_infos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['arr_time'])) {
            $model->arrTime = $map['arr_time'];
        }

        if (isset($map['dep_time'])) {
            $model->depTime = $map['dep_time'];
        }

        if (isset($map['from_city_ad_code'])) {
            $model->fromCityAdCode = $map['from_city_ad_code'];
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

        if (isset($map['sub_from_city_ad_code'])) {
            $model->subFromCityAdCode = $map['sub_from_city_ad_code'];
        }

        if (isset($map['sub_from_city_ad_name'])) {
            $model->subFromCityAdName = $map['sub_from_city_ad_name'];
        }

        if (isset($map['sub_to_city_code'])) {
            $model->subToCityCode = $map['sub_to_city_code'];
        }

        if (isset($map['sub_to_city_name'])) {
            $model->subToCityName = $map['sub_to_city_name'];
        }

        if (isset($map['to_city_ad_code'])) {
            $model->toCityAdCode = $map['to_city_ad_code'];
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
                $n1 = 0;
                foreach ($map['train_ticket_infos'] as $item1) {
                    $model->trainTicketInfos[$n1] = trainTicketInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
