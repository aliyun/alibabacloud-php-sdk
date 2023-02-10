<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateLoRaNodesTaskRequest;

use AlibabaCloud\Tea\Model;

class deviceInfo extends Model
{
    /**
     * @example d896e0efff00****
     *
     * @var string
     */
    public $devEui;

    /**
     * @example 123***
     *
     * @var string
     */
    public $pinCode;
    protected $_name = [
        'devEui'  => 'DevEui',
        'pinCode' => 'PinCode',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return deviceInfo
     */
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
