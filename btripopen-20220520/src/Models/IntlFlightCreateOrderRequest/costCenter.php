<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightCreateOrderRequest;

use AlibabaCloud\Dara\Model;

class costCenter extends Model
{
    /**
     * @var string
     */
    public $costCenterName;

    /**
     * @var string
     */
    public $costCenterNumber;
    protected $_name = [
        'costCenterName' => 'cost_center_name',
        'costCenterNumber' => 'cost_center_number',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costCenterName) {
            $res['cost_center_name'] = $this->costCenterName;
        }

        if (null !== $this->costCenterNumber) {
            $res['cost_center_number'] = $this->costCenterNumber;
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
        if (isset($map['cost_center_name'])) {
            $model->costCenterName = $map['cost_center_name'];
        }

        if (isset($map['cost_center_number'])) {
            $model->costCenterNumber = $map['cost_center_number'];
        }

        return $model;
    }
}
