<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponseBody\routeTables\routeEntrys;

use AlibabaCloud\Tea\Model;

class nextHops extends Model
{
    /**
     * @var int
     */
    public $weight;

    /**
     * @var string
     */
    public $nextHopId;

    /**
     * @var string
     */
    public $nextHopType;

    /**
     * @var int
     */
    public $enabled;
    protected $_name = [
        'weight'      => 'Weight',
        'nextHopId'   => 'NextHopId',
        'nextHopType' => 'NextHopType',
        'enabled'     => 'Enabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
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
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        return $model;
    }
}
