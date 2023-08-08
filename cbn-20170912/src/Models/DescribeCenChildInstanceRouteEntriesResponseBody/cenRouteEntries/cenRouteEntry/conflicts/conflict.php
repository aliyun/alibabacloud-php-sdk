<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\conflicts;

use AlibabaCloud\Tea\Model;

class conflict extends Model
{
    /**
     * @description The destination CIDR block of the overlapping route.
     *
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The ID of the peer network instance on which the overlapping routes are found.
     *
     * @example ccn-0q3b7oviikmm9h****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the peer network instance on which the overlapping routes are found. Valid values: Valid values:
     *
     *   **VPC**: VPC
     *   **VBR**: VBR
     *   **CCN**: CCN instance
     *
     * @example CCN
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The ID of the region where the peer network instance on which the overlapping routes are found is deployed.
     *
     * @example ccn-cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The cause of the route error. Valid values:
     *
     *   **conflict**: The routes have the same destination CIDR block.
     *   **overflow**: The number of routes in the route table configured on another network instance has reached the upper limit.
     *
     * @example conflict
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'instanceId'           => 'InstanceId',
        'instanceType'         => 'InstanceType',
        'regionId'             => 'RegionId',
        'status'               => 'Status',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conflict
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
