<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetWarehouseDetailResponseBody\warehouseDetail;

class GetWarehouseDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var warehouseDetail
     */
    public $warehouseDetail;
    protected $_name = [
        'requestId' => 'RequestId',
        'warehouseDetail' => 'WarehouseDetail',
    ];

    public function validate()
    {
        if (null !== $this->warehouseDetail) {
            $this->warehouseDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->warehouseDetail) {
            $res['WarehouseDetail'] = null !== $this->warehouseDetail ? $this->warehouseDetail->toArray($noStream) : $this->warehouseDetail;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WarehouseDetail'])) {
            $model->warehouseDetail = warehouseDetail::fromMap($map['WarehouseDetail']);
        }

        return $model;
    }
}
