<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\journeyList\segmentList;

class journeyList extends Model
{
    /**
     * @var string
     */
    public $arrCityCode;

    /**
     * @var string
     */
    public $arrCityName;

    /**
     * @var string
     */
    public $depCityCode;

    /**
     * @var string
     */
    public $depCityName;

    /**
     * @var string
     */
    public $depDate;

    /**
     * @var int
     */
    public $journeyIndex;

    /**
     * @var segmentList[]
     */
    public $segmentList;

    /**
     * @var int
     */
    public $transferCount;

    /**
     * @var int
     */
    public $transferTime;
    protected $_name = [
        'arrCityCode' => 'arr_city_code',
        'arrCityName' => 'arr_city_name',
        'depCityCode' => 'dep_city_code',
        'depCityName' => 'dep_city_name',
        'depDate' => 'dep_date',
        'journeyIndex' => 'journey_index',
        'segmentList' => 'segment_list',
        'transferCount' => 'transfer_count',
        'transferTime' => 'transfer_time',
    ];

    public function validate()
    {
        if (\is_array($this->segmentList)) {
            Model::validateArray($this->segmentList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }

        if (null !== $this->arrCityName) {
            $res['arr_city_name'] = $this->arrCityName;
        }

        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }

        if (null !== $this->depCityName) {
            $res['dep_city_name'] = $this->depCityName;
        }

        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }

        if (null !== $this->journeyIndex) {
            $res['journey_index'] = $this->journeyIndex;
        }

        if (null !== $this->segmentList) {
            if (\is_array($this->segmentList)) {
                $res['segment_list'] = [];
                $n1 = 0;
                foreach ($this->segmentList as $item1) {
                    $res['segment_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->transferCount) {
            $res['transfer_count'] = $this->transferCount;
        }

        if (null !== $this->transferTime) {
            $res['transfer_time'] = $this->transferTime;
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
        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }

        if (isset($map['arr_city_name'])) {
            $model->arrCityName = $map['arr_city_name'];
        }

        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }

        if (isset($map['dep_city_name'])) {
            $model->depCityName = $map['dep_city_name'];
        }

        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }

        if (isset($map['journey_index'])) {
            $model->journeyIndex = $map['journey_index'];
        }

        if (isset($map['segment_list'])) {
            if (!empty($map['segment_list'])) {
                $model->segmentList = [];
                $n1 = 0;
                foreach ($map['segment_list'] as $item1) {
                    $model->segmentList[$n1++] = segmentList::fromMap($item1);
                }
            }
        }

        if (isset($map['transfer_count'])) {
            $model->transferCount = $map['transfer_count'];
        }

        if (isset($map['transfer_time'])) {
            $model->transferTime = $map['transfer_time'];
        }

        return $model;
    }
}
