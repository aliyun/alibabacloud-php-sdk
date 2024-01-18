<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TransitVisaResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example HGH
     *
     * @var string
     */
    public $cityCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $visaType;
    protected $_name = [
        'cityCode' => 'city_code',
        'visaType' => 'visa_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cityCode) {
            $res['city_code'] = $this->cityCode;
        }
        if (null !== $this->visaType) {
            $res['visa_type'] = $this->visaType;
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
        if (isset($map['city_code'])) {
            $model->cityCode = $map['city_code'];
        }
        if (isset($map['visa_type'])) {
            $model->visaType = $map['visa_type'];
        }

        return $model;
    }
}
