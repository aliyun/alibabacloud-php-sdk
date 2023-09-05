<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class UpdateAcceleratorCrossBorderStatusRequest extends Model
{
    /**
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example true
     *
     * @var bool
     */
    public $crossBorderStatus;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'acceleratorId'     => 'AcceleratorId',
        'clientToken'       => 'ClientToken',
        'crossBorderStatus' => 'CrossBorderStatus',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->crossBorderStatus) {
            $res['CrossBorderStatus'] = $this->crossBorderStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAcceleratorCrossBorderStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CrossBorderStatus'])) {
            $model->crossBorderStatus = $map['CrossBorderStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
