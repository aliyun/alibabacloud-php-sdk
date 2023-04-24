<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\ipAllocationPolicy;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\ipAllocationPolicy\bondPolicy\bonds;
use AlibabaCloud\Tea\Model;

class bondPolicy extends Model
{
    /**
     * @var string
     */
    public $bondDefaultSubnet;

    /**
     * @var bonds[]
     */
    public $bonds;
    protected $_name = [
        'bondDefaultSubnet' => 'BondDefaultSubnet',
        'bonds'             => 'Bonds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bondDefaultSubnet) {
            $res['BondDefaultSubnet'] = $this->bondDefaultSubnet;
        }
        if (null !== $this->bonds) {
            $res['Bonds'] = [];
            if (null !== $this->bonds && \is_array($this->bonds)) {
                $n = 0;
                foreach ($this->bonds as $item) {
                    $res['Bonds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bondPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BondDefaultSubnet'])) {
            $model->bondDefaultSubnet = $map['BondDefaultSubnet'];
        }
        if (isset($map['Bonds'])) {
            if (!empty($map['Bonds'])) {
                $model->bonds = [];
                $n            = 0;
                foreach ($map['Bonds'] as $item) {
                    $model->bonds[$n++] = null !== $item ? bonds::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
