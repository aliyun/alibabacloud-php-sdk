<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\GetBasicAcceleratorResponseBody;

use AlibabaCloud\Tea\Model;

class crossDomainBandwidthPackage extends Model
{
    /**
     * @description 跨境带宽包带宽
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description 跨境带宽包Id
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
