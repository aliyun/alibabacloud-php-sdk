<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveServiceResponseBody\conflictCdsAndOrder;

use AlibabaCloud\Dara\Model;

class conflictOrder extends Model
{
    /**
     * @var string
     */
    public $cdsId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cdsId' => 'CdsId',
        'orderId' => 'OrderId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
