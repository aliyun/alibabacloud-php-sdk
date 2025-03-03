<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\ipAllocationPolicy\bondPolicy;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\ipAllocationPolicy\machineTypePolicy;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\ipAllocationPolicy\nodePolicy;

class ipAllocationPolicy extends Model
{
    /**
     * @var bondPolicy
     */
    public $bondPolicy;
    /**
     * @var machineTypePolicy[]
     */
    public $machineTypePolicy;
    /**
     * @var nodePolicy[]
     */
    public $nodePolicy;
    protected $_name = [
        'bondPolicy'        => 'BondPolicy',
        'machineTypePolicy' => 'MachineTypePolicy',
        'nodePolicy'        => 'NodePolicy',
    ];

    public function validate()
    {
        if (null !== $this->bondPolicy) {
            $this->bondPolicy->validate();
        }
        if (\is_array($this->machineTypePolicy)) {
            Model::validateArray($this->machineTypePolicy);
        }
        if (\is_array($this->nodePolicy)) {
            Model::validateArray($this->nodePolicy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bondPolicy) {
            $res['BondPolicy'] = null !== $this->bondPolicy ? $this->bondPolicy->toArray($noStream) : $this->bondPolicy;
        }

        if (null !== $this->machineTypePolicy) {
            if (\is_array($this->machineTypePolicy)) {
                $res['MachineTypePolicy'] = [];
                $n1                       = 0;
                foreach ($this->machineTypePolicy as $item1) {
                    $res['MachineTypePolicy'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nodePolicy) {
            if (\is_array($this->nodePolicy)) {
                $res['NodePolicy'] = [];
                $n1                = 0;
                foreach ($this->nodePolicy as $item1) {
                    $res['NodePolicy'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['BondPolicy'])) {
            $model->bondPolicy = bondPolicy::fromMap($map['BondPolicy']);
        }

        if (isset($map['MachineTypePolicy'])) {
            if (!empty($map['MachineTypePolicy'])) {
                $model->machineTypePolicy = [];
                $n1                       = 0;
                foreach ($map['MachineTypePolicy'] as $item1) {
                    $model->machineTypePolicy[$n1++] = machineTypePolicy::fromMap($item1);
                }
            }
        }

        if (isset($map['NodePolicy'])) {
            if (!empty($map['NodePolicy'])) {
                $model->nodePolicy = [];
                $n1                = 0;
                foreach ($map['NodePolicy'] as $item1) {
                    $model->nodePolicy[$n1++] = nodePolicy::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
