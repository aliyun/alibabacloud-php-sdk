<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\journeyList\segmentList;
use AlibabaCloud\Tea\Model;

class journeyList extends Model
{
    /**
     * @example HKG
     *
     * @var string
     */
    public $arrCityCode;

    /**
     * @var string
     */
    public $arrCityName;

    /**
     * @example SHA
     *
     * @var string
     */
    public $depCityCode;

    /**
     * @var string
     */
    public $depCityName;

    /**
     * @example 2024-07-06
     *
     * @var string
     */
    public $depDate;

    /**
     * @example 0
     *
     * @var int
     */
    public $journeyIndex;

    /**
     * @var segmentList[]
     */
    public $segmentList;

    /**
     * @example 0
     *
     * @var int
     */
    public $transferCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $transferTime;
    protected $_name = [
        'arrCityCode'   => 'arr_city_code',
        'arrCityName'   => 'arr_city_name',
        'depCityCode'   => 'dep_city_code',
        'depCityName'   => 'dep_city_name',
        'depDate'       => 'dep_date',
        'journeyIndex'  => 'journey_index',
        'segmentList'   => 'segment_list',
        'transferCount' => 'transfer_count',
        'transferTime'  => 'transfer_time',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['segment_list'] = [];
            if (null !== $this->segmentList && \is_array($this->segmentList)) {
                $n = 0;
                foreach ($this->segmentList as $item) {
                    $res['segment_list'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return journeyList
     */
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
                $n                  = 0;
                foreach ($map['segment_list'] as $item) {
                    $model->segmentList[$n++] = null !== $item ? segmentList::fromMap($item) : $item;
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
