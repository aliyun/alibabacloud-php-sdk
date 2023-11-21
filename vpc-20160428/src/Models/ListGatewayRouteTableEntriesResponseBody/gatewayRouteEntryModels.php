<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListGatewayRouteTableEntriesResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListGatewayRouteTableEntriesResponseBody\gatewayRouteEntryModels\nextHops;
use AlibabaCloud\Tea\Model;

class gatewayRouteEntryModels extends Model
{
    /**
     * @description The name of the route entry.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination CIDR block of the route.
     *
     * @example 192.168.0.5
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The name of the route entry.
     *
     * The name must be 2 to 128 characters in length and can contain letter, digits, periods (.), underscores (\_), and hyphens (-). The name must start with a letter.
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the next hop.
     *
     * @example i-bp11gcl0sm85t9bi****
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @description The type of the next hop. Valid values:
     *
     *   **EcsInstance**: Elastic Compute Service (ECS) instance
     *   **NetworkInterface**: elastic network interfaces (ENIs).
     *   **Local**: local next hop
     *
     * @example EcsInstance
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description The information about the next hop.
     *
     * @var nextHops[]
     */
    public $nextHops;

    /**
     * @description The status of the route entry. Valid values:
     *
     *   **Pending**
     *   **Available**
     *   **Modifying**
     *
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'description'          => 'Description',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'name'                 => 'Name',
        'nextHopId'            => 'NextHopId',
        'nextHopType'          => 'NextHopType',
        'nextHops'             => 'NextHops',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->nextHops) {
            $res['NextHops'] = [];
            if (null !== $this->nextHops && \is_array($this->nextHops)) {
                $n = 0;
                foreach ($this->nextHops as $item) {
                    $res['NextHops'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gatewayRouteEntryModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['NextHops'])) {
            if (!empty($map['NextHops'])) {
                $model->nextHops = [];
                $n               = 0;
                foreach ($map['NextHops'] as $item) {
                    $model->nextHops[$n++] = null !== $item ? nextHops::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
