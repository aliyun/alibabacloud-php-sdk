<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class GetDeviceInfoRequest extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $ds;

    /**
     * @var string
     */
    public $factoryId;
    protected $_name = [
        'deviceId' => 'deviceId',
        'ds' => 'ds',
        'factoryId' => 'factoryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['deviceId'] = $this->deviceId;
        }

        if (null !== $this->ds) {
            $res['ds'] = $this->ds;
        }

        if (null !== $this->factoryId) {
            $res['factoryId'] = $this->factoryId;
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
        if (isset($map['deviceId'])) {
            $model->deviceId = $map['deviceId'];
        }

        if (isset($map['ds'])) {
            $model->ds = $map['ds'];
        }

        if (isset($map['factoryId'])) {
            $model->factoryId = $map['factoryId'];
        }

        return $model;
    }
}
