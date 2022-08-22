<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetWeatherResponseBody;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetWeatherResponseBody\result\currentMeteorology;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var currentMeteorology
     */
    public $currentMeteorology;
    protected $_name = [
        'currentMeteorology' => 'CurrentMeteorology',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentMeteorology) {
            $res['CurrentMeteorology'] = null !== $this->currentMeteorology ? $this->currentMeteorology->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentMeteorology'])) {
            $model->currentMeteorology = currentMeteorology::fromMap($map['CurrentMeteorology']);
        }

        return $model;
    }
}
