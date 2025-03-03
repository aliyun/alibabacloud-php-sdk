<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\ipAllocationPolicy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\ipAllocationPolicy\bondPolicy\bonds;

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
        if (\is_array($this->bonds)) {
            Model::validateArray($this->bonds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bondDefaultSubnet) {
            $res['BondDefaultSubnet'] = $this->bondDefaultSubnet;
        }

        if (null !== $this->bonds) {
            if (\is_array($this->bonds)) {
                $res['Bonds'] = [];
                $n1           = 0;
                foreach ($this->bonds as $item1) {
                    $res['Bonds'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BondDefaultSubnet'])) {
            $model->bondDefaultSubnet = $map['BondDefaultSubnet'];
        }

        if (isset($map['Bonds'])) {
            if (!empty($map['Bonds'])) {
                $model->bonds = [];
                $n1           = 0;
                foreach ($map['Bonds'] as $item1) {
                    $model->bonds[$n1++] = bonds::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
