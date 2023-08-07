<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteEntryRequest;

use AlibabaCloud\Tea\Model;

class nextHopList extends Model
{
    /**
     * @description The ID of the next hop of the ECMP route.
     *
     * @example ri-2zeo3xzyf3cd8r4****
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @description The type of next hop of the ECMP route entry. Set the value to **RouterInterface**.
     *
     * @example RouterInterface
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description The weight of the next hop of the ECMP route entry.
     *
     * @example 10
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'nextHopId'   => 'NextHopId',
        'nextHopType' => 'NextHopType',
        'weight'      => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nextHopList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
