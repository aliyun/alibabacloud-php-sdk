<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\LuggageDirectResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example BJS
     *
     * @var string
     */
    public $cityCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $directType;
    protected $_name = [
        'cityCode'   => 'city_code',
        'directType' => 'direct_type',
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
        if (null !== $this->directType) {
            $res['direct_type'] = $this->directType;
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
        if (isset($map['direct_type'])) {
            $model->directType = $map['direct_type'];
        }

        return $model;
    }
}
