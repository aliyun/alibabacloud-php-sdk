<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceInfoRequest extends Model
{
    /**
     * @example pn_69873
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 2022-07-26
     *
     * @var string
     */
    public $ds;

    /**
     * @example pn_95
     *
     * @var string
     */
    public $factoryId;
    protected $_name = [
        'deviceId'  => 'deviceId',
        'ds'        => 'ds',
        'factoryId' => 'factoryId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetDeviceInfoRequest
     */
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
