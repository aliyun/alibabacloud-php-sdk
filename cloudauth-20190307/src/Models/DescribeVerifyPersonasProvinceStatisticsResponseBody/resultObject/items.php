<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyPersonasProvinceStatisticsResponseBody\resultObject;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $provinceCnt;

    /**
     * @var string
     */
    public $provinceName;

    /**
     * @var string
     */
    public $provinceRate;
    protected $_name = [
        'provinceCnt' => 'ProvinceCnt',
        'provinceName' => 'ProvinceName',
        'provinceRate' => 'ProvinceRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->provinceCnt) {
            $res['ProvinceCnt'] = $this->provinceCnt;
        }

        if (null !== $this->provinceName) {
            $res['ProvinceName'] = $this->provinceName;
        }

        if (null !== $this->provinceRate) {
            $res['ProvinceRate'] = $this->provinceRate;
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
        if (isset($map['ProvinceCnt'])) {
            $model->provinceCnt = $map['ProvinceCnt'];
        }

        if (isset($map['ProvinceName'])) {
            $model->provinceName = $map['ProvinceName'];
        }

        if (isset($map['ProvinceRate'])) {
            $model->provinceRate = $map['ProvinceRate'];
        }

        return $model;
    }
}
