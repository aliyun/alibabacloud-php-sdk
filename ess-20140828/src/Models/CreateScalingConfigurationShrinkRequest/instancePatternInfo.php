<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\CreateScalingConfigurationShrinkRequest;

use AlibabaCloud\Tea\Model;

class instancePatternInfo extends Model
{
    /**
     * @var int
     */
    public $cores;

    /**
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @var float
     */
    public $maxPrice;

    /**
     * @var float
     */
    public $memory;
    protected $_name = [
        'cores'               => 'Cores',
        'instanceFamilyLevel' => 'InstanceFamilyLevel',
        'maxPrice'            => 'MaxPrice',
        'memory'              => 'Memory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }
        if (null !== $this->maxPrice) {
            $res['MaxPrice'] = $this->maxPrice;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
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
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }
        if (isset($map['MaxPrice'])) {
            $model->maxPrice = $map['MaxPrice'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
