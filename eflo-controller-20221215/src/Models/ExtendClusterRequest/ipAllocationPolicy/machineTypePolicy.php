<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\ipAllocationPolicy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ExtendClusterRequest\ipAllocationPolicy\machineTypePolicy\bonds;

class machineTypePolicy extends Model
{
    /**
     * @var bonds[]
     */
    public $bonds;

    /**
     * @var string
     */
    public $machineType;
    protected $_name = [
        'bonds' => 'Bonds',
        'machineType' => 'MachineType',
    ];

    public function validate()
    {
        if (\is_array($this->bonds)) {
            Model::validateArray($this->bonds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bonds) {
            if (\is_array($this->bonds)) {
                $res['Bonds'] = [];
                $n1 = 0;
                foreach ($this->bonds as $item1) {
                    $res['Bonds'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
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
        if (isset($map['Bonds'])) {
            if (!empty($map['Bonds'])) {
                $model->bonds = [];
                $n1 = 0;
                foreach ($map['Bonds'] as $item1) {
                    $model->bonds[$n1++] = bonds::fromMap($item1);
                }
            }
        }

        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }

        return $model;
    }
}
