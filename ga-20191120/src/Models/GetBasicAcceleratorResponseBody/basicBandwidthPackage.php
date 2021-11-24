<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAcceleratorResponseBody;

use AlibabaCloud\Tea\Model;

class basicBandwidthPackage extends Model
{
    /**
     * @description 基础带宽包带宽
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description 基础带宽包类型
     *
     * @var string
     */
    public $bandwidthType;

    /**
     * @description 基础带宽包Id
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
