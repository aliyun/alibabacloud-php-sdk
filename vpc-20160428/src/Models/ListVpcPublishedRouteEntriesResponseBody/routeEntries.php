<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpcPublishedRouteEntriesResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpcPublishedRouteEntriesResponseBody\routeEntries\routePublishTargets;
use AlibabaCloud\Tea\Model;

class routeEntries extends Model
{
    /**
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @example rte-bp1mnnr2al0naomnpv****
     *
     * @var string
     */
    public $routeEntryId;

    /**
     * @var routePublishTargets[]
     */
    public $routePublishTargets;

    /**
     * @example vtb-2ze3jgygk9bmsj23s****
     *
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'routeEntryId'         => 'RouteEntryId',
        'routePublishTargets'  => 'RoutePublishTargets',
        'routeTableId'         => 'RouteTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->routeEntryId) {
            $res['RouteEntryId'] = $this->routeEntryId;
        }
        if (null !== $this->routePublishTargets) {
            $res['RoutePublishTargets'] = [];
            if (null !== $this->routePublishTargets && \is_array($this->routePublishTargets)) {
                $n = 0;
                foreach ($this->routePublishTargets as $item) {
                    $res['RoutePublishTargets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['RouteEntryId'])) {
            $model->routeEntryId = $map['RouteEntryId'];
        }
        if (isset($map['RoutePublishTargets'])) {
            if (!empty($map['RoutePublishTargets'])) {
                $model->routePublishTargets = [];
                $n                          = 0;
                foreach ($map['RoutePublishTargets'] as $item) {
                    $model->routePublishTargets[$n++] = null !== $item ? routePublishTargets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
