<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteEntryRequest;

use AlibabaCloud\Tea\Model;

class nextHopList extends Model
{
    /**
     * @var string
     */
    public $nextHopId;

    /**
     * @var int
     */
    public $weight;

    /**
     * @var string
     */
    public $nextHopType;
    protected $_name = [
        'nextHopId'   => 'NextHopId',
        'weight'      => 'Weight',
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
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }

        return $model;
    }
}
