<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\UAIDConversionResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $phoneList;
    protected $_name = [
        'phoneList' => 'PhoneList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phoneList) {
            $res['PhoneList'] = $this->phoneList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhoneList'])) {
            $model->phoneList = $map['PhoneList'];
        }

        return $model;
    }
}
