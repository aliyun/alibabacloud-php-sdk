<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosQueuesRequest;

use AlibabaCloud\Dara\Model;

class effectiveBandwidthFilter extends Model
{
    /**
     * @var int
     */
    public $gte;

    /**
     * @var int
     */
    public $lte;
    protected $_name = [
        'gte' => 'Gte',
        'lte' => 'Lte',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gte) {
            $res['Gte'] = $this->gte;
        }

        if (null !== $this->lte) {
            $res['Lte'] = $this->lte;
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
        if (isset($map['Gte'])) {
            $model->gte = $map['Gte'];
        }

        if (isset($map['Lte'])) {
            $model->lte = $map['Lte'];
        }

        return $model;
    }
}
