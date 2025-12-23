<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateIpcOrderRequest extends Model
{
    /**
     * @var string
     */
    public $capability;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $period;
    protected $_name = [
        'capability' => 'Capability',
        'deviceId' => 'DeviceId',
        'period' => 'Period',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capability) {
            $res['Capability'] = $this->capability;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
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
        if (isset($map['Capability'])) {
            $model->capability = $map['Capability'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        return $model;
    }
}
