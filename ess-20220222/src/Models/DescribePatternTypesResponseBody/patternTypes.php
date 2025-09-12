<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribePatternTypesResponseBody;

use AlibabaCloud\Dara\Model;

class patternTypes extends Model
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
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var float
     */
    public $memory;
    protected $_name = [
        'cores' => 'Cores',
        'instanceFamilyLevel' => 'InstanceFamilyLevel',
        'instanceType' => 'InstanceType',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'memory' => 'Memory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }

        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }

        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
