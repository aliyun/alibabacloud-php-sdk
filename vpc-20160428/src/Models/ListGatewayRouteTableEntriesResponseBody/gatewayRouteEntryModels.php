<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListGatewayRouteTableEntriesResponseBody;

use AlibabaCloud\Tea\Model;

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
     * @var string
     */
    public $status;
    protected $_name = [
        'description'          => 'Description',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'name'                 => 'Name',
        'nextHopId'            => 'NextHopId',
        'nextHopType'          => 'NextHopType',
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
