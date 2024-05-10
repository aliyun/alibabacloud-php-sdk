<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateStoreViewRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example logstore
     *
     * @var string
     */
    public $storeType;

    /**
     * @description This parameter is required.
     *
     * @var StoreViewStore[]
     */
    public $stores;
    protected $_name = [
        'storeType' => 'storeType',
        'stores'    => 'stores',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storeType) {
            $res['storeType'] = $this->storeType;
        }
        if (null !== $this->stores) {
            $res['stores'] = [];
            if (null !== $this->stores && \is_array($this->stores)) {
                $n = 0;
                foreach ($this->stores as $item) {
                    $res['stores'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStoreViewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['storeType'])) {
            $model->storeType = $map['storeType'];
        }
        if (isset($map['stores'])) {
            if (!empty($map['stores'])) {
                $model->stores = [];
                $n             = 0;
                foreach ($map['stores'] as $item) {
                    $model->stores[$n++] = null !== $item ? StoreViewStore::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
