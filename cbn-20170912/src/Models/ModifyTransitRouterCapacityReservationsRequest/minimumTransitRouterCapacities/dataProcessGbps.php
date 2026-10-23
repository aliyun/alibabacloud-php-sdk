<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyTransitRouterCapacityReservationsRequest\minimumTransitRouterCapacities;

use AlibabaCloud\Dara\Model;

class dataProcessGbps extends Model
{
    /**
     * @var int
     */
    public $target;
    protected $_name = [
        'target' => 'Target',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->target) {
            $res['Target'] = $this->target;
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
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
