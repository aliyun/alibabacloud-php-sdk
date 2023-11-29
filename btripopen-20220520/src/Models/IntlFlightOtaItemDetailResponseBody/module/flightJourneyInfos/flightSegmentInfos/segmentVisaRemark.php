<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module\flightJourneyInfos\flightSegmentInfos;

use AlibabaCloud\Tea\Model;

class segmentVisaRemark extends Model
{
    /**
     * @var string
     */
    public $depCityVisaRemark;

    /**
     * @example 1
     *
     * @var int
     */
    public $depCityVisaType;

    /**
     * @var string[]
     */
    public $stopCityVisaRemarks;

    /**
     * @var int[]
     */
    public $stopCityVisaTypes;
    protected $_name = [
        'depCityVisaRemark'   => 'dep_city_visa_remark',
        'depCityVisaType'     => 'dep_city_visa_type',
        'stopCityVisaRemarks' => 'stop_city_visa_remarks',
        'stopCityVisaTypes'   => 'stop_city_visa_types',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->depCityVisaRemark) {
            $res['dep_city_visa_remark'] = $this->depCityVisaRemark;
        }
        if (null !== $this->depCityVisaType) {
            $res['dep_city_visa_type'] = $this->depCityVisaType;
        }
        if (null !== $this->stopCityVisaRemarks) {
            $res['stop_city_visa_remarks'] = $this->stopCityVisaRemarks;
        }
        if (null !== $this->stopCityVisaTypes) {
            $res['stop_city_visa_types'] = $this->stopCityVisaTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return segmentVisaRemark
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dep_city_visa_remark'])) {
            $model->depCityVisaRemark = $map['dep_city_visa_remark'];
        }
        if (isset($map['dep_city_visa_type'])) {
            $model->depCityVisaType = $map['dep_city_visa_type'];
        }
        if (isset($map['stop_city_visa_remarks'])) {
            if (!empty($map['stop_city_visa_remarks'])) {
                $model->stopCityVisaRemarks = $map['stop_city_visa_remarks'];
            }
        }
        if (isset($map['stop_city_visa_types'])) {
            if (!empty($map['stop_city_visa_types'])) {
                $model->stopCityVisaTypes = $map['stop_city_visa_types'];
            }
        }

        return $model;
    }
}
