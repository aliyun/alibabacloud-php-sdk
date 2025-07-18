<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class IdpAttrMapConfig extends Model
{
    /**
     * @var IdpAttrMapConfigItem[]
     */
    public $mapItems;
    protected $_name = [
        'mapItems' => 'MapItems',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mapItems) {
            $res['MapItems'] = [];
            if (null !== $this->mapItems && \is_array($this->mapItems)) {
                $n = 0;
                foreach ($this->mapItems as $item) {
                    $res['MapItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IdpAttrMapConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MapItems'])) {
            if (!empty($map['MapItems'])) {
                $model->mapItems = [];
                $n = 0;
                foreach ($map['MapItems'] as $item) {
                    $model->mapItems[$n++] = null !== $item ? IdpAttrMapConfigItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
