<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetWeatherResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetWeatherResponseBody\result\currentMeteorology;

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
        if (null !== $this->currentMeteorology) {
            $this->currentMeteorology->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentMeteorology) {
            $res['CurrentMeteorology'] = null !== $this->currentMeteorology ? $this->currentMeteorology->toArray($noStream) : $this->currentMeteorology;
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
        if (isset($map['CurrentMeteorology'])) {
            $model->currentMeteorology = currentMeteorology::fromMap($map['CurrentMeteorology']);
        }

        return $model;
    }
}
