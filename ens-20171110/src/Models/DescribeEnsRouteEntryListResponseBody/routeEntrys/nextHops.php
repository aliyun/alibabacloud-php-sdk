<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRouteEntryListResponseBody\routeEntrys;

use AlibabaCloud\Tea\Model;

class nextHops extends Model
{
    /**
     * @description The ID of the next hop.
     *
     * @example i-bp1111yup9991890woxq
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @description The type of the next hop. Valid values:
     *
     * @example Instance
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
     * @return nextHops
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
