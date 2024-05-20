<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\Submenu\items;
use AlibabaCloud\Tea\Model;

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
     * @var \AlibabaCloud\SDK\Sae\V20190506\Models\Submenu[]
     */
    public $submenus;
    protected $_name = [
        'items'       => 'Items',
        'submenuDesc' => 'SubmenuDesc',
        'submenuType' => 'SubmenuType',
        'submenus'    => 'Submenus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Submenus'] = [];
            if (null !== $this->submenus && \is_array($this->submenus)) {
                $n = 0;
                foreach ($this->submenus as $item) {
                    $res['Submenus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Submenu
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
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
                $n               = 0;
                foreach ($map['Submenus'] as $item) {
                    $model->submenus[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
