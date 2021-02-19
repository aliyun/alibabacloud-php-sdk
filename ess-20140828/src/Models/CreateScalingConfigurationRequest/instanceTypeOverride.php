<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\CreateScalingConfigurationRequest;

use AlibabaCloud\Tea\Model;

class instanceTypeOverride extends Model
{
    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $weightedCapacity;
    protected $_name = [
        'instanceType'     => 'InstanceType',
        'weightedCapacity' => 'WeightedCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->weightedCapacity) {
            $res['WeightedCapacity'] = $this->weightedCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypeOverride
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['WeightedCapacity'])) {
            $model->weightedCapacity = $map['WeightedCapacity'];
        }

        return $model;
    }
}
