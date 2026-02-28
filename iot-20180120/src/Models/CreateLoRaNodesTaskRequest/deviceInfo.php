<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateLoRaNodesTaskRequest;

use AlibabaCloud\Dara\Model;

class deviceInfo extends Model
{
    /**
     * @var string
     */
    public $devEui;

    /**
     * @var string
     */
    public $pinCode;
    protected $_name = [
        'devEui' => 'DevEui',
        'pinCode' => 'PinCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->devEui) {
            $res['DevEui'] = $this->devEui;
        }

        if (null !== $this->pinCode) {
            $res['PinCode'] = $this->pinCode;
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
        if (isset($map['DevEui'])) {
            $model->devEui = $map['DevEui'];
        }

        if (isset($map['PinCode'])) {
            $model->pinCode = $map['PinCode'];
        }

        return $model;
    }
}
