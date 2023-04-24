<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\ipAllocationPolicy\bondPolicy;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\ipAllocationPolicy\machineTypePolicy;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\ipAllocationPolicy\nodePolicy;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bondPolicy) {
            $res['BondPolicy'] = null !== $this->bondPolicy ? $this->bondPolicy->toMap() : null;
        }
        if (null !== $this->machineTypePolicy) {
            $res['MachineTypePolicy'] = [];
            if (null !== $this->machineTypePolicy && \is_array($this->machineTypePolicy)) {
                $n = 0;
                foreach ($this->machineTypePolicy as $item) {
                    $res['MachineTypePolicy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodePolicy) {
            $res['NodePolicy'] = [];
            if (null !== $this->nodePolicy && \is_array($this->nodePolicy)) {
                $n = 0;
                foreach ($this->nodePolicy as $item) {
                    $res['NodePolicy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipAllocationPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BondPolicy'])) {
            $model->bondPolicy = bondPolicy::fromMap($map['BondPolicy']);
        }
        if (isset($map['MachineTypePolicy'])) {
            if (!empty($map['MachineTypePolicy'])) {
                $model->machineTypePolicy = [];
                $n                        = 0;
                foreach ($map['MachineTypePolicy'] as $item) {
                    $model->machineTypePolicy[$n++] = null !== $item ? machineTypePolicy::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NodePolicy'])) {
            if (!empty($map['NodePolicy'])) {
                $model->nodePolicy = [];
                $n                 = 0;
                foreach ($map['NodePolicy'] as $item) {
                    $model->nodePolicy[$n++] = null !== $item ? nodePolicy::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
