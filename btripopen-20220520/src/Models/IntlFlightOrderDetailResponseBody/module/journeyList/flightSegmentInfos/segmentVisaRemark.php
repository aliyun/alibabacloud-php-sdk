<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\journeyList\flightSegmentInfos;

use AlibabaCloud\Dara\Model;

class segmentVisaRemark extends Model
{
    /**
     * @var string
     */
    public $depCityVisaRemark;

    /**
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
        'depCityVisaRemark' => 'dep_city_visa_remark',
        'depCityVisaType' => 'dep_city_visa_type',
        'stopCityVisaRemarks' => 'stop_city_visa_remarks',
        'stopCityVisaTypes' => 'stop_city_visa_types',
    ];

    public function validate()
    {
        if (\is_array($this->stopCityVisaRemarks)) {
            Model::validateArray($this->stopCityVisaRemarks);
        }
        if (\is_array($this->stopCityVisaTypes)) {
            Model::validateArray($this->stopCityVisaTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->depCityVisaRemark) {
            $res['dep_city_visa_remark'] = $this->depCityVisaRemark;
        }

        if (null !== $this->depCityVisaType) {
            $res['dep_city_visa_type'] = $this->depCityVisaType;
        }

        if (null !== $this->stopCityVisaRemarks) {
            if (\is_array($this->stopCityVisaRemarks)) {
                $res['stop_city_visa_remarks'] = [];
                $n1 = 0;
                foreach ($this->stopCityVisaRemarks as $item1) {
                    $res['stop_city_visa_remarks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stopCityVisaTypes) {
            if (\is_array($this->stopCityVisaTypes)) {
                $res['stop_city_visa_types'] = [];
                $n1 = 0;
                foreach ($this->stopCityVisaTypes as $item1) {
                    $res['stop_city_visa_types'][$n1] = $item1;
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
        if (isset($map['dep_city_visa_remark'])) {
            $model->depCityVisaRemark = $map['dep_city_visa_remark'];
        }

        if (isset($map['dep_city_visa_type'])) {
            $model->depCityVisaType = $map['dep_city_visa_type'];
        }

        if (isset($map['stop_city_visa_remarks'])) {
            if (!empty($map['stop_city_visa_remarks'])) {
                $model->stopCityVisaRemarks = [];
                $n1 = 0;
                foreach ($map['stop_city_visa_remarks'] as $item1) {
                    $model->stopCityVisaRemarks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['stop_city_visa_types'])) {
            if (!empty($map['stop_city_visa_types'])) {
                $model->stopCityVisaTypes = [];
                $n1 = 0;
                foreach ($map['stop_city_visa_types'] as $item1) {
                    $model->stopCityVisaTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
