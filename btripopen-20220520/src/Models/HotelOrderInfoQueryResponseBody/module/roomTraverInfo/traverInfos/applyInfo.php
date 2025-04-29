<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\roomTraverInfo\traverInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\roomTraverInfo\traverInfos\applyInfo\exceedApply;

class applyInfo extends Model
{
    /**
     * @var string
     */
    public $applyBusinessId;

    /**
     * @var string
     */
    public $applyBusinessName;

    /**
     * @var string
     */
    public $applyId;

    /**
     * @var exceedApply[]
     */
    public $exceedApply;

    /**
     * @var string
     */
    public $itineraryNo;
    protected $_name = [
        'applyBusinessId' => 'apply_business_id',
        'applyBusinessName' => 'apply_business_name',
        'applyId' => 'apply_id',
        'exceedApply' => 'exceed_apply',
        'itineraryNo' => 'itinerary_no',
    ];

    public function validate()
    {
        if (\is_array($this->exceedApply)) {
            Model::validateArray($this->exceedApply);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->exceedApply)) {
                $res['exceed_apply'] = [];
                $n1 = 0;
                foreach ($this->exceedApply as $item1) {
                    $res['exceed_apply'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->itineraryNo) {
            $res['itinerary_no'] = $this->itineraryNo;
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
                $n1 = 0;
                foreach ($map['exceed_apply'] as $item1) {
                    $model->exceedApply[$n1++] = exceedApply::fromMap($item1);
                }
            }
        }

        if (isset($map['itinerary_no'])) {
            $model->itineraryNo = $map['itinerary_no'];
        }

        return $model;
    }
}
