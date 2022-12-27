<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRouteEntryListResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRouteEntryListResponseBody\routeEntrys\nextHops;
use AlibabaCloud\Tea\Model;

class routeEntrys extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example 101.0.45.0/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var nextHops[]
     */
    public $nextHops;

    /**
     * @example rte-2zeksx7h436f5unk349m1
     *
     * @var string
     */
    public $routeEntryId;

    /**
     * @example test0
     *
     * @var string
     */
    public $routeEntryName;

    /**
     * @example vtb-uf62p9o5cn35fi8xgurnm
     *
     * @var string
     */
    public $routeTableId;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @example Custom
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description'          => 'Description',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'nextHops'             => 'NextHops',
        'routeEntryId'         => 'RouteEntryId',
        'routeEntryName'       => 'RouteEntryName',
        'routeTableId'         => 'RouteTableId',
        'status'               => 'Status',
        'type'                 => 'Type',
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
        if (null !== $this->nextHops) {
            $res['NextHops'] = [];
            if (null !== $this->nextHops && \is_array($this->nextHops)) {
                $n = 0;
                foreach ($this->nextHops as $item) {
                    $res['NextHops'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->routeEntryId) {
            $res['RouteEntryId'] = $this->routeEntryId;
        }
        if (null !== $this->routeEntryName) {
            $res['RouteEntryName'] = $this->routeEntryName;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeEntrys
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
        if (isset($map['NextHops'])) {
            if (!empty($map['NextHops'])) {
                $model->nextHops = [];
                $n               = 0;
                foreach ($map['NextHops'] as $item) {
                    $model->nextHops[$n++] = null !== $item ? nextHops::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RouteEntryId'])) {
            $model->routeEntryId = $map['RouteEntryId'];
        }
        if (isset($map['RouteEntryName'])) {
            $model->routeEntryName = $map['RouteEntryName'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
