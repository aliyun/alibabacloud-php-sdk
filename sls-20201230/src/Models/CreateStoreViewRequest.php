<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class CreateStoreViewRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $storeType;

    /**
     * @var StoreViewStore[]
     */
    public $stores;
    protected $_name = [
        'name' => 'name',
        'storeType' => 'storeType',
        'stores' => 'stores',
    ];

    public function validate()
    {
        if (\is_array($this->stores)) {
            Model::validateArray($this->stores);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->storeType) {
            $res['storeType'] = $this->storeType;
        }

        if (null !== $this->stores) {
            if (\is_array($this->stores)) {
                $res['stores'] = [];
                $n1 = 0;
                foreach ($this->stores as $item1) {
                    $res['stores'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['storeType'])) {
            $model->storeType = $map['storeType'];
        }

        if (isset($map['stores'])) {
            if (!empty($map['stores'])) {
                $model->stores = [];
                $n1 = 0;
                foreach ($map['stores'] as $item1) {
                    $model->stores[$n1++] = StoreViewStore::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
