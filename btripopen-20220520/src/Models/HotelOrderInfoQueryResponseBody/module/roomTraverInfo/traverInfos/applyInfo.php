<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\roomTraverInfo\traverInfos;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\roomTraverInfo\traverInfos\applyInfo\exceedApply;
use AlibabaCloud\Tea\Model;

class applyInfo extends Model
{
    /**
     * @example 1001
     *
     * @var string
     */
    public $applyBusinessId;

    /**
     * @var string
     */
    public $applyBusinessName;

    /**
     * @example 1424031910085891196
     *
     * @var string
     */
    public $applyId;

    /**
     * @var exceedApply[]
     */
    public $exceedApply;

    /**
     * @example ef5e74dc1f1640b08858fb043f64e477-8
     *
     * @var string
     */
    public $itineraryNo;
    protected $_name = [
        'applyBusinessId'   => 'apply_business_id',
        'applyBusinessName' => 'apply_business_name',
        'applyId'           => 'apply_id',
        'exceedApply'       => 'exceed_apply',
        'itineraryNo'       => 'itinerary_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyBusinessId) {
            $res['apply_business_id'] = $this->applyBusinessId;
        }
        if (null !== $this->applyBusinessName) {
            $res['apply_business_name'] = $this->applyBusinessName;
        }
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        if (null !== $this->exceedApply) {
            $res['exceed_apply'] = [];
            if (null !== $this->exceedApply && \is_array($this->exceedApply)) {
                $n = 0;
                foreach ($this->exceedApply as $item) {
                    $res['exceed_apply'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->itineraryNo) {
            $res['itinerary_no'] = $this->itineraryNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_business_id'])) {
            $model->applyBusinessId = $map['apply_business_id'];
        }
        if (isset($map['apply_business_name'])) {
            $model->applyBusinessName = $map['apply_business_name'];
        }
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }
        if (isset($map['exceed_apply'])) {
            if (!empty($map['exceed_apply'])) {
                $model->exceedApply = [];
                $n                  = 0;
                foreach ($map['exceed_apply'] as $item) {
                    $model->exceedApply[$n++] = null !== $item ? exceedApply::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['itinerary_no'])) {
            $model->itineraryNo = $map['itinerary_no'];
        }

        return $model;
    }
}
