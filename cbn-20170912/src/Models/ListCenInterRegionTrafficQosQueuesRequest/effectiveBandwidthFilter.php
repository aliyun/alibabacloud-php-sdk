<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosQueuesRequest;

use AlibabaCloud\Tea\Model;

class effectiveBandwidthFilter extends Model
{
    /**
     * @description 实际生效带宽大于或等于指定带宽值。
     *
     * @example 50
     *
     * @var int
     */
    public $gte;

    /**
     * @description 实际生效带宽小于或等于指定带宽值。
     *
     * @example 20
     *
     * @var int
     */
    public $lte;
    protected $_name = [
        'gte' => 'Gte',
        'lte' => 'Lte',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return effectiveBandwidthFilter
     */
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
