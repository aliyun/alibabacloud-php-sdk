<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\ViewSmartAccessGatewayRoutesResponseBody;

use AlibabaCloud\Dara\Model;

class routes extends Model
{
    /**
     * @var string[]
     */
    public $conflictCidrs;

    /**
     * @var string
     */
    public $cost;

    /**
     * @var string
     */
    public $dst;

    /**
     * @var int
     */
    public $idx;

    /**
     * @var string
     */
    public $nexthop;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'conflictCidrs' => 'ConflictCidrs',
        'cost' => 'Cost',
        'dst' => 'Dst',
        'idx' => 'Idx',
        'nexthop' => 'Nexthop',
        'role' => 'Role',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->conflictCidrs)) {
            Model::validateArray($this->conflictCidrs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conflictCidrs) {
            if (\is_array($this->conflictCidrs)) {
                $res['ConflictCidrs'] = [];
                $n1 = 0;
                foreach ($this->conflictCidrs as $item1) {
                    $res['ConflictCidrs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }

        if (null !== $this->dst) {
            $res['Dst'] = $this->dst;
        }

        if (null !== $this->idx) {
            $res['Idx'] = $this->idx;
        }

        if (null !== $this->nexthop) {
            $res['Nexthop'] = $this->nexthop;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ConflictCidrs'])) {
            if (!empty($map['ConflictCidrs'])) {
                $model->conflictCidrs = [];
                $n1 = 0;
                foreach ($map['ConflictCidrs'] as $item1) {
                    $model->conflictCidrs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }

        if (isset($map['Dst'])) {
            $model->dst = $map['Dst'];
        }

        if (isset($map['Idx'])) {
            $model->idx = $map['Idx'];
        }

        if (isset($map['Nexthop'])) {
            $model->nexthop = $map['Nexthop'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
