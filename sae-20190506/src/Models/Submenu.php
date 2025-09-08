<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\Submenu\items;

class Submenu extends Model
{
    /**
     * @var items[]
     */
    public $items;

    /**
     * @var string
     */
    public $submenuDesc;

    /**
     * @var string
     */
    public $submenuType;

    /**
     * @var Submenu[]
     */
    public $submenus;
    protected $_name = [
        'items' => 'Items',
        'submenuDesc' => 'SubmenuDesc',
        'submenuType' => 'SubmenuType',
        'submenus' => 'Submenus',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        if (\is_array($this->submenus)) {
            Model::validateArray($this->submenus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['Items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->submenuDesc) {
            $res['SubmenuDesc'] = $this->submenuDesc;
        }

        if (null !== $this->submenuType) {
            $res['SubmenuType'] = $this->submenuType;
        }

        if (null !== $this->submenus) {
            if (\is_array($this->submenus)) {
                $res['Submenus'] = [];
                $n1 = 0;
                foreach ($this->submenus as $item1) {
                    $res['Submenus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['Items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SubmenuDesc'])) {
            $model->submenuDesc = $map['SubmenuDesc'];
        }

        if (isset($map['SubmenuType'])) {
            $model->submenuType = $map['SubmenuType'];
        }

        if (isset($map['Submenus'])) {
            if (!empty($map['Submenus'])) {
                $model->submenus = [];
                $n1 = 0;
                foreach ($map['Submenus'] as $item1) {
                    $model->submenus[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
