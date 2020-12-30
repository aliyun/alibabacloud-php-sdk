<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dycdpapi\V20180610\Models\QueryCdpOfferByIdResponseBody;

use AlibabaCloud\SDK\Dycdpapi\V20180610\Models\QueryCdpOfferByIdResponseBody\flowOffers\flowOffer;
use AlibabaCloud\Tea\Model;

class flowOffers extends Model
{
    /**
     * @var flowOffer[]
     */
    public $flowOffer;
    protected $_name = [
        'flowOffer' => 'FlowOffer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowOffer) {
            $res['FlowOffer'] = [];
            if (null !== $this->flowOffer && \is_array($this->flowOffer)) {
                $n = 0;
                foreach ($this->flowOffer as $item) {
                    $res['FlowOffer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowOffers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowOffer'])) {
            if (!empty($map['FlowOffer'])) {
                $model->flowOffer = [];
                $n                = 0;
                foreach ($map['FlowOffer'] as $item) {
                    $model->flowOffer[$n++] = null !== $item ? flowOffer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
