<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteRouteEntriesRequest;

use AlibabaCloud\Dara\Model;

class routeEntries extends Model
{
    /**
     * @var string
     */
    public $dstCidrBlock;
    /**
     * @var string
     */
    public $nextHop;
    /**
     * @var string
     */
    public $routeEntryId;
    /**
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'dstCidrBlock' => 'DstCidrBlock',
        'nextHop'      => 'NextHop',
        'routeEntryId' => 'RouteEntryId',
        'routeTableId' => 'RouteTableId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dstCidrBlock) {
            $res['DstCidrBlock'] = $this->dstCidrBlock;
        }

        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }

        if (null !== $this->routeEntryId) {
            $res['RouteEntryId'] = $this->routeEntryId;
        }

        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
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
        if (isset($map['DstCidrBlock'])) {
            $model->dstCidrBlock = $map['DstCidrBlock'];
        }

        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }

        if (isset($map['RouteEntryId'])) {
            $model->routeEntryId = $map['RouteEntryId'];
        }

        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
