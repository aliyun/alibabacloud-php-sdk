<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAttributeRequest;

use AlibabaCloud\Dara\Model;

class cpuOptions extends Model
{
    /**
     * @var int
     */
    public $core;

    /**
     * @var int
     */
    public $threadsPerCore;

    /**
     * @var string
     */
    public $topologyType;

    /**
     * @var string
     */
    public $nestedVirtualization;
    protected $_name = [
        'core' => 'Core',
        'threadsPerCore' => 'ThreadsPerCore',
        'topologyType' => 'TopologyType',
        'nestedVirtualization' => 'NestedVirtualization',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->core) {
            $res['Core'] = $this->core;
        }

        if (null !== $this->threadsPerCore) {
            $res['ThreadsPerCore'] = $this->threadsPerCore;
        }

        if (null !== $this->topologyType) {
            $res['TopologyType'] = $this->topologyType;
        }

        if (null !== $this->nestedVirtualization) {
            $res['NestedVirtualization'] = $this->nestedVirtualization;
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
        if (isset($map['Core'])) {
            $model->core = $map['Core'];
        }

        if (isset($map['ThreadsPerCore'])) {
            $model->threadsPerCore = $map['ThreadsPerCore'];
        }

        if (isset($map['TopologyType'])) {
            $model->topologyType = $map['TopologyType'];
        }

        if (isset($map['NestedVirtualization'])) {
            $model->nestedVirtualization = $map['NestedVirtualization'];
        }

        return $model;
    }
}
