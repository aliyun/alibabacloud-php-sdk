<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListAcceleratorsResponseBody\accelerators;

use AlibabaCloud\Tea\Model;

class crossDomainBandwidthPackage extends Model
{
    /**
     * @description The bandwidth that is provided by the cross-border acceleration bandwidth plan. Unit: Mbit/s.
     *
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The ID of the cross-border acceleration bandwidth plan.
     *
     * @example gbwp-bp1d8xk8bg139j0fw****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'bandwidth'  => 'Bandwidth',
        'instanceId' => 'InstanceId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return crossDomainBandwidthPackage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
