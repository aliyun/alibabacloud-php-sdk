<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SuperappNlp\V20240930\Models\NlpAddressNormalizationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $cityStd;

    /**
     * @var string
     */
    public $districtStd;

    /**
     * @var string
     */
    public $provinceStd;

    /**
     * @var string[]
     */
    public $results;

    /**
     * @var string
     */
    public $statusEs;
    protected $_name = [
        'cityStd'     => 'CityStd',
        'districtStd' => 'DistrictStd',
        'provinceStd' => 'ProvinceStd',
        'results'     => 'Results',
        'statusEs'    => 'StatusEs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cityStd) {
            $res['CityStd'] = $this->cityStd;
        }
        if (null !== $this->districtStd) {
            $res['DistrictStd'] = $this->districtStd;
        }
        if (null !== $this->provinceStd) {
            $res['ProvinceStd'] = $this->provinceStd;
        }
        if (null !== $this->results) {
            $res['Results'] = $this->results;
        }
        if (null !== $this->statusEs) {
            $res['StatusEs'] = $this->statusEs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CityStd'])) {
            $model->cityStd = $map['CityStd'];
        }
        if (isset($map['DistrictStd'])) {
            $model->districtStd = $map['DistrictStd'];
        }
        if (isset($map['ProvinceStd'])) {
            $model->provinceStd = $map['ProvinceStd'];
        }
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = $map['Results'];
            }
        }
        if (isset($map['StatusEs'])) {
            $model->statusEs = $map['StatusEs'];
        }

        return $model;
    }
}
