<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListGatewayRouteTableEntriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListGatewayRouteTableEntriesResponseBody\gatewayRouteEntryModels\nextHops;

class gatewayRouteEntryModels extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $destinationCidrBlock;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $nextHopId;
    /**
     * @var string
     */
    public $nextHopType;
    /**
     * @var nextHops[]
     */
    public $nextHops;
    /**
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
        if (\is_array($this->nextHops)) {
            Model::validateArray($this->nextHops);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->nextHops)) {
                $res['NextHops'] = [];
                $n1              = 0;
                foreach ($this->nextHops as $item1) {
                    $res['NextHops'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1              = 0;
                foreach ($map['NextHops'] as $item1) {
                    $model->nextHops[$n1++] = nextHops::fromMap($item1);
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
