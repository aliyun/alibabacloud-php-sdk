<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\SDK\Hologram\V20220601\Models\GetWarehouseDetailResponseBody\warehouseDetail;
use AlibabaCloud\Tea\Model;

class GetWarehouseDetailResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example D3AE84AB-0873-5FC7-A4C4-8CF869D2FA70
     *
     * @var string
     */
    public $requestId;

    /**
     * @var warehouseDetail
     */
    public $warehouseDetail;
    protected $_name = [
        'requestId'       => 'RequestId',
        'warehouseDetail' => 'WarehouseDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->warehouseDetail) {
            $res['WarehouseDetail'] = null !== $this->warehouseDetail ? $this->warehouseDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWarehouseDetailResponseBody
     */
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
