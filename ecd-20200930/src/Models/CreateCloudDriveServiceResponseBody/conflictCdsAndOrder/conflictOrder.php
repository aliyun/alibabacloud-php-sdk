<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveServiceResponseBody\conflictCdsAndOrder;

use AlibabaCloud\Tea\Model;

class conflictOrder extends Model
{
    /**
     * @description The ID of the enterprise drive. The enterprise drive cannot be used if the order is unpaid.
     *
     * @example cn-hangzhou+cds-778205****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @description The ID of the order. You can obtain an order ID on the **Orders** page in the Expenses and Costs console.
     *
     * @example 22442411898****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cdsId' => 'CdsId',
        'orderId' => 'OrderId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conflictOrder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
