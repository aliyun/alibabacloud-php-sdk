<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class IdpAttrMapConfig extends Model
{
    /**
     * @var IdpAttrMapConfigItem[]
     */
    public $mapItems;
    protected $_name = [
        'mapItems' => 'MapItems',
    ];

    public function validate()
    {
        if (\is_array($this->mapItems)) {
            Model::validateArray($this->mapItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mapItems) {
            if (\is_array($this->mapItems)) {
                $res['MapItems'] = [];
                $n1 = 0;
                foreach ($this->mapItems as $item1) {
                    $res['MapItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MapItems'])) {
            if (!empty($map['MapItems'])) {
                $model->mapItems = [];
                $n1 = 0;
                foreach ($map['MapItems'] as $item1) {
                    $model->mapItems[$n1] = IdpAttrMapConfigItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
