<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alicloudproc\V20240104\Models\CreateSourcingProjectRequest\subjects;

use AlibabaCloud\Tea\Model;

class address extends Model
{
    /**
     * @example 530600
     *
     * @var string
     */
    public $cityCode;

    /**
     * @example 蒙姑镇XXX
     *
     * @var string
     */
    public $detail;

    /**
     * @example 530624
     *
     * @var string
     */
    public $districtCode;

    /**
     * @example 530000
     *
     * @var string
     */
    public $provinceCode;
    protected $_name = [
        'cityCode'     => 'CityCode',
        'detail'       => 'Detail',
        'districtCode' => 'DistrictCode',
        'provinceCode' => 'ProvinceCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cityCode) {
            $res['CityCode'] = $this->cityCode;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->districtCode) {
            $res['DistrictCode'] = $this->districtCode;
        }
        if (null !== $this->provinceCode) {
            $res['ProvinceCode'] = $this->provinceCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return address
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CityCode'])) {
            $model->cityCode = $map['CityCode'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['DistrictCode'])) {
            $model->districtCode = $map['DistrictCode'];
        }
        if (isset($map['ProvinceCode'])) {
            $model->provinceCode = $map['ProvinceCode'];
        }

        return $model;
    }
}
