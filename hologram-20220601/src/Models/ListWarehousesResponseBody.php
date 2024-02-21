<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\SDK\Hologram\V20220601\Models\ListWarehousesResponseBody\warehouseList;
use AlibabaCloud\Tea\Model;

class ListWarehousesResponseBody extends Model
{
    /**
     * @var warehouseList[]
     */
    public $warehouseList;

    /**
     * @description Id of the request
     *
     * @example 819A7F0F-2951-540F-BD94-6A41ECF0281F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'warehouseList' => 'WarehouseList',
        'requestId'     => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->warehouseList) {
            $res['WarehouseList'] = [];
            if (null !== $this->warehouseList && \is_array($this->warehouseList)) {
                $n = 0;
                foreach ($this->warehouseList as $item) {
                    $res['WarehouseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWarehousesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WarehouseList'])) {
            if (!empty($map['WarehouseList'])) {
                $model->warehouseList = [];
                $n                    = 0;
                foreach ($map['WarehouseList'] as $item) {
                    $model->warehouseList[$n++] = null !== $item ? warehouseList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
