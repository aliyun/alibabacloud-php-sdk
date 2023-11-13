<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyElasticBandWidthRequest extends Model
{
    /**
     * @description The new burstable protection bandwidth that you want to use. Unit: Gbit/s.
     *
     * > You can call the [DescribeElasticBandwidthSpec](~~91502~~) operation to query the available burstable protection bandwidth of the instance.
     * @example 50
     *
     * @var int
     */
    public $elasticBandwidth;

    /**
     * @description The ID of the instance.
     *
     * >  The instance must be in a normal state. You can call the [DescribeInstanceIds](~~157459~~) operation to query the IDs of all instances.
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'elasticBandwidth' => 'ElasticBandwidth',
        'instanceId'       => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticBandwidth) {
            $res['ElasticBandwidth'] = $this->elasticBandwidth;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyElasticBandWidthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticBandwidth'])) {
            $model->elasticBandwidth = $map['ElasticBandwidth'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
