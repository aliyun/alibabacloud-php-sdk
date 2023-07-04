<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteRouteEntryRequest;

use AlibabaCloud\Tea\Model;

class nextHopList extends Model
{
    /**
     * @description The ID of the next hop that is configured for ECMP routing. You can specify information about at most 16 next hops.
     *
     * @example ri-2zeo3xzyf38r43cd****
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @description The type of the next hop that is configured for ECMP routing. Set the value to **RouterInterface**. You can specify information about at most 16 next hops.
     *
     * @example RouterInterface
     *
     * @var string
     */
    public $nextHopType;
    protected $_name = [
        'nextHopId'   => 'NextHopId',
        'nextHopType' => 'NextHopType',
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

        return $model;
    }
}
