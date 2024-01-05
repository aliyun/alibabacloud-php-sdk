<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alicloudproc\V20240104\Models;

use AlibabaCloud\Tea\Model;

class Address extends Model
{
    /**
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
        'cityCode'     => 'cityCode',
        'detail'       => 'detail',
        'districtCode' => 'districtCode',
        'provinceCode' => 'provinceCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cityCode) {
            $res['cityCode'] = $this->cityCode;
        }
        if (null !== $this->detail) {
            $res['detail'] = $this->detail;
        }
        if (null !== $this->districtCode) {
            $res['districtCode'] = $this->districtCode;
        }
        if (null !== $this->provinceCode) {
            $res['provinceCode'] = $this->provinceCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Address
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cityCode'])) {
            $model->cityCode = $map['cityCode'];
        }
        if (isset($map['detail'])) {
            $model->detail = $map['detail'];
        }
        if (isset($map['districtCode'])) {
            $model->districtCode = $map['districtCode'];
        }
        if (isset($map['provinceCode'])) {
            $model->provinceCode = $map['provinceCode'];
        }

        return $model;
    }
}
