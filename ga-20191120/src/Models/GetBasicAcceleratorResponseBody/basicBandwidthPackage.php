<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAcceleratorResponseBody;

use AlibabaCloud\Tea\Model;

class basicBandwidthPackage extends Model
{
    /**
     * @description The bandwidth value of the basic bandwidth plan. Unit: Mbit/s.
     *
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The type of the bandwidth that is provided by the basic bandwidth plan. Valid values:
     *
     *   **Basic**: basic
     *   **Enhanced**: enhanced
     *   **Advanced**: premium
     *
     * @example Basic
     *
     * @var string
     */
    public $bandwidthType;

    /**
     * @description The ID of the basic bandwidth plan.
     *
     * @example gbwp-bp1d8xk8bg139j0fw****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'bandwidth'     => 'Bandwidth',
        'bandwidthType' => 'BandwidthType',
        'instanceId'    => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bandwidthType) {
            $res['BandwidthType'] = $this->bandwidthType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return basicBandwidthPackage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BandwidthType'])) {
            $model->bandwidthType = $map['BandwidthType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
