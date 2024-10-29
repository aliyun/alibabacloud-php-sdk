<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\ancillaryItemDetailList;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\ancillaryItemDetailList\ancillary\baggageAncillary;
use AlibabaCloud\Tea\Model;

class ancillary extends Model
{
    /**
     * @description ancillay_id
     *
     * @example MDY2NTAxLCJleHAiOjE2NxNzM3MDEsIm5ix
     *
     * @var string
     */
    public $ancillaryId;

    /**
     * @description ancillary product type currently supports 4: paid luggage
     *
     * @example 4
     *
     * @var int
     */
    public $ancillaryType;

    /**
     * @var baggageAncillary
     */
    public $baggageAncillary;
    protected $_name = [
        'ancillaryId'      => 'ancillary_id',
        'ancillaryType'    => 'ancillary_type',
        'baggageAncillary' => 'baggage_ancillary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ancillaryId) {
            $res['ancillary_id'] = $this->ancillaryId;
        }
        if (null !== $this->ancillaryType) {
            $res['ancillary_type'] = $this->ancillaryType;
        }
        if (null !== $this->baggageAncillary) {
            $res['baggage_ancillary'] = null !== $this->baggageAncillary ? $this->baggageAncillary->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ancillary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ancillary_id'])) {
            $model->ancillaryId = $map['ancillary_id'];
        }
        if (isset($map['ancillary_type'])) {
            $model->ancillaryType = $map['ancillary_type'];
        }
        if (isset($map['baggage_ancillary'])) {
            $model->baggageAncillary = baggageAncillary::fromMap($map['baggage_ancillary']);
        }

        return $model;
    }
}
