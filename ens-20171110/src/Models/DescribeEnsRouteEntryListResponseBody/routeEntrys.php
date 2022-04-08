<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRouteEntryListResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRouteEntryListResponseBody\routeEntrys\nextHops;
use AlibabaCloud\Tea\Model;

class routeEntrys extends Model
{
    /**
     * @description 路由条目的描述信息。
     *
     * @var string
     */
    public $description;

    /**
     * @description 路由条目的目标网段。
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description 下一跳
     *
     * @var nextHops[]
     */
    public $nextHops;

    /**
     * @description 路由条目的ID。
     *
     * @var string
     */
    public $routeEntryId;

    /**
     * @description 路由条目的名称。
     *
     * @var string
     */
    public $routeEntryName;

    /**
     * @description 路由表ID。
     *
     * @var string
     */
    public $routeTableId;

    /**
     * @description 路由条目的状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 路由条目的类型
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
