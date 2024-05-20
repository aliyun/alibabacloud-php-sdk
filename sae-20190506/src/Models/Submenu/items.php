<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\Submenu;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var bool
     */
    public $defaultSelected;

    /**
     * @var string
     */
    public $itemDesc;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var string[]
     */
    public $relatingItems;
    protected $_name = [
        'defaultSelected' => 'DefaultSelected',
        'itemDesc'        => 'ItemDesc',
        'itemType'        => 'ItemType',
        'relatingItems'   => 'RelatingItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultSelected) {
            $res['DefaultSelected'] = $this->defaultSelected;
        }
        if (null !== $this->itemDesc) {
            $res['ItemDesc'] = $this->itemDesc;
        }
        if (null !== $this->itemType) {
            $res['ItemType'] = $this->itemType;
        }
        if (null !== $this->relatingItems) {
            $res['RelatingItems'] = $this->relatingItems;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultSelected'])) {
            $model->defaultSelected = $map['DefaultSelected'];
        }
        if (isset($map['ItemDesc'])) {
            $model->itemDesc = $map['ItemDesc'];
        }
        if (isset($map['ItemType'])) {
            $model->itemType = $map['ItemType'];
        }
        if (isset($map['RelatingItems'])) {
            if (!empty($map['RelatingItems'])) {
                $model->relatingItems = $map['RelatingItems'];
            }
        }

        return $model;
    }
}
