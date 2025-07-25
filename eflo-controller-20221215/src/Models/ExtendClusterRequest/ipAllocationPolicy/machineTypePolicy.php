<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\ipAllocationPolicy;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\ipAllocationPolicy\machineTypePolicy\bonds;
use AlibabaCloud\Tea\Model;

class machineTypePolicy extends Model
{
    /**
     * @description Bond information
     *
     * @var bonds[]
     */
    public $bonds;

    /**
     * @description Machine type
     *
     * @example efg1.nvga1
     *
     * @var string
     */
    public $machineType;
    protected $_name = [
        'bonds' => 'Bonds',
        'machineType' => 'MachineType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bonds) {
            $res['Bonds'] = [];
            if (null !== $this->bonds && \is_array($this->bonds)) {
                $n = 0;
                foreach ($this->bonds as $item) {
                    $res['Bonds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return machineTypePolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bonds'])) {
            if (!empty($map['Bonds'])) {
                $model->bonds = [];
                $n = 0;
                foreach ($map['Bonds'] as $item) {
                    $model->bonds[$n++] = null !== $item ? bonds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }

        return $model;
    }
}
