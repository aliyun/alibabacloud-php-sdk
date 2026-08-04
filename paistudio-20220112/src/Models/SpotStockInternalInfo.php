<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class SpotStockInternalInfo extends Model
{
    /**
     * @var int
     */
    public $availableQuantity;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $hpnZone;

    /**
     * @var int
     */
    public $totalQuantity;
    protected $_name = [
        'availableQuantity' => 'availableQuantity',
        'clusterId' => 'clusterId',
        'hpnZone' => 'hpnZone',
        'totalQuantity' => 'totalQuantity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableQuantity) {
            $res['availableQuantity'] = $this->availableQuantity;
        }

        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }

        if (null !== $this->hpnZone) {
            $res['hpnZone'] = $this->hpnZone;
        }

        if (null !== $this->totalQuantity) {
            $res['totalQuantity'] = $this->totalQuantity;
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
        if (isset($map['availableQuantity'])) {
            $model->availableQuantity = $map['availableQuantity'];
        }

        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        if (isset($map['hpnZone'])) {
            $model->hpnZone = $map['hpnZone'];
        }

        if (isset($map['totalQuantity'])) {
            $model->totalQuantity = $map['totalQuantity'];
        }

        return $model;
    }
}
