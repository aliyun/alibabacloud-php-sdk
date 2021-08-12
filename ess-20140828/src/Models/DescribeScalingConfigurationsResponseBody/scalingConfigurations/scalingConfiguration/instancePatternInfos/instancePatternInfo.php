<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\scalingConfiguration\instancePatternInfos;

use AlibabaCloud\Tea\Model;

class instancePatternInfo extends Model
{
    /**
     * @var float
     */
    public $maxPrice;

    /**
     * @var int
     */
    public $cores;

    /**
     * @var float
     */
    public $memory;

    /**
     * @var string
     */
    public $instanceFamilyLevel;
    protected $_name = [
        'maxPrice'            => 'MaxPrice',
        'cores'               => 'Cores',
        'memory'              => 'Memory',
        'instanceFamilyLevel' => 'InstanceFamilyLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxPrice) {
            $res['MaxPrice'] = $this->maxPrice;
        }
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instancePatternInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxPrice'])) {
            $model->maxPrice = $map['MaxPrice'];
        }
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }

        return $model;
    }
}
