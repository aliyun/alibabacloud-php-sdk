<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyOrderDeliveryAddressResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var mixed[]
     */
    public $resultInfo;
    protected $_name = [
        'resultInfo' => 'ResultInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultInfo) {
            $res['ResultInfo'] = $this->resultInfo;
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
        if (isset($map['ResultInfo'])) {
            $model->resultInfo = $map['ResultInfo'];
        }

        return $model;
    }
}
