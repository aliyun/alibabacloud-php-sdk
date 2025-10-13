<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListWarehousesResponseBody\warehouseList;

class ListWarehousesResponseBody extends Model
{
    /**
     * @var warehouseList[]
     */
    public $warehouseList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'warehouseList' => 'WarehouseList',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->warehouseList)) {
            Model::validateArray($this->warehouseList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->warehouseList) {
            if (\is_array($this->warehouseList)) {
                $res['WarehouseList'] = [];
                $n1 = 0;
                foreach ($this->warehouseList as $item1) {
                    $res['WarehouseList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['WarehouseList'])) {
            if (!empty($map['WarehouseList'])) {
                $model->warehouseList = [];
                $n1 = 0;
                foreach ($map['WarehouseList'] as $item1) {
                    $model->warehouseList[$n1] = warehouseList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
