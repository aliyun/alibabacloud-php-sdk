<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\orderItemList;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleOrderItemListBaggageRuleBaggageInfoMapValue;
use AlibabaCloud\Tea\Model;

class baggageRule extends Model
{
    /**
     * @var string
     */
    public $baggageDigest;

    /**
     * @var ModuleOrderItemListBaggageRuleBaggageInfoMapValue[][]
     */
    public $baggageInfoMap;

    /**
     * @example true
     *
     * @var bool
     */
    public $structuredBaggage;
    protected $_name = [
        'baggageDigest'     => 'baggage_digest',
        'baggageInfoMap'    => 'baggage_info_map',
        'structuredBaggage' => 'structured_baggage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baggageDigest) {
            $res['baggage_digest'] = $this->baggageDigest;
        }
        if (null !== $this->baggageInfoMap) {
            $res['baggage_info_map'] = $this->baggageInfoMap;
        }
        if (null !== $this->structuredBaggage) {
            $res['structured_baggage'] = $this->structuredBaggage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baggageRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['baggage_digest'])) {
            $model->baggageDigest = $map['baggage_digest'];
        }
        if (isset($map['baggage_info_map'])) {
            $model->baggageInfoMap = $map['baggage_info_map'];
        }
        if (isset($map['structured_baggage'])) {
            $model->structuredBaggage = $map['structured_baggage'];
        }

        return $model;
    }
}
